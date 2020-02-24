<?php 
    
    include_once('login_check.php');

include_once('source/config.php');
// $event_title=$_POST['event_title'];

 try 
        {
            $conn0 = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            // set the PDO error mode to exception
            $conn0->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // Make a sql query
            $sql0 = "SELECT * FROM register_online ORDER BY reg_id DESC LIMIT 1";

            //Prepare sql query
            $stmt0 = $conn0->prepare($sql0);

            $stmt0->execute();

            if($stmt0->execute())
        {
            $output0 = $stmt0->fetchAll(PDO::FETCH_ASSOC);
            
        }

        }
        catch(PDOException $e)
        {
            echo "Connection failed: " . $e->getMessage();
            // $action = "";
        }

         try 
        {
            $conn0 = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            // set the PDO error mode to exception
            $conn0->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // Make a sql query
            $sql0 = "SELECT * FROM inquiry ORDER BY inq_id DESC LIMIT 1";

            //Prepare sql query
            $stmt0 = $conn0->prepare($sql0);

            $stmt0->execute();

            if($stmt0->execute())
        {
            $output10 = $stmt0->fetchAll(PDO::FETCH_ASSOC);
            
        }

        }
        catch(PDOException $e)
        {
            echo "Connection failed: " . $e->getMessage();
            // $action = "";
        }
         try 
        {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // Make a sql query
            $sqli = "SELECT * FROM register_online ORDER BY reg_id DESC LIMIT 10";

            //Prepare sql query
            $stmti = $conn0->prepare($sqli);

            $stmti->execute();

            if($stmti->execute())
        {
            $outputi = $stmti->fetchAll(PDO::FETCH_ASSOC);
            
        }

        }
        catch(PDOException $e)
        {
            echo "Connection failed: " . $e->getMessage();
            // $action = "";
        }
$event_title= '';
$title = 'Null';
$output = [];

        try 
        {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // Make a sql query
            $sql = "SELECT * FROM event ORDER BY event_date DESC Limit 1 ";

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
            // $action = "";
        }

// $post_title= '';

