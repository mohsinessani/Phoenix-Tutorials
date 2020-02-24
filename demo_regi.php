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
    
    $name = trim($_POST['reservation_name']);
    $email = trim($_POST['reservation_email']);
    $phone = trim($_POST['reservation_phone']);
    $date = trim($_POST['reservation_date']);
    $course= trim($_POST['reservation_course']);
    $message= trim($_POST['reservation_message']);
    
    $full_name = strip_tags($name);
    $user_email = strip_tags($email);
    $user_phone = strip_tags($phone);
    $user_course = strip_tags($course);
    $user_date = strip_tags($date);
    $user_message = strip_tags($message);


    
    // sha256 password hashing
    // $hashed_password = hash('sha256', $user_pass);
    
    $query = "INSERT INTO inquiry(inq_name,inq_email,inq_phone,inq_course,inq_date,inq_message) VALUES(:name, :email, :phone, :course, :date, :message)";
    
    $stmt = $conn->prepare( $query );
    $stmt->bindParam(':name', $full_name);
    $stmt->bindParam(':email', $user_email);
    $stmt->bindParam(':phone', $user_phone);
    $stmt->bindParam(':course', $user_course);
    $stmt->bindParam(':date', $user_date);
    $stmt->bindParam(':message', $user_message);


    
    // check for successfull registration
        if ( $stmt->execute() ) {
      $response['status'] = 'success';
      $response['message'] = '<span class="glyphicon glyphicon-ok"></span> &nbsp; Request submited sucessfully, will contact you as soon as possible';
      header("Refresh: 5; URL=index.php" );
        } else {
            $response['status'] = 'error'; // could not register
      $response['message'] = '<span class="glyphicon glyphicon-info-sign"></span> &nbsp; could not register, try again later';
        } 
  }
  
  echo json_encode($response);