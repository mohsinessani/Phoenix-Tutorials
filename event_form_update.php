<?php 
    include_once('login_check.php');

require_once 'source/config.php';

if (isset($_POST['submit'])) {

	$id                 = $_POST['id'];
	$event_title 		= $_POST['event_title'];
    $event_location 	= $_POST['event_location'];
    $event_date 		= $_POST['event_date']; 
    $event_description  = $_POST['event_description']; 
    // $event_image = $_POST['event_image']; 
    // $event_update 		= $_POST['event_update'];
	$image_types        = ['image/jpeg', 'image/png'];
	$gallary_dir        = '../images/';
	$has_upload         = false;

	$image_size_limit = 1000000; // 5e+6 Bytes

	//validation
	$validation = "";

	if(isset($_FILES['uploads']))
	{
		if(empty($event_title))
		{
			$validation .= "Event title can not be blank.<br>";
		}

		if(empty($event_location))
		{
			$validation .= "Event location can not be blank.<br>";
		}

		if(empty($event_description) )
		{
			$validation .= "please enter description of event<br>";
		}

		//image size validation
		if($_FILES['uploads']['size'] > $image_size_limit)
		{
			$validation .= "File size should be less than or equal to 1MB!<br>";
			echo $validation;
			exit();
		}

		//image type validation
		if(!in_array($_FILES['uploads']['type'], $image_types))
		{
			$validation .= "Only \"jpeg\" and \"png\" images are allowd!<br>";
			echo $validation;
			exit();
		}

		//Weather image has any error
		if($_FILES['uploads']['error'])
		{
			$validation .= "Sorry 1 or more files has an error!<br>";
			echo $validation;
			exit();
		}

		$has_upload = true;
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

		

		$updated = time();

		if($has_upload)
		{

		    //SQL query
			$sql = "UPDATE event 
					SET event_title = :event_title,
						event_date = :event_date,
						event_description = :event_description,
						event_location= :event_location,
						event_image = :event_image,
						event_update = Now()
 				    WHERE id = :id" ;


			//Prepare query
			$stmt = $conn->prepare($sql);

			$image_file  = time() . "$level." . str_replace('image/', '', $_FILES['uploads']['type'][$level]);
			$destination = $gallary_dir . $image_file;
			
			if(move_uploaded_file($_FILES['uploads']['tmp_name'], $destination))
			{
				//binding parameters
				$stmt->bindParam(':event_title', $event_title);
				$stmt->bindParam(':event_date', $event_date);
				$stmt->bindParam(':event_description', $event_description);
				$stmt->bindParam(':event_location', $event_location);
				$stmt->bindParam(':event_image', $event_image);
				$stmt->bindParam(':id', $id);


				//Query execution
				if ($stmt->execute()) {
					echo "Event has been updated Successfully!";
				}
				else
				{
					echo "Oops! somthing went wrong, please try again.";
				}
			}
		}
		else
		{
			//SQL query
			$sql = "UPDATE event 
					SET event_title = :event_title,
						event_date = :event_date,
						event_description = :event_description,
						event_location= :event_location,
						event_image = :event_image,
						event_update = Now()
					WHERE id = :id" ;

			//Prepare query
			$stmt = $conn->prepare($sql);

			//binding parameters
			$stmt->bindParam(':event_title', $event_title);
			$stmt->bindParam(':event_date', $event_date);
			$stmt->bindParam(':event_description', $event_description);
			$stmt->bindParam(':event_location', $event_location);
			$stmt->bindParam(':event_image', $event_image);
			$stmt->bindParam(':id', $id);

			//Query execution
			if ($stmt->execute()) {
				echo "event has been updated Successfully!";
			}
			else
			{
				echo "Oops! somthing went wrong, please try again.";
			}
		}
	}
	catch(PDOEXCEPTION $ex)
	{
		echo "Connection failed : " . $ex->getMessage();
	}

}


 ?>