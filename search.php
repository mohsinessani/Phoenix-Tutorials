<?php
    include_once('academy_admin/source/config.php');
    
    
    //connect with the database
    $db = new mysqli($servername,$username,$password,$dbname);
     if(isset($_POST["query"]))  
 {  
      $output = '';  
      $query = "SELECT * FROM notes WHERE topic LIKE '%".$_POST["query"]."%'";  
      $result = mysqli_query($connect, $query);  
      $output = '<ul class="list-unstyled">';  
      if(mysqli_num_rows($result) > 0)  
      {  
           while($row = mysqli_fetch_array($result))  
           {  
                $output .= '<li>'.$row["topic"].'</li>';  
           }  
      }  
      else  
      {  
           $output .= '<li>topic Not Found</li>';  
      }  
      $output .= '</ul>';  
      echo $output;  
 }  
?>