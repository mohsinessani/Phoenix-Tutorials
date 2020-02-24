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
        $sql = "SELECT * FROM about_us";

        //Prepare sql query
        $stmt = $conn->prepare($sql);
            
        if($stmt->execute())
        {
            $output = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
    }
    catch(PDOException $e)
    {
        echo "Connection failed: " . $e->getMessage();
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

    <title>Phoenix Tutorials|| Dashboard</title>

    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="build/css/custom.min.css" rel="stylesheet">
    <style type="text/css">
      .myright{
        float: right !important;
      }
    </style>
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

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Phoenix Tutorial About us Information</small></h2>
                        <ul class="nav navbar-right">
                            <!-- <a href="packages_add.php" class="btn btn-dark"> <i class="fa fa-plus"> Add New </i></a> -->
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                  <div class="x_content">

                    <div class="row">

                      <!-- <p>About Us</p> -->
                     <?php
                        foreach ($output as $row) {
                            echo '
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                      <div class="pricing">
                                        <div class="title" Style="height:50px !important;">
                                          <h2 >About Us</h2>
                                          <p class="pull left"> '.  date("l") . " " . date("F j, Y") .'</p>
                                          <p class="pull right myright"> Last modify is '.$row['update_date'].'</p>
                                        </div>
                                        <div class="x_content">
                                          <div class="">
                                            <div class="pricing_features">
                                              <ul class="list-unstyled text-left">
                                                <li><strong>'.$row['about'].'</strong></li>
                                              </ul>
                                            </div>
                                          </div>
                                          <div class="pricing_footer">
                                            <a href="about_add.php?id='.$row['id'].'" class="btn btn-warning">Edit</a>
                                            <a href="#" class="btn btn-danger disabled">Delete</a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>';
                        }
                    ?>

                    </div>
                  </div>
                </div>
              </div>

              <!-- <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Naimah Academy About us Information</small></h2>
                        <ul class="nav navbar-right">
                            <!-- <a href="packages_add.php" class="btn btn-dark"> <i class="fa fa-plus"> Add New </i></a> -->
                        <!-- </ul>
                        <div class="clearfix"></div>
                    </div>
                  <div class="x_content">

                    <div class="row"> -->

                      <!-- <p>About Us</p> -->
                     <!-- <?php
                        // foreach ($output as $row) {
                        //     echo '
                        //             <div class="col-md-12 col-sm-12 col-xs-12">
                        //               <div class="pricing">
                        //                 <div class="title" Style="height:50px !important;">
                        //                   <h2 >About Us</h2>
                        //                   <p class="pull left"> '.  date("l") . " " . date("F j, Y") .'</p>
                        //                   <p class="pull right myright"> Last modify is '.$row['update_date'].'</p>
                        //                 </div>
                        //                 <div class="x_content">
                        //                   <div class="">
                        //                     <div class="pricing_features">
                        //                       <ul class="list-unstyled text-left">
                        //                         <li><strong>'.$row['about'].'</strong></li>
                        //                       </ul>
                        //                     </div>
                        //                   </div>
                        //                   <div class="pricing_footer">
                        //                     <a href="about_add.php?id='.$row['id'].'" class="btn btn-warning">Edit</a>
                        //                     <a href="#" class="btn btn-danger disabled">Delete</a>
                        //                   </div>
                        //                 </div>
                        //               </div>
                        //             </div>';
                        // }
                    ?>

                    </div>
                  </div>
                </div>
              </div> -->
            </div>
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
    
    <!-- Custom Theme Scripts -->
    <script src="build/js/custom.min.js"></script>
  </body>
</html>
