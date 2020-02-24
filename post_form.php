<?php 

require_once 'config.php';

if (isset($_POST['submit']) && isset($_FILES['uploads'])) {


  $post_title        = $_POST['post_title'];
  $post_date       = $_POST['post_date'];
  // $post_location   =$_POST['post_location'];
  $post_description  =$_POST['post_description'];
  // $post_image     = $_POST['post_image'];
  $image_types       = ['image/jpeg', 'image/png'];
  $post_dir       = '../academy_admin/../images/blogs/';

  $image_size_limit = 2000000; // 5e+6 Bytes

  //validation
  $validation = "";
  $multiple = true;

  // if(count($_FILES['uploads']['size']) > 20)
  // {
  //  $validation .= "Only 20 or less no. of files are allowd.<br>";
  // }


  if (count($_FILES['uploads']['size']) > 1) {
    $multiple = false;
  }


  if(empty($post_title))
  {
    $validation .= "Please enter blog title.<br>";
  }

  if(empty($post_date) )
  {
    $validation .= "Please enter blog date(format).<br>";
  }

  if(empty($post_description) )
  {
    $validation .= "Please enter blog Description.<br>";
  }

  //image size validation
  foreach ($_FILES['uploads']['size'] as $size) {
    if($size > $image_size_limit)
    {
      $validation .= "File size should be less than or equal to 5MB!<br>";
      echo $validation;
      exit();
    }
  }

  //image type validation
  foreach ($_FILES['uploads']['type'] as $type) {
    if(!in_array($type, $image_types))
    {
      $validation .= "Only \"jpeg\" and \"png\" images are allowd!<br>";
      echo $validation;
      exit();
    }
  }

  //Weather image has any error
  foreach ($_FILES['uploads']['error'] as $err) {
    if($err)
    {
      $validation .= "Sorry 1 or more files has an error!<br>";
      echo $validation;
      exit();
    }
  }

  if(!empty($validation))
  {
    echo $validation;
    exit();
  }
  //end of validation

  try
  {
    //PDO connection
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    //set PDO error mode exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //SQL query
    $sql = "INSERT INTO post(post_title, post_image, post_description, post_date, update_date) 
            VALUES (:post_title, :post_image, :post_description, :post_date,  Now())";

    //Prepare query
    $stmt = $conn->prepare($sql);

    $level = 0;
    foreach ($_FILES['uploads']['tmp_name'] as $image_tmp) {

      $post_image  = time() . "$level." . str_replace('image/', '', $_FILES['uploads']['type'][$level]);
      $destination = $post_dir . $post_image;
      // $created     = time();
      // $updated     = $created;

      if(move_uploaded_file($image_tmp, $destination))
      {
        //binding parameters
        $stmt->bindParam(':post_title', $post_title);
        $stmt->bindParam(':post_date', $post_date);
        $stmt->bindParam(':post_location', $post_location);
        $stmt->bindParam(':post_description', $post_description);
        $stmt->bindParam(':post_image', $post_image);
        // $stmt->bindParam(':post_update', Now());
        // $stmt->bindParam(':created', $created);
        // $stmt->bindParam(':updated', $updated);

        //Query execution
        $stmt->execute();
      }
      else
      {
        break;
      }

      $level++;
    }

    echo "Blog added Successfully!";

  }
  catch(PDOEXCEPTION $ex)
  {
    echo "Connection failed : " . $ex->getMessage();
  }

}
else
{
  echo "Please select an image file.<br>";
}


 ?>