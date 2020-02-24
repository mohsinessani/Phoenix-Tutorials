<?php
 include_once('academy_admin/source/config.php');
    $output = [];
    try 
    {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // Make a sql query
        $sql = "SELECT * FROM upcoming_batches";

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
<html dir="ltr" lang="en">
<head>

<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="Naimah | Education & Courses" />
<meta name="keywords" content="academy, course, education, education, elearning, learning," />
<meta name="author" content="Naveed" />

<!-- Page Title -->
<title>Phoenix Tutorials || </title>

<!-- Favicon and Touch Icons -->
<link href="images/favicon.png" rel="shortcut icon" type="image/png">
<!-- <link href="images/apple-touch-icon.png" rel="apple-touch-icon">
<link href="images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
<link href="images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
<link href="images/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144"> -->

<!-- Stylesheet -->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/jquery-ui.min.css" rel="stylesheet" type="text/css">
<link href="css/animate.css" rel="stylesheet" type="text/css">
<link href="css/css-plugin-collections.css" rel="stylesheet"/>
<!-- CSS | menuzord megamenu skins -->
<link id="menuzord-menu-skins" href="css/menuzord-skins/menuzord-rounded-boxed.css" rel="stylesheet"/>
<!-- CSS | Main style file -->
<link href="css/style-main.css" rel="stylesheet" type="text/css">
<!-- CSS | Preloader Styles -->
<link href="css/preloader.css" rel="stylesheet" type="text/css">
<!-- CSS | Custom Margin Padding Collection -->
<link href="css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
<!-- CSS | Responsive media queries -->
<link href="css/responsive.css" rel="stylesheet" type="text/css">
<!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
<!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->

<!-- Revolution Slider 5.x CSS settings -->
<link  href="js/revolution-slider/css/settings.css" rel="stylesheet" type="text/css"/>
<link  href="js/revolution-slider/css/layers.css" rel="stylesheet" type="text/css"/>
<link  href="js/revolution-slider/css/navigation.css" rel="stylesheet" type="text/css"/>
<style type="text/css">
  .txt-center{
    text-align: center;
  }
  .uppercase{
     text-transform: uppercase;
  }
</style>

<!-- CSS | Theme Color -->
<link href="css/colors/theme-skin-color-set-1.css" rel="stylesheet" type="text/css">

<!-- external javascripts -->
<script src="js/jquery-2.2.4.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- JS | jquery plugin collection for this theme -->
<script src="js/jquery-plugin-collection.js"></script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body class="">
<div id="wrapper" class="clearfix">
  <!-- preloader -->
  <div id="preloader">
    <div id="spinner">
      <img alt="" src="images/preloaders/7.gif">
    </div>
    <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
  </div>
  
  <!-- Header -->
 <?php include_once('header.php'); ?>
  
  <!-- Start main-content -->
  <div class="main-content">
    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="images/bg/bg6.jpg">
      <div class="container pt-70 pb-20">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12 text-center">
              <h2 class="title text-white">Upcoming Batches</h2>
              <ol class="breadcrumb text-center text-black mt-10">
                <li><a href="index.php">Home</a></li>
                <li><a href="#">Cources</a></li>
                <li class="active text-gray-silver">Upcoming Batches</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Timetable -->
    <section>
      <div class="container">
        <div class="section-content">
          <div class="row">
            <div class="col-md-12">
           <!-- <div class="portfolio-filter font-alt align-center mb-6 0">
                <a href="#" class="active" data-filter="*">All</a>
                <a href="#primary" class="" data-filter=".primary">Primary</a>
                <a href="#secondary" class="" data-filter=".secondary">Secondary</a>
                <a href="#diploma" class="" data-filter=".diploma">Diploma</a>
              </div>-->
              
            <h3 class="txt-center uppercase">Latest Upcoming Batches</h3>
             <div class="table-responsive" >
              
              <table class="table gallery-isotope grid-4 gutter-small clearfix" data-lightbox="gallery">
               
                <thead class="table-striped ">
                  <tr class="info">
                    <th >Cource Name</th>
                    <th >Batch</th>
                    <th>Start Date</th>
                    <th>Duration</th>
                    <th>End Date</th>
                    <th>Time</th>

                  </tr>
                </thead>
                 <?php
               foreach ($output as $row) {
               echo '<tbody>
                  <tr>
                    <!-- <th scope="row">1</th> -->
                    <td id='.$row['category'].' class='.$row['category'].'> '.$row['category'].'</td>

                    <td>'.$row['batch'].'</td>
                    <td>'.$row['start_date'].'</td>
                    <td>'.$row['duration'].'</td>
                    <td>'.$row['end_date'].'</td>
                    <td>'.$row['day_time'].'</td>
                  </tr>

                  
                </tbody>';
              }
              ?>
                </table>
              </div>
        </div>
      </div>
    </section>
  </div>
  <!-- end main-content -->

  <!-- Footer -->
  <?php include_once('footer.php'); ?>
</div>
<!-- end wrapper -->

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<!-- <script src="js/custom.js"></script> -->

</body>
</html>