<?php
 include_once('academy_admin/source/config.php');
// $event_title=$_POST['event_title'];
$event_title= '';

$output = [];

        try 
        {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // Make a sql query
            $sql = "SELECT * FROM event ORDER BY event_date DESC ";

            //Prepare sql query
            $stmt = $conn->prepare($sql);
            
            // $stmt->bindParam(':about_id', $_GET['id']);

            $stmt->execute();

            if($stmt->execute())
        {
            $output1 = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        }
        catch(PDOException $e)
        {
            echo "Connection failed: " . $e->getMessage();
            $action = "";
        }

  try 
        {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // Make a sql query
            $sql = "SELECT * FROM student_feedback WHERE status='Enable' ORDER BY update_date DESC ";

            //Prepare sql query
            $stmt = $conn->prepare($sql);
            
            // $stmt->bindParam(':about_id', $_GET['id']);

            $stmt->execute();

            if($stmt->execute())
        {
            $output2 = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        }
        catch(PDOException $e)
        {
            echo "Connection failed: " . $e->getMessage();
            $action = "";
        }

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
  // $row2= $result2->fetch_assoc();


      try 
    {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // Make a sql query
        $sql = "SELECT * FROM teachers";

        //Prepare sql query
        $stmt = $conn->prepare($sql);
            
        if($stmt->execute())
        {
            $teachers = $stmt->fetchAll(PDO::FETCH_ASSOC);
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
<meta name="description" content="Phoenix Tutorials | Education & Coaching Tuition Institude" />
<meta name="keywords" content="academy, course, education, education, elearning, learning, Primary , sencondary, diploma, Science, commerces, HHC, HSC" />
<meta name="author" content="Ajay " />

<!-- Page Title -->
<title>Phoenix Tutorials | About US</title>

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

<!-- CSS | Theme Color -->
<link href="css/colors/theme-skin-color-set-1.css" rel="stylesheet" type="text/css">
<style type="text/css">
  .fb_iframe_widget > span{
  max-height:348px !important;
}
iframe{
  max-height: 348px !important;
}

</style>
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
      <img alt="" src="images/preloaders/5.gif">
    </div>
    <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
  </div>
  
  <!-- Header -->
  <?php include_once('header.php'); ?>
  <!-- <div id="fb-root"></div>
  
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8&appId=1014313975357607";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script> -->
  
  <!-- Start main-content -->
  <div class="main-content bg-lighter">
    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="images/bg/about.jpg">
      <div class="container pt-70 pb-20">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12">
              <h2 class="title text-white text-center">About</h2>
              <ol class="breadcrumb text-left text-black mt-10">
                <li><a href="index.php">Home</a></li>
                <li class="active text-gray-silver">About Us</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>

   <!-- <section class="divider parallax layer-overlay" data-bg-img="images/bg/bg6.jpg" data-parallax-ratio="0.7">
      <div class="container pt-70 pb-60">
        <div class="row">
          <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
            <div class="funfact text-center">
              <i class="fa fa-users mt-5 text-white"></i>
              <h2 data-animation-duration="2000" data-value="50" class="animate-number text-white mt-0 font-38 font-weight-500">0</h2>
              <h4 class="text-white text-uppercase">Professors</h4>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
            <div class="funfact text-center">
              <i class="fa fa-book mt-5 text-white"></i>
              <h2 data-animation-duration="2000" data-value="75" class="animate-number text-white mt-0 font-38 font-weight-500">0</h2>
              <h4 class="text-white text-uppercase">Class Types</h4>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
            <div class="funfact text-center">
              <i class="fa fa-home mt-5 text-white"></i>
              <h2 data-animation-duration="2000" data-value="204" class="animate-number text-white mt-0 font-38 font-weight-500">0</h2>
              <h4 class="text-white text-uppercase">Class Rooms</h4>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
            <div class="funfact text-center">
              <i class="fa  fa-graduation-cap mt-5 text-white"></i>
              <h2 data-animation-duration="2000" data-value="2324" class="animate-number text-white mt-0 font-38 font-weight-500">0</h2>
              <h4 class="text-white text-uppercase">Students</h4>
            </div>
          </div>
        </div>
      </div>
    </section> -->

    <!-- Section: About -->
    <section id="about">
      <div class="container mt-50 pb-70 pt-0">
        <div class="section-content">
          <div class="row mt-10">
            <div class="col-sm-12 col-md-6 mb-sm-20 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
            <?php 
            foreach ($output as $row) {
              echo $row['about'];
            }
            ?>
              <!-- <h3 class="text-uppercase mt-15">Welcome To <span class="text-theme-color-2">  LearnPress </span></h3>
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisi cing elit. Quos dolo rem consequ untur, natus laudantium commodi earum aliquid in ullam.Lorem ipsum.</p>
              <p class="mb-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum sunt ut dolorem laboriosam culpa excepturi sed distinctio eius! Ut magnam numquam libero quia vero blanditiis fugit corporis quisquam, debitis quidem laudantium deleniti.</p>
              <p class="mb-10">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum sunt ut dolorem laboriosam culpa excepturi sed distinctio eius! Ut magnam numquam libero quia vero blanditiis fugit corporis quisquam, debitis quidem laudantium deleniti.</p> -->
              <!-- <a class="btn btn-colored btn-theme-colored btn-lg text-uppercase font-13 mt-0" href="#">View Details</a>  -->
            </div>
            <div class="col-sm-12 col-md-6 mt-10 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
              <div class="video-popup">                
                <!-- <a href="https://www.youtube.com/watch?v=pW1uVUg5wXM" data-lightbox-gallery="youtube-video" title="Video"> -->
                  <img alt="" src="images/about/5.jpg" class="img-responsive img-fullwidth mt-10 ml-30 ml-xs-0 ml-sm-0">
                </a>
              </div>
            </div>
          </div>
        </div>
			<marquee  style="color:green !important"><h5 style="color:green !important"><u>So Join Us To Fly High Like A Phoenix Bird</u></h5></marquee>
      </div>
    </section>


    <section class="bg-lightest">
      <div class="container pt-50 pb-50">
        <div class="section-content">
          <div class="row">
            <div class="col-md-7 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
              <div class="pr-40">
                <h3 class="text-uppercase title line-bottom">Why <span class="text-theme-color-2 font-weight-700">Choose Us ?</span></h3>
                <div class="row">
                  <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="icon-box p-0 mb-40">
                     <a href="#" class="icon bg-theme-colored pull-left sm-pull-none flip mr-10">
                      <i class="pe-7s-scissors text-white"></i>
                     </a>
                     <div class="icon-box-details ml-sm-0">
                      <h5 class="icon-box-title mt-15 letter-space-1 font-weight-600 mb-5">Affrodable Service</h5>
                      <p class="text-gray">We provided best and Affordable Services to our Students We provide excellent teaching with great experts with more than 10 years of Industry Experience</p>
                     </div>
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="icon-box p-0 mb-40">
                     <a href="#" class="icon bg-theme-colored pull-left sm-pull-none flip mr-10">
                      <i class="pe-7s-pen text-white"></i>
                     </a>
                     <div class="icon-box-details ml-sm-0">
                      <h5 class="icon-box-title mt-15 letter-space-1 font-weight-600 mb-5">Best Teacher</h5>
                      <p class="text-gray">Our teachers encourage learning for understanding and are concerned with developing their students’ critical-thinking skills, problem-solving skills, and problem-approach behaviors.</p>
                     </div>
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="icon-box p-0 mb-40">
                     <a href="#" class="icon bg-theme-colored pull-left sm-pull-none flip mr-10">
                      <i class="pe-7s-tools text-white"></i>
                     </a>
                     <div class="icon-box-details ml-sm-0">
                      <h5 class="icon-box-title mt-15 letter-space-1 font-weight-600 mb-5">Practical Demonstration</h5>
                      <p class="text-gray">An illustration or explanation, as of a theory or product, by exemplification or practical application: a demonstration of ballroom dancing.</p>
                     </div>
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="icon-box p-0 mb-40">
                     <a href="#" class="icon bg-theme-colored pull-left sm-pull-none flip mr-10">
                      <i class="pe-7s-phone text-white"></i>
                     </a>
                     <div class="icon-box-details ml-sm-0">
                      <h5 class="icon-box-title mt-15  letter-space-1 font-weight-600 mb-5">Provide Good Study Material</h5>
                      <p class="text-gray">THE PURPOSE OF STUDY GUIDES is to organize lecture notes and text book material so that you can increase your comprehension and memory of large amounts of information.</p>
                     </div>
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="icon-box p-0 mb-30">
                     <a href="#" class="icon bg-theme-colored pull-left sm-pull-none flip mr-10">
                      <i class="pe-7s-vector text-white"></i>
                     </a>
                     <div class="icon-box-details ml-sm-0">
                      <h5 class="icon-box-title mt-15 letter-space-1 font-weight-600 mb-5">Focused Attention</h5>
                      <p class="text-gray">Since there are only a few students in one session, tutors can effectively identify students strengths and weaknesses.</p>
                     </div>
                    </div>
                  </div>
                  <!-- <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="icon-box p-0 mb-30">
                     <a href="#" class="icon bg-theme-colored pull-left sm-pull-none flip mr-10">
                      <i class="pe-7s-light text-white"></i>
                     </a>
                     <div class="icon-box-details ml-sm-0">
                      <h5 class="icon-box-title mt-15  letter-space-1 font-weight-600 mb-5">Retina Ready</h5>
                      <p class="text-gray">Lorem ipsum dolor sit amet, consectetur.</p>
                     </div>
                    </div>
                  </div> -->
                </div>
              </div>
            </div>
            <div class="col-md-5 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s">
              <h3 class="text-uppercase title line-bottom">What <span class="text-theme-color-2 font-weight-700">Student's Say ?</span></h3>
              <div class="bxslider bx-nav-top">
                
              <?php
             foreach ($output2 as $row2) {
               echo '
                <div class="testimonial bg-theme-colored border-radius-10px p-20 mb-15">
                  <div class="comment">
                   <p class="text-white"><em>'.$row2['feedback'].'</em></p>
                  </div>
                  <div class="content mt-20">
                    <div class="thumb pull-left flip">
                      <img  src="academy_admin/images/stud-feedback/'.$row2['student_photo'] .'" alt="' . $row2['name'] . '" class="img-circle" width="80px" height="80px">
                    </div>
                    <div class="testimonials-details pull-left flip ml-20">
                      <h5 class="author text-theme-color-2 mt-0 mb-0 font-weight-600">'.$row2['name'].'</h5>
                      <h6 class="title font-14 m-0 mt-5 mb-5 text-gray-darkgray">'.$row2['department'].'.</h6>
                      <ul class="review_text list-inline">
                        <li>
                          <div class="star-rating" title="Rated 4.50 out of 5"><span data-width="90%">4.50</span></div>
                        </li>
                      </ul>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                </div>';
              }
    
                ?>
               
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Section: teachers -->
    <section class="bg-lightest">
      <div class="container pt-50 pb-80">
        <div class="section-content">
          <div class="row">
            <div class="col-md-6 wow mt-20 fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s">
              <h3 class="text-uppercase title line-bottom mt-0 mb-30">Our <span class="text-theme-color-2">Teachers</span></h3>
              <div class="owl-carousel-2col">
              	<?php foreach ($teachers as $row) {
              		
              		echo '
		                <div class="item">
		                  <div class="team-members border-bottom-theme-color-2px text-center maxwidth400" style="height:300px !important">
		                    <div class="team-thumb">
		                      <img class=" img-thumbnail" alt="'.$row['name'].'" src="academy_admin/images/teachers/'.$row['image'].'" width="400px" height="150px">
		                      <div class="team-overlay"></div>
		                    </div>
		                  <div class="team-details bg-silver-light pt-10 pb-10">
		                    <h4 class="text-uppercase font-weight-600 m-5"><a href="javascript:void(0)">'.$row['name'].'</a></h4>
		                      <h6 class="text-theme-colored font-15 font-weight-400 mt-0">'.$row['designation'].'</h6>
		                      <ul class="styled-icons icon-theme-colored icon-dark icon-circled icon-sm">
		                        <li><a href="'.$row['facebook'].'" target="_new"><i class="fa fa-facebook"></i></a></li>
		                        <li><a href="'.$row['twitter'].'" target="_new"><i class="fa fa-twitter"></i></a></li>
		                        <li><a href="'.$row['instagram'].'" target="_new"><i class="fa fa-instagram"></i></a></li>
		                        <li><a href="javascript:void(0)" data-toggle="tooltip" title='.$row['whatsapp'].'><i class="fa fa-whatsapp"></i></a></li>
		                      </ul>
		                    </div>
		                  </div>
		                </div> ';
	            	}
	            ?>

	            <script>
	            	$(document).Ready(function(){
	            		$('[data-toggle="tooltip"]').tooltip();
	            	});
	            </script>
                <!--<div class="item">
                  <div class="team-members border-bottom-theme-color-2px text-center maxwidth400">
                    <div class="team-thumb">
                      <img class="img-fullwidth" alt="" src="images/team/lg3.jpg">
                      <div class="team-overlay"></div>
                    </div>
                  <div class="team-details bg-silver-light pt-10 pb-10">
                    <h4 class="text-uppercase font-weight-600 m-5"><a href="page-teachers-details.html">Jhon Smith</a></h4>
                      <h6 class="text-theme-colored font-15 font-weight-400 mt-0">Teacher Designation</h6>
                      <ul class="styled-icons icon-theme-colored icon-dark icon-circled icon-sm">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-skype"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="team-members border-bottom-theme-color-2px text-center maxwidth400">
                    <div class="team-thumb">
                      <img class="img-fullwidth" alt="" src="images/team/lg4.jpg">
                      <div class="team-overlay"></div>
                    </div>
                  <div class="team-details bg-silver-light pt-10 pb-10">
                    <h4 class="text-uppercase font-weight-600 m-5"><a href="page-teachers-details.html">Jhon Smith</a></h4>
                      <h6 class="text-theme-colored font-15 font-weight-400 mt-0">Teacher Designation</h6>
                      <ul class="styled-icons icon-theme-colored icon-dark icon-circled icon-sm">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-skype"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </div>-->
              </div>
            </div>
            <div class="col-md-6 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s">
              <h3 class="text-uppercase ml-15 title line-bottom">Next <span class="text-theme-color-2 font-weight-700">Events</span></h3>
              <div class="bxslider bx-nav-top p-0 m-0">
              <?php
               foreach ($output1 as $row1) {
                   echo'
                <div class="col-xs-12 pr-0 col-sm-6 col-md-6 mb-20">
                  <div class="pricing table-horizontal maxwidth400">
                   
                    <div class="row">
                      <div class="col-md-6">
                        <div class="thumb">
                        <img class="img-fullwidth mb-sm-0" src="academy_admin/images/events/'.$row1['event_image'] . '"  alt='. $row1['event_title'].' width="150px" height="150px">
                        </div>
                      </div>
                      <div class="col-md-6 p-10 pl-sm-50">
                        <h4 class="mt-0 mb-5 mt-10"><a href="#" class="text-white">'. $row1['event_title'].'</a></h4>
                        <ul class="list-inline font-16 mb-5 text-white">
                          <li class="pr-0"><i class="fa fa-calendar mr-5"></i>'. $row1['event_date'].'  |</li>
                          <li class="pl-5"><i class="fa fa-map-marker mr-5"></i>'. $row1['event_location'] .'</li>
                        </ul>
                        <p class="mb-0 font-13 text-white mr-5 pr-10">' . $row1['event_description']. '</p>
                        <!--<a class="font-16  text-white mt-20" href="event.php?id='.$row1['id'].'">Read More →</a>-->
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
      </div>
    </section>

    

    <!-- Divider: Reservation Form -->
    

  </div>
  <!-- end main-content -->
  
  <!-- Footer -->
  <?php include_once('footer.php'); ?>
<!-- end wrapper --> 

<!-- Footer Scripts --> 
<!-- JS | Custom script for all pages --> 
<!-- <script src="js/custom.js"></script> -->

</body>
</html>