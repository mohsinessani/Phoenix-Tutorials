<?php 

   include_once('login_check.php');
    include_once('source/config.php');
// $post_title=$_POST['post_title'];
$post_title= '';

$output = [];
// $action = "source/package_form.php";

        try 
        {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // Make a sql query
            $sql = "SELECT * FROM post ";

            //Prepare sql query
            $stmt = $conn->prepare($sql);
            
            // $stmt->bindParam(':about_id', $_GET['id']);

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

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Naimah IT Academy || Dashboard</title>

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
                  <div class="x_title">
                    <h2>Blogs</small></h2>
                    <ul class="nav navbar-right">
                        <a href="add_post.php" class="btn btn-primary "><i class="fa fa-plus"> New Post</i></a>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
        <?php
          $countt = 0;
          // $not_set = 'not set';
          foreach ($output as $row) {
            echo '
            

                    <div class="col-md-4 col-sm-6 col-xs-12">
                  <div class="x_panel">
                    <div class="x_title">
                      <h2> '.$row['post_title'].' <small></small></h2>
                      <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="add_post.php" title="Add Post"> <i class="fa fa-plus-square-o"></i> Add Post </a>
                            </li>
                            <li><a href="post_update.php?id='.$row['id'].'" title="Update Post"><i class="fa fa-pencil-square-o"></i> Edit Post</a>
                            <li><a href="source/delete_post.php?id='.$row['id'].'" onclick = "return confirm(\'Do you really want to Delete?\')" title="Delete Post"><i class="fa fa-trash"> </i> Delete </a></li>
                            </li>
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
                            '.$row['post_date'].'
                              <span class=pull-right>
                                 <span class="glyphicon glyphicon-thumbs-up">'.$row['like_num'].'</span>&nbsp;
 
                                <span class="glyphicon glyphicon-thumbs-down">'.$row['dislike_num'].'</span>&nbsp;
                              </span>

                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-4">
                          <div class="weather-icon">
                            <img scr=../images/blogs/'.$row['post_image'].'>

                          </div>
                        </div>
                        <div class="col-sm-12">
                          <div class="weather-text">
                            <img src=images/blogs/'.$row['post_image'].' style="    MAX-WIDTH: 100%;">
                          </div>
                        </div>
                      </div>
                      
                      <div class="clearfix"></div>


                      <div class="row weather-days">
                        <div class="col-sm-12">
                          <div class="daily-weather">
                            <p>'.$row['post_description'].'</p>
                          </div>
                          <blockquote class="theme-colored pt-20 pb-20">
                            <p class="mb-15">'.$row['post_tag'].'</p>
                          </blockquote>
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
