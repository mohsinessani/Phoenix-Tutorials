<?php
 include('academy_admin/source/config.php');
class Post{
    
    function __construct(){
        //database configuration
        // $dbHost = 'localhost';
        // $dbUsername = 'root';
        // $dbPassword = '';
        // $dbName = 'naimah_academy';
 include('academy_admin/source/config.php');
        
        
        //connect to the database
        $conn = new mysqli($servername, $username, $password, $dbname);
        if($conn->connect_errno){
            echo "Failed to connect to database: (" . $conn->connect_errno . ") " . $conn->connect_error;
        }else{
            $this->db = $conn;
        }
    }
    
    function get_rows($id = ''){
        if($id != ''){
            //fetch single row
            // $id = $_GET['id'];
            $query = $this->db->query("SELECT * FROM post WHERE id = $id");
            $data = $query->fetch_assoc();
        }else{
            //fetch all rows
            $query = $this->db->query("SELECT * FROM post");
            if($query->num_rows > 0){

                while($row = $query->fetch_assoc()){
                    $data[] = $row;
                }
            }else{
                $data = array();
            }
        }
        return $data;
    }
    
    function update($data = array(), $conditions = array()){
        $data_array_num = count($data);
        $cols_vals = "";
        $condition_str = "";
        $i=0;
        foreach($data as $key=>$val){
            $i++;
            $sep = ($i == $data_array_num)?'':', ';
            $cols_vals .= $key."='".$val."'".$sep;
        }
        foreach($conditions as $key=>$val){
            $i++;
            $sep = ($i == $data_array_num)?"":" AND ";
            $condition_str .= $key."='".$val."'";
        }
        //update data
        $update = $this->db->query("UPDATE post SET $cols_vals WHERE $condition_str");
        return $update?TRUE:FALSE;
    }
}
?>