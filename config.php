<!-- <?php

	// define('DBhost', 'localhost');
	// define('DBuser', 'root');
	// define('DBPass', '');
	// define('DBname', 'naimah_academy');
	
	// try {
		
	// 	$DBcon = new PDO("mysql:host=".DBhost.";dbname=".DBname,DBuser,DBPass);
		
	// } catch(PDOException $e){
		
	// 	die($e->getMessage());
	// } 
	?>-->
	<?php

$mysqli=new mysqli("localhost", "root", "", "phoenix_tutorials");
if ($mysqli->connect_errno) {
	echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}




?>