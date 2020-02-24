<?php

if(isset($_GET['id'])) 
{
    include_once('config.php');
    $output = 0;
    $id = $_GET['id'];
    try 
    {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // Make a sql query
        $sql = "DELETE FROM event WHERE id = :id ";

        //Prepare sql query
        $stmt = $conn->prepare($sql);

        $stmt->bindParam(':id', $id);
            
        if($stmt->execute())
        {
            $output = 1;
        }
        
    }
    catch(PDOException $e)
    {
        echo "Connection failed: " . $e->getMessage();
    }
}



if (isset($_SERVER["HTTP_REFERER"])) {
    header("Location: " . $_SERVER["HTTP_REFERER"]);
}


 ?>