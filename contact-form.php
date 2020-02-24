<?php


  include('academy_admin/source/config.php');
  
  try {
    
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

  } catch(PDOException $e){
    
   die($e->getMessage());
  } 
  ?>
<?php

  header('Content-type: application/json');
  
  $response = array();

  if ($_POST) {
    
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $subject= trim($_POST['subject']);
    $message= trim($_POST['message']);
    
    $full_name = strip_tags($name);
    $user_email = strip_tags($email);
    $user_phone = strip_tags($phone);
    $user_subject = strip_tags($subject);
    $user_message = strip_tags($message);


    
    // sha256 password hashing
    // $hashed_password = hash('sha256', $user_pass);
    
    $query = "INSERT INTO contact(name,email,subject,phone,message) VALUES(:name, :email, :subject, :phone, :message)";
    
    $stmt = $conn->prepare( $query );
    $stmt->bindParam(':name', $full_name);
    $stmt->bindParam(':email', $user_email);
    $stmt->bindParam(':phone', $user_phone);
    $stmt->bindParam(':subject', $user_subject);
    $stmt->bindParam(':message', $user_message);


    
    // check for successfull registration
        if ( $stmt->execute() ) {
      $response['status'] = 'success';
      $response['message'] = '<span class="glyphicon glyphicon-ok"></span> &nbsp; Request submited sucessfully, will contact you as soon as possible';
      //header("Refresh: 5; URL=index.php" );
        } else {
            $response['status'] = 'error'; // could not register
      $response['message'] = '<span class="glyphicon glyphicon-info-sign"></span> &nbsp; could not register, try again later';
        } 
  }
  
  echo json_encode($response);