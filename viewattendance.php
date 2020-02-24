<?php
    include_once('login_check.php');

include_once('source/config.php');
// $event_title=$_POST['event_title'];

 try 
        {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // Make a sql query
            $sql= "SELECT * FROM register_online WHERE status='Active' ORDER BY reg_id DESC ";

            //Prepare sql query
            $stmt = $conn->prepare($sql);

            $stmt->execute();

            if($stmt->execute())
        {
            $output = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
        }

        }
        catch(PDOException $e)
        {
            echo "Connection failed: " . $e->getMessage();
            // $action = "";
        }

        if(isset($_GET['p_oid']))
  {
    $p_oid=$_GET['p_oid'];
    $status = "Pending";
    // $conn = new PDO("mysql:host=$servername;dbname=$db", $username, $password);
    $sql1 = "UPDATE register_online SET status = :status WHERE  reg_id=:p_oid";
    $query = $conn->prepare($sql1);
    $query -> bindParam(':status',$status, PDO::PARAM_STR);
    $query-> bindParam(':p_oid',$p_oid, PDO::PARAM_STR);
    $query -> execute();
    echo "<div class='alert alert-success'>
            <a href='#' class ='close' data-dismiss='alert' aria-label='close'>&times;</a>
            <b>Success : Candidate Status Pending is Successfully Updated...</b>
                      </div>";
          header('Refresh:3; url=candidate.php');
    }

    if(isset($_GET['c_oid']))
  {
    $c_oid=$_GET['c_oid'];
    $status = "Active";
    // $conn = new PDO("mysql:host=$servername;dbname=$db", $username, $password);
    $sql1 = "UPDATE register_online SET status = :status WHERE  reg_id=:c_oid";
    $query = $conn->prepare($sql1);
    $query -> bindParam(':status',$status, PDO::PARAM_STR);
    $query-> bindParam(':c_oid',$c_oid, PDO::PARAM_STR);
    $query -> execute();
    echo "<div class='alert alert-success'>
            <a href='#' class ='close' data-dismiss='alert' aria-label='close'>&times;</a>
            <b>Success : Candidate Status Complete is Successfully Updated...</b>
                      </div>";
          header('Refresh:3; url=candidate.php');
    }

    if(isset($_GET['pr_oid']))
  {
    $pr_oid=$_GET['pr_oid'];
    $status = "Processing";
    // $conn = new PDO("mysql:host=$servername;dbname=$db", $username, $password);
    $sql1 = "UPDATE register_online SET status = :status WHERE  reg_id=:pr_oid";
    $query = $conn->prepare($sql1);
    $query -> bindParam(':status',$status, PDO::PARAM_STR);
    $query-> bindParam(':pr_oid',$pr_oid, PDO::PARAM_STR);
    $query -> execute();
    echo "<div class='alert alert-success'>
            <a href='#' class ='close' data-dismiss='alert' aria-label='close'>&times;</a>
            <b>Success :Candidate status Processing is Successfully Updated...</b>
                      </div>";
          header('Refresh:3; url=candidate.php');
    }

    if(isset($_GET['r_oid']))
  {
    $r_oid=$_GET['r_oid'];
    $status = "Disable";
    // $conn = new PDO("mysql:host=$servername;dbname=$db", $username, $password);
    $sql1 = "UPDATE register_online SET status = :status WHERE  reg_id=:r_oid";
    $query = $conn->prepare($sql1);
    $query -> bindParam(':status',$status, PDO::PARAM_STR);
    $query-> bindParam(':r_oid',$r_oid, PDO::PARAM_STR);
    $query -> execute();
    echo "<div class='alert alert-success'>
            <a href='#' class ='close' data-dismiss='alert' aria-label='close'>&times;</a>
            <b>Success : Candidate Status Cancel is Successfully Updated...</b>
                      </div>";
          header('Refresh:3; url=candidate.php');
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Phoenix Tutorials || Dashboard | All Candidate</title>

  <!-- Bootstrap core CSS -->

  
  <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

  <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <link href="build/css/custom.min.css" rel="stylesheet">


  <link href="vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet" type="text/css" />
  

  <script src="js/jquery.min.js"></script>

  <!--[if lt IE 9]>
        <script src="../assets/js/ie8-responsive-file-warning.js"></script>
        <![endif]-->

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

</head>


<body class="nav-md">

  <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col  menu_fixed">
          <div class="left_col scroll-view">
           
            <?php include_once('sidebar.php'); ?>
          </div>
        </div>

        <?php include_once('header.php'); ?>
      <!-- page content -->
      <div class="right_col" role="main">
        <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3>
                    Users
                    <small>
                    </small>
                </h3>
            </div>

            
          </div>
          <div class="clearfix"></div>

          <div class="row">

            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Online Register Student  <small>Users</small></h2>
                  
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <table id="datatable-buttons" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>Sr.No</th>
                        <th>Name</th>
                        <th>Email ID</th>
                        <th>Phone No</th>
                        <th>Course Name</th>
                        <th>Date of Register</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                    </thead>


                    <tbody>
                    <?php
                          $countt = 1;
                          
                          foreach ($output as $row) {
                          	 $status = $row['status'];
				                switch ($status) {
				                    case "Active":
				                        $status = "<span class='label label-success'>Active </span>";
				                        break;
				                    case "Pending":
				                        $status = "<span class='label label-warning'>Pending </span>";
				                        break;
				                    case "Disable":
				                        $status = "<span class='label label-danger'>Disable </span>";
				                        break;
				                    default:
				                        $status = "<span class='label label-info'>Processing </span>";
				                        break;
				                    }
                          echo' <tr>
                                  <td><div class="check-text">'.$countt.'</div></td>
                                  <td>'.$row['name'].'</td>
                                  <td>'.$row['email'].'</td>
                                  <td>'.$row['phone'].'</td>
                                  <td>'.$row['course'].'</td>
                                  <td>'.$row['date'].'</td>
                                  <td>'.$status.'<br>
                                  <a href="candidate.php?c_oid='.$row['reg_id'].'" data-toggle="tooltip" title="Active"><small class="label bg-green"><i class="fa fa-check-circle"></i></small></a> &nbsp;

				                  <a href="candidate.php?pr_oid='.$row['reg_id'].'" data-toggle="tooltip" title="Processing"><small class="label bg-blue"><i class="fa fa-spinner fa-spin"></i></small></a> &nbsp;

				                  <a href="candidate.php?p_oid='.$row['reg_id'].'" data-toggle="tooltip" title="Pending"><small class="label bg-green"><i class="fa fa-clock-o"></i></small></a> &nbsp;

				                  <a href="candidate.php?r_oid='.$row['reg_id'].'" data-toggle="tooltip" title="Cancel"><small class="label bg-red"><i class="fa fa-times-circle-o"></i></small></a> &nbsp;

                                  </td>
                                  
                                  <td>
                                    <a href="feesview.php?id='.$row['reg_id'].'" title="Fess View"><span class="glyphicon glyphicon-eye-open"></span></a>
                                    <a href="#='.$row['reg_id'].'" title="Update"><span class="glyphicon glyphicon-pencil"></span></a>
                                    <a href="source/delete_candidate.php?reg_id='.$row['reg_id'].'" onclick = "return confirm(\'Do you really want to Delete?\')" title="delete"><span class="glyphicon glyphicon-trash"></span></a>
                                  </td>
                                </tr>';
                                $countt++;
                    }
                      ?>
                      
                    </tbody>
                  </table>
                </div>
              </div>
            </div>

    
          
                </div>
              </div>
              <!-- footer content -->
             <?php include_once('footer.php'); ?>
              <!-- /footer content -->

            </div>
            <!-- /page content -->
          </div>

        </div>

        <div id="custom_notifications" class="custom-notifications dsp_none">
          <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
          </ul>
          <div class="clearfix"></div>
          <div id="notif-group" class="tabbed_notifications"></div>
        </div>

       
        <!-- Datatables-->
        <script src="vendors/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="vendors/datatables.net-bs/js/dataTables.bootstrap.js"></script>
        <script src="vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
        <script src="vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
        <script src="vendors/jszip/dist/jszip.min.js"></script>
        <script src="vendors/pdfmake/build/pdfmake.min.js"></script>
        <script src="vendors/pdfmake/build/vfs_fonts.js"></script>
        <script src="vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
        <script src="vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
       
        <script src="build/js/custom.js"></script>


        <!-- pace -->
        <script src="js/pace/pace.min.js"></script>
        <script>
          var handleDataTableButtons = function() {
              "use strict";
              0 !== $("#datatable-buttons").length && $("#datatable-buttons").DataTable({
                dom: "Bfrtip",
                buttons: [{
                  extend: "copy",
                  className: "btn-sm"
                }, {
                  extend: "csv",
                  className: "btn-sm"
                }, {
                  extend: "excel",
                  className: "btn-sm"
                }, {
                  extend: "pdf",
                  className: "btn-sm"
                }, {
                  extend: "print",
                  className: "btn-sm"
                }],
                responsive: !0
              })
            },
            TableManageButtons = function() {
              "use strict";
              return {
                init: function() {
                  handleDataTableButtons()
                }
              }
            }();
        </script>
        <script type="text/javascript">
          $(document).ready(function() {
            $('#datatable').dataTable();
            $('#datatable-keytable').DataTable({
              keys: true
            });
            $('#datatable-responsive').DataTable();
            $('#datatable-scroller').DataTable({
              ajax: "js/datatables/json/scroller-demo.json",
              deferRender: true,
              scrollY: 380,
              scrollCollapse: true,
              scroller: true
            });
            var table = $('#datatable-fixed-header').DataTable({
              fixedHeader: true
            });
          });
          TableManageButtons.init();
        </script>
</body>

</html>
