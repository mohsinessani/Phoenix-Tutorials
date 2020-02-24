<?php
 
include_once('login_check.php');

require_once 'config.php';

if (isset($_POST['submit']) && isset($_FILES['uploads'])) {


	$name        = $_POST['name'];
	$department       = $_POST['department'];
	$feedback		=$_POST['feedback'];
	$image_types       = ['image/jpeg', 'image/png'];
	$event_dir       = '../academy_admin/../images/stud-feedback/';

	$image_size_limit = 2000000; // 5e+6 Bytes

	//validation
	$validation = "";
	$multiple = true;

	// if(count($_FILES['uploads']['size']) > 20)
	// {
	// 	$validation .= "Only 20 or less no. of files are allowd.<br>";
	// }


	if (count($_FILES['uploads']['size']) > 1) {
		$multiple = false;
	}


	if(empty($name))
	{
		$validation .= "Please enter student name.<br>";
	}

	if(empty($department))
	{
		$validation .= "Please enter student department.<br>";
	}

	if(empty($feedback) )
	{
		$validation .= "Please enter feedback Description.<br>";
	}


	//image size validation
	foreach ($_FILES['uploads']['size'] as $size) {
		if($size > $image_size_limit)
		{
			$validation .= "File size should be less than or equal to 2MB!<br>";
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
		$sql = "INSERT INTO student_feedback(name, department, feedback, student_photo, star, update_date) 
						VALUES (:student, :student_photo, :feedback, :star, Now())";

		//Prepare query
		$stmt = $conn->prepare($sql);

		$level = 0;
		foreach ($_FILES['uploads']['tmp_name'] as $image_tmp) {

			$student_photo  = time() . "$level." . str_replace('image/', '', $_FILES['uploads']['type'][$level]);
			$destination = $event_dir . $student_photo;
			// $created     = time();
			// $updated     = $created;

			if(move_uploaded_file($image_tmp, $destination))
			{
				//binding parameters
				$stmt->bindParam(':event_title', $event_title);
				$stmt->bindParam(':event_date', $event_date);
				$stmt->bindParam(':event_location', $event_location);
				$stmt->bindParam(':event_description', $event_description);
				$stmt->bindParam(':student_photo', $student_photo);
				// $stmt->bindParam(':event_update', Now());
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

		echo "Studet feedback added Successfully!";

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