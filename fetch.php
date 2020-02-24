<?php
//fetch.php
if(isset($_POST["reg_id"]))
{
 $connect = mysqli_connect("localhost", "root", "", "phoenix_tutorials");
 $output = '';
 $query = "SELECT * FROM register_online WHERE reg_id = '".$_POST["reg_id"]."' ";
 $result = mysqli_query($connect, $query);
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
  <div class="table-responsive">
    <center><img src="../students/images/student/'.$row['image'].'" class="img-circle" width="150px" height="150px" ></center>
    <table class="table table-striped table-bordered">
    
        <tr>
          <th>Name</th>
        <td>'.$row["name"].'</td>
      </tr>
      <tr>
        <th>Email</th>
        <td>'.$row["email"].'</td>
      </tr>
      <tr>
        <th>Phone</th>
        <td>'.$row["phone"].'</td>
      </tr>
      <tr>
        <th>Course</th>
        <td>'.$row["course"].'</td>
      </tr>
      <tr>
      <th>Parent No</th>
      <td>'.$row["p_no"].'</td>
      </tr>

      <tr>
      <th>Address </th>
      <td>
      '.$row["address"].'
      </td>
      </tr> 

      <tr>
      <th>Gender</th>
      <td>
      '.$row["gender"].'
      </td>
      </tr>

      <tr>
      <th>Date Of Birth</th>
      <td>
      '.$row["dob"].'
      </td>
      </tr>

      <tr>
        <th>Status</th>
        <td>'.$row["status"].'</td>
      </tr>
    </table>
      <center>
      <a href="feesview.php?id='.$row['reg_id'].'" class="btn btn-info" title="Fees View"><i class="fa fa-rupee"></i> Fees</a>
      <a href="attdview.php?id='.$row['reg_id'].'" class="btn btn-info" title="Attendance View"><i class="fa fa-signal"></i> Attendance</a>
      <a href="source/delete_candidate.php?reg_id='.$row['reg_id'].'" class="btn btn-info"  onclick="return confirm("Do you really want to Delete?")" title="delete"><span class="glyphicon glyphicon-trash"></span></a>
      </center>
    </div>
  ';
//   $query_1 = "SELECT reg_id FROM register_online WHERE reg_id < '".$_POST['reg_id']."' ORDER BY reg_id DESC LIMIT 1";
//   $result_1 = mysqli_query($connect, $query_1);
//   $data_1 = mysqli_fetch_assoc($result_1);
//   $query_2 = "SELECT reg_id FROM register_online WHERE reg_id > '".$_POST['reg_id']."' ORDER BY reg_id ASC LIMIT 1";
//   $result_2 = mysqli_query($connect, $query_2);
//   $data_2 = mysqli_fetch_assoc($result_2);
//   $if_previous_disable = '';
//   $if_next_disable = '';
//   if($data_1["reg_id"] == "")
//   {
//   $if_previous_disable = 'disabled';
//   }
//   if($data_2["reg_id"] == "")
//   {
//   $if_next_disable = 'disabled';
//   }
//   $output .= '
//   <br /><br />
// //   <div align="center">
// //   <button type="button" name="previous" class="btn btn-warning btn-sm previous" id="'.$data_1["reg_id"].'" '.$if_previous_disable.'>Previous</button>
// //   <button type="button" name="next" class="btn btn-warning btn-sm next" id="'.$data_2["reg_id"].'" '.$if_next_disable.'>Next</button>
// //   </div>
//   <br /><br />
 // ';
 }
 echo $output;
}

?>