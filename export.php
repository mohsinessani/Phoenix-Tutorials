<?php
include_once("db_connect.php");
$query = "SELECT reg_id, name, course FROM register_online WHERE status='Active'";
$result = mysqli_query($conn, $query) or die("database error:". mysqli_error($conn));
$records = array();
while( $rows = mysqli_fetch_assoc($result) ) {
	$records[] = $rows;
}	
if(isset($_POST["export_csv_data"])) {	
	$csv_file = "Attendace".date('Ymd') . ".csv";			
	header("Content-Type: text/csv");
	header("Content-Disposition: attachment; filename=\"$csv_file\"");	
	$fh = fopen( 'php://output', 'w' );
	$is_coloumn = true;
	if(!empty($records)) {
	  foreach($records as $record) {
		if($is_coloumn) {		  	  
		  fputcsv($fh, array_keys($record));
		  $is_coloumn = false;
		}		
		fputcsv($fh, array_values($record));
	  }
	   fclose($fh);
	}
	exit;  
}
?>