$output1 = [];
// $action = "source/package_form.php";

        try 
        {
            $conn1 = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            // set the PDO error mode to exception
            $conn1->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // Make a sql query
            $sql1 = "SELECT * FROM post ORDER BY id DESC Limit 1 ";

            //Prepare sql query
            $stmt1 = $conn1->prepare($sql1);
            
            // $stmt->bindParam(':about_id', $_GET['id']);

            $stmt1->execute();

            if($stmt1->execute())
        {
            $output1 = $stmt1->fetchAll(PDO::FETCH_ASSOC);
        }

        }
        catch(PDOException $e)
        {
            echo "Connection failed: " . $e->getMessage();
            $action = "";
        }

    //     $output = [];
    // $title = 'Null';
    // $description = 'Null';
    try 
    {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // Make a sql query
        $sql2 = "SELECT * FROM gallery ORDER BY updated DESC Limit 5";

        //Prepare sql query
        $stmt2 = $conn->prepare($sql2);
            
        if($stmt2->execute())
        {
            $output2 = $stmt2->fetchAll(PDO::FETCH_ASSOC);
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
    <link href="../academy_admin/../images/favicon.png" rel="shortcut icon" type="image/png">


    <title>Phoenix Tutorials || Dashboard</title>

    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    <link href="vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <link href="vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="build/css/custom.min.css" rel="stylesheet">
    <style type="text/css">
      .btn-aj{
            position: fixed;
            bottom: 0px;
            top: 89%;
            right: 3px;
            border-radius: 65%;
            background: rgba(247, 46, 239, 0.38);
           box-shadow: 2px 2px 32px #337ab7;
        }
        .mybtn{
            border-radius: 50% 1px;
            font-size: 3em;
            height: 96px;
            position: fixed;
            bottom: 26px;
            right: 0px;
            background: rgba(51, 122, 183, 0.35);
        }
        .img-thumbs
        {
          width: 50px;
          height: 50px;
        }
        .dataTables_filter {
            width: auto !important;
        }

        .img-thumbs
        {
          width: 50px;
          height: 50px;
        }

        table tbody tr td{
          vertical-align: middle !important;
          text-transform: capitalize;
        }

        .check-text
        {
          position: relative;
          /*left: -10px;*/
          z-index: 1;
          pointer-events: none;
          /*top: 20px;*/
          text-align: center;
        }

        .bottom-bar
        {
          position: fixed;
          bottom: 0;
          left: 0;
          right: 0;
          background-color: rgba(0,0,0,0.7);
          padding: 5px;
          display: none;
        }

        .pagination>.active>a
        {
          z-index: 0 !important;
        }
        @media only screen and (min-width:768px){ 
          .notification{
          position: relative !important;
          /* top: -160px; */
          bottom: 437px !important;
          left: 41% !important;
        }
      }
      @media only screen and (min-width:768px){ 
          .notification{
          position: relative !important;
          /* top: -160px; */
          bottom: 437px !important;
          left: 41% !important;
        }
      }
     @media only screen and (max-width:375px){ 
          .notification{
          position: relative !important;
          /* top: -160px; */
          bottom:563px !important;
          left: 24% !important;
        }
      }
    </style>
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col  ">
          <div class="left_col scroll-view">
            <?php include_once('sidebar.php'); ?>
          </div>
        </div>

        <?php include_once('header.php'); ?>

        <!-- page content -->
        <div class="right_col" role="main">
                <div class="x_panel">
                 <marquee><h2>WELCOME TO PHOENIX TUTORIALS  </h2></marquee>
                  <div class="x_title">
                   
                    <div class="row top_tiles">
            <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
              <div class="tile-stats" style="background-color:#42a982">
                <div class="icon"><i class="fa fa-check-square-o"></i>
                </div>
                <?php
          foreach ($output0 as $row0) {
             echo '
                <div class="count">'.$row0['reg_id'].'
                </div>';
                 }
                ?>

                <h3>New Sign ups</h3>
                <p>Lorem ipsum psdea itgum rixt.</p>
              </div>
            </div>
            <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
              <div class="tile-stats" style="background-color: brown">
                <div class="icon"><i class="fa fa-comments-o"></i>
                </div>
                <?php
  
                  foreach ($output10 as $row10) {
                                       echo '
                     <div class="count">'.$row10['inq_id'].'
                      </div>';                   
                  }
                   
                ?>
              
                <h3>Demo</h3>
                <p>Lorem ipsum psdea itgum rixt.</p>
              </div>
            </div>
            <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
              <div class="tile-stats" style="background-color:#7ea942">
                <div class="icon"><i class="fa fa-sort-amount-desc"></i>
                </div>
                 <?php
          foreach ($output as $row) {
             echo '
                <div class="count">'.$row['id'].'
                </div>';
                 }
                ?>

                <h3>Events</h3>
                <p>Lorem ipsum psdea itgum rixt.</p>
              </div>
            </div>
            <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
              <div class="tile-stats" style="background-color:black ">
                <div class="icon"><i class="fa fa-check-square-o"></i>
                </div>
                <?php
                foreach ($output1 as $row1) {
             echo '
                <div class="count">'.$row1['id'].'
                </div>';
                 }
                ?>

                <h3>Blogs</h3>
                <p>Lorem ipsum psdea itgum rixt.</p>
              </div>
            </div>
          </div>
                    <div class="clearfix"></div>
                  </div>

            <div class="x_panel">
                  <div class="x_title">
                    <h2>Register Candidates</small></h2>
                    <ul class="nav navbar-left" style="    margin-left: 30%;">
                        <!--<a href="gallery_add.php" class="btn btn-primary "><i class="fa fa-plus"> Add Candidate</i></a>-->
                    </ul>
                     <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                          
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                      </ul>
                      <div class="clearfix"></div>
                    
                  </div>
                  <div class="x_content table-responsive">
                    <p class="text-muted font-13 m-b-30">

                    </p>
                    <table id="datatable-checkbox" class="table table-striped table-bordered bulk_action table-responsive">
                      <thead class="table-responsive">
                        <tr>
                          <th></th>
                          <th>Name</th>
                          <th>Email ID</th>
                          <th>Phone No</th>
                          <th>Course Name</th>
                          <!-- <th>Date of Register</th> -->
                          <th>Status</th>
                          <th>Action</th>
                        </tr>
                      </thead>


                      <tbody class="responsive">
                        <?php
                          $countt = 1;
                          // $not_set = 'not set';
                          foreach ($outputi as $rowi) {

                            $status = $rowi['status'];
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

                            echo '<tr>
                                    <td><div class="check-text">'.$countt.'</div></td>
                                    <td>'.$rowi['name'].'</td>
                                    <td>'.$rowi['email'].'</td>
                                    <td>'.$rowi['phone'].'</td>
                                    <td>'.$rowi['course'].'</td>
                                    
                                    <td>'.$status.'</td>
                                    
                                    <td>
                                      <a href="source/delete_candidate.php?reg_id=='.$rowi['reg_id'].'" onclick = "return confirm(\'Do you really want to Delete?\')" title="delete"><span class="glyphicon glyphicon-trash"></span></a>
                                    </td>
                                  </tr>
                                  ';
                            $countt++;
                          }

                         ?>                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div class="bottom-bar"><a href="#" class="btn btn-danger btn-smy pull-right">Delete</a></div>


            <?php
          foreach ($output as $row) {
             $no=count($row);
            echo '
            

                    <div class="col-md-6 col-sm-6 col-xs-12">
                 
                  <div class="x_panel ui-ribbon-container fixed_height_390">
                    <div class="ui-ribbon-wrapper">
                      <div class="ui-ribbon">
                        Events
                      </div>
                    </div>
                    <div class="x_title">
                      <h2> '.$row['event_title'].' <small></small></h2>
                       <span class="badge bg-green pull-center">'.$no.'</span>
                      <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="add_event.php" title="Add Event"> <i class="fa fa-plus-square-o"></i> Add Event </a>
                            </li>
                            <li><a href="event_update.php?id='.$row['id'].'" title="Update Event"><i class="fa fa-pencil-square-o"></i> Edit Event</a>
                            <li><a href="source/delete_event.php?id='.$row['id'].'" onclick = "return confirm(\'Do you really want to Delete?\')" title="Delete Event"><i class="fa fa-trash"> </i> Delete </a></li>
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
                            '.$row['event_date'].'
                              <span class=pull-right>' . $row['event_location'] . '</span>

                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-4">
                          <div class="weather-icon">
                            <img scr=../images/events/'.$row['event_image'].'>

                          </div>
                        </div>
                        <div class="col-sm-12">
                          <div class="weather-text">
                            <img src=images/events/'.$row['event_image'].' style="    MAX-WIDTH: 100%;">
                          </div>
                        </div>
                      </div>
                      
                      <div class="clearfix"></div>


                      <div class="row weather-days">
                        <div class="col-sm-12">
                          <div class="daily-weather">
                            <p>'.$row['event_description'].'</p>
                          </div>
                        </div>
                      <div class="clearfix"></div>
                      </div>
                    </div>
                  </div>
                
                </div> ';
      }
      ?>
        <!--<?php
         /* foreach ($output1 as $row1) {
            echo '
            

                    <div class="col-md-6 col-sm-6 col-xs-12">
                 
                  <div class="x_panel ui-ribbon-container ">
                    <div class="ui-ribbon-wrapper">
                      <div class="ui-ribbon">
                        Blogs
                      </div>
                    </div>
                    <div class="x_title">
                      <h2> '.$row1['post_title'].' <small></small></h2>
                       <span class="badge bg-green pull-center">'.$no.'</span>
                      <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="add_post.php" title="Add Post"> <i class="fa fa-plus-square-o"></i> Add Post </a>
                            </li>
                            <li><a href="post_update.php?id='.$row1['id'].'" title="Update Post"><i class="fa fa-pencil-square-o"></i> Edit Post</a>
                            <li><a href="source/delete_post.php?id='.$row1['id'].'" onclick = "return confirm(\'Do you really want to Delete?\')" title="Delete Post"><i class="fa fa-trash"> </i> Delete </a></li>
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
                        <div class="x_content">
                      <div class="row">
                        <div class="col-sm-12">
                          <div class="temperature">
                            '.$row1['post_date'].'
                              <span class=pull-right>
                                 <span class="glyphicon glyphicon-thumbs-up">'.$row1['like_num'].'</span>&nbsp;
 
                                <span class="glyphicon glyphicon-thumbs-down">'.$row1['dislike_num'].'</span>&nbsp;
                              </span>

                          </div>
                        </div>
                      </div>
                      </div>
                        <div class="col-sm-12">
                          <div class="weather-text">
                            <img src=images/blogs/'.$row1['post_image'].' style="MAX-WIDTH: 100%;" class="pull-center">
                          </div>
                        </div>
                      </div>
                      
                      <div class="clearfix"></div>


                      <div class="row weather-days">
                        <div class="col-sm-12">
                          <div class="daily-weather">
                            <p>'.$row1['post_description'].'</p>
                          </div>
                          <blockquote class="theme-colored pt-20 pb-20">
                            <p class="mb-15">'.$row1['post_tag'].'</p>
                          </blockquote>
                        </div>
                      <div class="clearfix"></div>
                      </div>
                    </div>
                  </div>
              
                </div> ';
      }*/
      ?>-->
      


      <div class="x_panel">
                  <div class="x_title">
                    <h2>Gallery Images</small></h2>
                    <ul class="nav navbar-left" style="    margin-left: 30%;">
                        <a href="gallery_add.php" class="btn btn-primary "><i class="fa fa-plus"> New Image</i></a>
                    </ul>
                     <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="gallery_add.php" title="Add Image" > <i class="fa fa-plus-square-o"></i> Add Event </a>
                            </li>
                            <li><a href="gallery_update.php?id=<?php echo $row['id'] ?>" title="Update image"><i class="fa fa-pencil-square-o"></i> Edit Event</a>
                            <li><a href="source/delete_event.php?id='.$row['id'].'" onclick = "return confirm(\'Do you really want to Delete?\')" title="Delete Event"><i class="fa fa-trash"> </i> Delete </a></li>
                            </li>
                          </ul>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                      </ul>
                      <div class="clearfix"></div>
                    
                  </div>
                  <div class="x_content table-responsive">
                    <p class="text-muted font-13 m-b-30">

                    </p>
                    <table id="datatable-checkbox" class="table table-striped table-bordered bulk_action table-responsive">
                      <thead class="table-responsive">
                        <tr>
                          <th></th>
                          <th>Image</th>
                          <th>Title</th>
                          <th>Description</th>
                          <th>Category</th>
                          <th>Upload Date</th>
                          <th>Action</th>
                        </tr>
                      </thead>


                      <tbody class="responsive">
                        <?php
                          $countt = 1;
                          $not_set = 'not set';
                          foreach ($output2 as $row2) {

                            $date = new DateTime();
                            $date->setTimestamp($row2['updated']);

                            if(trim($row2['image_title']) === '')
                                 { $title = "not set"; }
                            else { $title = $row2['image_title']; }

                            if(trim($row2['image_description']) === '')
                                 { $description = "not set"; }
                            else { $description = $row2['image_description']; }

                            echo '<tr>
                                    <td><div class="check-text">'.$countt.'</div></td>
                                    <td><img class="img-thumbs" src="images/gallery/'.$row2['image_file'].'"></td>
                                    <td>'.$title.'</td>
                                    <td>'.$description .'</td>
                                    <td>'.$date->format('Y-m-d H:i').'</td>
                                    <td>'.$row2['category'].'</td>
                                    
                                    <td>
                                      <a href="gallery_update.php?id='.$row2['id'].'" title="Update"><span class="glyphicon glyphicon-pencil"></span></a>
                                      <a href="source/gallery_delete.php?id='.$row2['id'].'" onclick = "return confirm(\'Do you really want to Delete?\')" title="delete"><span class="glyphicon glyphicon-trash"></span></a>
                                    </td>
                                  </tr>
                                  ';
                            $countt++;
                          }

                         ?>                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div class="bottom-bar"><a href="#" class="btn btn-danger btn-smy pull-right">Delete</a></div>

 
 
 
     <button class=" btn-aj "> &nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus" style="font-size: 2em"></i>&nbsp;&nbsp;&nbsp;&nbsp;  </button>
  
              
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
    <script src="vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    
    <!-- Custom Theme Scripts -->
    <script src="build/js/custom.min.js"></script>
    
  </body>
</html>
