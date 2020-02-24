<?php
 include_once('academy_admin/source/config.php');
    $output = [];
    try 
    {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // Make a sql query
        $sql = "SELECT * FROM notes  WHERE category='Diploma' ";

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
<meta name="description" content="Phoenix Tutorials | Education & Courses Networking Hardware Security" />
<meta name="keywords" content="academy, course, education, education cources, Hardware , software, Networking , Security , learning, PCM, PCMB, PCB, Science, Maths " />
<meta name="author" content="Ajay" />

<!-- Page Title -->
<title>Phoenix Tutorials || Notes</title>

<!-- Favicon and Touch Icons -->
<link href="images/favicon.png" rel="shortcut icon" type="image/png">
<!-- <link href="images/apple-touch-icon.png" rel="apple-touch-icon">
<link href="images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
<link href="images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114"> -->
<!-- <link href="images/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144"> -->

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
<link href="css/style.css" rel="stylesheet" type="text/css">


<!-- CSS | Theme Color -->
<link href="css/colors/theme-skin-color-set-1.css" rel="stylesheet" type="text/css">

<!-- external javascripts -->
<script src="js/jquery-2.2.4.min.js"></script>

<script src='js/jquery.min.js'></script>
<!-- <script src='js/calendar/fullcalendar.min.js'></script> -->

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
      <img alt="" src="images/preloaders/5.gif">
    </div>
    <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
  </div>
  
  <?php   include_once('header.php'); ?>
  <!-- Start main-content -->
  <div class="main-content">
    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="images/bg/bg6.jpg">
      <div class="container pt-70 pb-20">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12 text-center">
              <h2 class="title text-white">Diploma Notes</h2>
              <ol class="breadcrumb text-center text-black mt-10">
                <li><a href="index.php">Home</a></li>
                <li><a href="javascripts:void(0);">Resouces</a></li>
                <li class="active text-gray-silver">Diploma </li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- divider: what makes us different -->
    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-9 blog-pull-right">
           <?php
               foreach ($output as $row) {
               echo '
            <div class="row mb-15">
              <div class="col-sm-6 col-md-4">
                <div class="thumb"> <img alt="'.$row['topic'].'" src="resources/courses/'.$row['image_file'].'" class="img-fullwidth"></div>
              </div>
              <div class="col-sm-6 col-md-8">
                <h4 class="line-bottom mt-0 mt-sm-20">'.$row['topic'].'</h4>
                
                <p>'.$row['description'].'</p>
                <a class="btn btn-dark btn-theme-colored btn-sm text-uppercase mt-10" href="resources/notes/'.$row['pdf_file'].'" Download target="_new">Download</a>
              </div>
            </div>
            <hr>';
            }
            ?>
            
          </div>
          <div class="col-md-3">
            <div class="sidebar sidebar-left mt-sm-30">
              <!-- <div class="widget">
                <h5 class="widget-title line-bottom">Search <span class="text-theme-color-2">Courses</span></h5>
                <div class="search-form">
                  <form>
                    <div class="input-group">
                      <input type="text" placeholder="Click to Search" class="form-control search-input">
                      <span class="input-group-btn">
                      <button type="submit" class="btn search-button"><i class="fa fa-search"></i></button>
                      </span>
                    </div>
                  </form>
                </div>
              </div> -->
              <div class="widget">
                <h5 class="widget-title line-bottom">Course <span class="text-theme-color-2">Categories</span></h5>
                <div class="categories">
                  <ul class="list list-border angle-double-right">
                  <!--<?php
                    //foreach ($output as $row) {
                    //echo '
                    //<li><a href="security-notes.php?id='.$row['id'].'">'.$row['topic'].'</a></li>';
                   
                     //}
                    ?>-->
                    <li><a href="primary-notes.php">Secondary </a></li>
                    <li><a href="secondary-notes.php">Higher Secondary </a></li>
                  </ul>

                </div>
              </div>
      </div>
    </section>
  </div>
  <!-- end main-content -->

  <!-- Footer -->
  <?php   include_once('footer.php'); ?>

</body>
</html>