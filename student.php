<?php 
    include_once('login_check.php');
	
    include_once('source/config.php');

$output = [];

        try 
        {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // Make a sql query
            $sql = "SELECT * FROM student_feedback ORDER BY status desc";

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
            $action = "";
        }

        if(isset($_GET['c_oid']))
  {
    $c_oid=$_GET['c_oid'];
    $status = "Enable";
    // $conn = new PDO("mysql:host=$servername;dbname=$db", $username, $password);
    $sql1 = "UPDATE student_feedback SET status = :status WHERE  id=:c_oid";
    $query = $conn->prepare($sql1);
    $query -> bindParam(':status',$status, PDO::PARAM_STR);
    $query-> bindParam(':c_oid',$c_oid, PDO::PARAM_STR);
    $query -> execute();
    echo "<div class='alert alert-success'>
            <a href='#' class ='close' data-dismiss='alert' aria-label='close'>&times;</a>
            <b>Success : Feedback Status is Enable Successfully...</b>
                      </div>";
          header('Refresh:3; url=student.php');
    }

    if(isset($_GET['pr_oid']))
  {
    $pr_oid=$_GET['pr_oid'];
    $status = "Disable";
    // $conn = new PDO("mysql:host=$servername;dbname=$db", $username, $password);
    $sql1 = "UPDATE student_feedback SET status = :status WHERE  id=:pr_oid";
    $query = $conn->prepare($sql1);
    $query -> bindParam(':status',$status, PDO::PARAM_STR);
    $query-> bindParam(':pr_oid',$pr_oid, PDO::PARAM_STR);
    $query -> execute();
    echo "<div class='alert alert-success'>
            <a href='#' class ='close' data-dismiss='alert' aria-label='close'>&times;</a>
            <b>Success :Feedback status is Disable...</b>
                      </div>";
          header('Refresh:3; url=student.php');
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

    <title>Phoenix Tutorials  || Dashboard</title>

    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">

    <link href="css/file_upload.css" rel="stylesheet">

     <!-- PNotify -->
    <link href="vendors/pnotify/dist/pnotify.css" rel="stylesheet">
    <link href="vendors/pnotify/dist/pnotify.buttons.css" rel="stylesheet">
    <link href="vendors/pnotify/dist/pnotify.nonblock.css" rel="stylesheet">

    <style type="text/css">
        /*to hide the default file upload button*/
        .inputfile {
            width: 0.1px;
            height: 0.1px;
            opacity: 0;
            overflow: hidden;
            position: absolute;
            z-index: -1;
        }

       /* select option[value='']{
            color : #eee;
        }*/
        /*dont fix the hieght*/
        .stepContainer
        {
            height: auto !important;
        }
    </style>

    <!-- Custom Theme Style -->
    <link href="build/css/custom.min.css" rel="stylesheet">
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
                <div class="x_panel">
        <?php
          $countt = 0;
          // $not_set = 'not set';
          foreach ($output as $row) {

          	$status = $row['status'];
            switch ($status) {
                case "Enable":
                    $status = "<span class='label label-success'>Enable </span>";
                    break;
                case "Disable":
                    $status = "<span class='label label-danger'>Disable </span>";
                    break;
                default:
                    $status = "<span class='label label-info'>Pending </span>";
                    break;
                }
            echo '
            

                    <div class="col-md-4 col-sm-6 col-xs-12">
                  <div class="x_panel">
                    <div class="x_title">
                      <h2> '.$row['name'].' <small >' . $status. '</small>

                      </h2>
                      <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i> </a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="add_stud_feedback.php" title="Add Feedback"> <i class="fa fa-plus-square-o" > </i> Add Feedback </a>
                            </li>
                            <li><a href="stud_feedback_update.php?id='.$row['id'].'" title="Update Feedback"> <i class="fa fa-pencil-square-o" ></i>Edit Feedback</a>
                            <li><a href="source/delete_student.php?id='.$row['id'].'" onclick = "return confirm(\'Do you really want to Delete?\')" title="Delete Feedback"><i class="fa fa-trash"> </i> Delete </a></li>
                          </ul>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                      </ul>
                      <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                      <div class="row">
                        <div class="col-sm-12">
                          <div class="temperature">
                            '.$row['department'].'
                              <span class=pull-right>
                              <a href="student.php?c_oid='.$row['id'].'" data-toggle="tooltip" title="Enable"><small class="label bg-green"><i class="fa fa-check-circle"></i></small></a> &nbsp;

				                  <a href="student.php?pr_oid='.$row['id'].'" data-toggle="tooltip" title="Disable"><small class="label bg-red"><i class="fa fa-times-circle-o"></i></small></a> &nbsp;</span>

                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-4">
                          <div class="weather-icon">
                            

                          </div>
                        </div>
                        <div class="col-sm-12">
                          <center><div class="weather-text" style="width:100px !important;height:100px !important">
                            <img src=images/stud-feedback/'.$row['student_photo'].' alt='.$row['name'].' class="img-circle img-responsive" width="100px !important" height="100px !important" title='.$row['name'].' data-toggle="tooltip" style="width:100px !important;height:100px !important">
                          </div></center>
                        </div>
                      </div>
                      
                      <div class="clearfix"></div>


                      <div class="row weather-days">
                        <div class="col-sm-12">
                          <div class="daily-weather">
                            <p>'.$row['feedback'].'</p>
                          </div>
                        </div>
                      <div class="clearfix"></div>
                      </div>
                    </div>
                  </div>

                </div>
                        
                ';
        $countt++;
      }
      ?>
      </div>
            </div>
        <!-- /page content -->

        <?php include_once('footer.php'); ?>
      </div>
    </div>

    <!-- jQuery -->
    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="vendors/nprogress/nprogress.js"></script>

    <script type="text/javascript" src="js/jquery.custom-file-input.js"></script>

    <!-- Jquery ajax form -->
    <script type="text/javascript" src="js/jquery.form.js"></script>
    <!-- PNotify -->
    <script src="vendors/pnotify/dist/pnotify.js"></script>
    <script src="vendors/pnotify/dist/pnotify.buttons.js"></script>
    <script src="vendors/pnotify/dist/pnotify.nonblock.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="build/js/custom.js"></script>
  </body>
</html>
