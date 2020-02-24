<?php 
 include_once('academy_admin/source/config.php');

// $output[];
try 
        {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // Make a sql query
            $sql = "SELECT * FROM student_feedback WHERE status='Enable' ";

            //Prepare sql query
            $stmt = $conn->prepare($sql);
            
            // $stmt->bindParam(':about_id', $_GET['id']);

            $stmt->execute();

            if($stmt->execute())
        {
            $output= $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        }
        catch(PDOException $e)
        {
            echo "Connection failed: " . $e->getMessage();
            $action = "";
        }
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>

<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="Phoenix Tutorials | Education & Courses " />
<meta name="keywords" content="academy, course, education, education, elearning, learning," />
<meta name="author" content="Naveed " />

<!-- Page Title -->
<title>Phoenix Tutorials | Primary</title>

<!-- Favicon and Touch Icons -->
<link href="images/favicon.png" rel="shortcut icon" type="image/png">
<link href="images/apple-touch-icon.png" rel="apple-touch-icon">
<link href="images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
<link href="images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
<link href="images/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">

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
  .form-control{
    color: #1F386B !important;
  }
  .hide {
  display: none;
}
.panel-group .panel-title a.active{
  color: #fff !important;
}
.nav-pills li.active > a{
  background: #1f386b !important;
    color: #f6f7f9 !important;
}
  .morecontent span {
    display: none;
}
.morelink {
    display: block;
    color: #ff0000 !important;
}
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
  
      
  <!-- Start main-content -->
  <div class="main-content bg-lighter">
   
    <!-- Section: Blog -->
    <section>
      <div class="container mt-30 mb-0 pt-30 pb-30">
        <div class="row">
          <div class="col-md-8 blog-pull-right">
            <div class="single-service">
              <img src="images/cource-name/primary.jpg" alt="Secondary">
              <h3 class="text-theme-colored">Strengthing Academic  Foundation And Independence in Learning</h3>
              <h5><em>Our <span class="text-theme-color-2">Secondary Tuitions </span>Combine the best of subject masteryand skilldevelopment. Across English, Maths, Science and Othe Subject lessons. Our Child will be ableto learn both subject-specific and general Knowledge. Progressionthrough all  <span class="text-theme-color-2">6 levels of Primary Tuitions </span>ensurethat your child constantly learns more in terms of breadth and depth year on year.</em></h5>
              <p class="more">In lower secondary tuitions years, a strong focus on learnin excellence helps to prepare them to handle the structured syllabus of the secondary tuitions.</br>

              </p>
              
              <div class="separator">
                <i class="fa fa-graduation-cap"></i>
              </div>
              <script type="text/javascript">
                $(document).ready(function() {
                  // Configure/customize these variables.
                  var showChar = 200;  // How many characters are shown by default
                  var ellipsestext = "...";
                  var moretext = "Read more &#8594;";
                  var lesstext = "Show less &#8592;";
                  

                  $('.more').each(function() {
                      var content = $(this).html();
               
                      if(content.length > showChar) {
               
                          var c = content.substr(0, showChar);
                          var h = content.substr(showChar, content.length - showChar);
               
                          var html = c + '<span class="moreellipses">' + ellipsestext+ '&nbsp;</span><span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<a href="" class="morelink">' + moretext + '</a></span>';
               
                          $(this).html(html);
                      }
               
                  });
               
                  $(".morelink").click(function(){
                      if($(this).hasClass("less")) {
                          $(this).removeClass("less");
                          $(this).html(moretext);
                      } else {
                          $(this).addClass("less");
                          $(this).html(lesstext);
                      }
                      $(this).parent().prev().toggle();
                      $(this).prev().toggle();
                      return false;
                  });
              });
              </script>
              <div class="row">
                <div class="col-md-12">
                  <ul id="myTab2" class="nav nav-pills boot-tabs">
                    <li class="active"><a href="#home2" data-toggle="tab">Objective</a></li>
                    <li><a href="#profile2" data-toggle="tab">Details</a></li>
                    <li><a href="#profile3" data-toggle="tab">Syllabus</a></li>
                    <li><a class=" bs-modal-ajax-load " data-toggle="modal" data-target="#BSParentModal" data-toggle="tab" href="ajax-load/reservation-form.php">Enroll Now</a></li>

                    <!-- <li class="dropdown"> <a href="#" id="myTabDrop1" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                      <ul class="dropdown-menu" role="menu" aria-labelledby="myTabDrop1">
                        <li><a href="#dropdown3" tabindex="-1" data-toggle="tab">@fat</a></li>
                        <li><a href="#dropdown4" tabindex="-1" data-toggle="tab">@mdo</a></li>
                      </ul>
                    </li> -->
                  </ul>
                  <div id="myTabContent2" class="tab-content">
                    <div class="tab-pane fade in active" id="home2">
                      <p>Gaiining familiarisation with subject-specific components and building confidence in responding to writtenand verbal tasks go a long way in driving your childs deep learning.<br></p>
                    </div>
                    <div class="tab-pane fade" id="profile2">
                      <p>Such subject-speciific and general skills giveyourchild the tools to excel in the exams. Being able  to learn from mistakes and to apply knowledge correctly all drives performance excellence these learning habits help our child to manage assessment tasks in Primary</p>
                    </div>
                    <div class="tab-pane fade" id="profile3">
                      <!-- <div class="col-md-7 hidden-xs pl-40"> -->
                        <h3 class="line-bottom mt-20 line-height-1"><span class="text-theme-color-2">Primary </span><!-- <a href="javascript:void(0)"resources/Computer Harware & Networking Fundamentals.docx" title="Download Syllabus"> <i style="padding-left: 60%;" class="fa fa-download" aria-hidden="true"></i></a> --></h3>
                        <div id="accordion1" class="panel-group accordion">
                          <div class="panel">
                            <div class="panel-title"> <a class="active" data-parent="#accordion1" data-toggle="collapse" href="#accordion11" aria-expanded="true"> <span class="open-sub"></span>Class 5<sup>th</sup></a> </div>
                            <div id="accordion11" class="panel-collapse collapse in" role="tablist" aria-expanded="true">
                              <div class="panel-content">
                                <p>
                                  <ul class="list check">
                                    <li> English <a class=" btn btn-primary" href="resources/class 5/5_english_2017_18.pdf" dowload target="_new"> <i class="fa fa-download" aria-hidden="true"></i></a> </li>

                                    <li> Environmentalscience Engmedium <a class=" btn btn-primary" href="resources/class 5/5_environmentalscience_engmedium_2017_18.pdf" dowload target="_new"> <i class="fa fa-download" aria-hidden="true"></i></a> </li>

                                    <li> Math Engmedium <a class=" btn btn-primary" href="resources/class 5/5_math_engmedium_2017_18.pdf" dowload target="_new"> <i class="fa fa-download" aria-hidden="true"></i></a> </li>

                                    <li> Socialstudy Engmedium <a class=" btn btn-primary" href="resources/class 5/5_socialstudy_engmedium_2017_18.pdf" dowload target="_new"> <i class="fa fa-download" aria-hidden="true"></i></a> </li>
                                  </ul>
                                </p>
                              </div>
                            </div>
                          </div>
                          <div class="panel">
                            <div class="panel-title"> <a data-parent="#accordion1" data-toggle="collapse" href="#accordion12" class="" aria-expanded="true"> <span class="open-sub"></span>Class 6<sup>th</sup></a> </div>
                            <div id="accordion12" class="panel-collapse collapse" role="tablist" aria-expanded="true">
                              <div class="panel-content">
                                <ul class="list check">
                                    <li> ENGLISH NishthaGroup<a class=" btn btn-primary" href="resources/class 6/6_ENGLISH_NishthaGroup_2017_18.pdf" dowload target="_new"> <i class="fa fa-download" aria-hidden="true"></i></a> </li>

                                    <li> Math Engmedium<a class=" btn btn-primary" href="resources/class 6/6_math_engmedium_2017_18.pdf" dowload target="_new"> <i class="fa fa-download" aria-hidden="true"></i></a> </li>

                                    <li> Science Engmedium <a class=" btn btn-primary" href="resources/class 6/6_Science_Englishmed_2017_18.pdf" dowload target="_new"> <i class="fa fa-download" aria-hidden="true"></i></a> </li>

                                    <li> Social Study Engmedium <a class=" btn btn-primary" href="resources/class 6/6_social study_engmedium_2017_18.pdf" dowload target="_new"> <i class="fa fa-download" aria-hidden="true"></i></a> </li>
                                  </ul>
                              </div>
                            </div>
                          </div>
                          <div class="panel">
                            <div class="panel-title"> <a data-parent="#accordion1" data-toggle="collapse" href="#accordion13" class="" aria-expanded="true"> <span class="open-sub"></span>Class 7<sup>th</sup></a> </div>
                            <div id="accordion13" class="panel-collapse collapse" role="tablist" aria-expanded="true">
                              <div class="panel-content">
                                <ul class="list check">
                                <li> ENGLISH<a class=" btn btn-primary" href="resources/class 7/7_English_2017_18.pdf" dowload target="_new"> <i class="fa fa-download" aria-hidden="true"></i></a> </li>

                                    <li> Math English Medium<a class=" btn btn-primary" href="resources/class 7/7_Maths_Englishmedium_2017_18.pdf" dowload target="_new"> <i class="fa fa-download" aria-hidden="true"></i></a> </li>

                                    <li> Science English Medium <a class=" btn btn-primary" href="resources/class 7/7_Science_Englishmedium_2017_18.pdf" dowload target="_new"> <i class="fa fa-download" aria-hidden="true"></i></a> </li>

                                    <li> Social Study Engmedium <a class=" btn btn-primary" href="resources/class 7/7_socialstudy_engmedium_2017_18.pdf" dowload target="_new"> <i class="fa fa-download" aria-hidden="true"></i></a> </li> 
                                </ul>
                              </div>
                            </div>
                          </div>
                          <div class="panel">
                            <div class="panel-title"> <a data-parent="#accordion1" data-toggle="collapse" href="#accordion14" class="" aria-expanded="true"> <span class="open-sub"></span> Class 8<sup>th</sup></a> </div>
                            <div id="accordion14" class="panel-collapse collapse" role="tablist" aria-expanded="true">
                              <div class="panel-content">
                                <ul class="list check">
                                  <li> ENGLISH<a class=" btn btn-primary" href="resources/class 8/8_english_2017_18.pdf" dowload target="_new"> <i class="fa fa-download" aria-hidden="true"></i></a> </li>

                                    <li> Math English Medium<a class=" btn btn-primary" href="resources/class 8/8_math_engmedium_2017_18.pdf" dowload target="_new"> <i class="fa fa-download" aria-hidden="true"></i></a> </li>

                                    <li> Science English Medium <a class=" btn btn-primary" href="resources/class 8/8_science_engmedium_2017_18.pdf" dowload target="_new"> <i class="fa fa-download" aria-hidden="true"></i></a> </li>

                                    <li> Social Study Engmedium <a class=" btn btn-primary" href="resources/class 8/8_social study_eng_medium_2017_18.pdf" dowload target="_new"> <i class="fa fa-download" aria-hidden="true"></i></a> </li> 
                                </ul>
                              </div>
                            </div>
                          </div>
                          <div class="panel">
                            <div class="panel-title"> <a data-parent="#accordion1" data-toggle="collapse" href="#accordion15" class="" aria-expanded="true"> <span class="open-sub"></span> Class 9<sup>th</sup></a> </div>
                            <div id="accordion15" class="panel-collapse collapse" role="tablist" aria-expanded="true">
                              <div class="panel-content">
                              <ul class="list check">

                                    <li> Automobile Technology<a class=" btn btn-primary" href="resources/class 9/9_AutomobileTechnology_eng_2017_18.pdf" dowload target="_new"> <i class="fa fa-download" aria-hidden="true"></i></a> </li>

                                    <li> English <a class=" btn btn-primary" href="resources/class 9/9_eng_2017_18.pdf" dowload target="_new"> <i class="fa fa-download" aria-hidden="true"></i></a> </li>

                                    <li> Information Technology <a class=" btn btn-primary" href="resources/class 9/9_informationTechnology_eng_2017_18.pdf" dowload target="_new"> <i class="fa fa-download" aria-hidden="true"></i></a> </li>

                                    <li> Science English Medium <a class=" btn btn-primary" href="resources/class 9/9_science_engmed_2017_18.pdf" dowload target="_new"> <i class="fa fa-download" aria-hidden="true"></i></a> </li>

                                    <li> Social Study English Medium <a class=" btn btn-primary" href="resources/class 9/9_social study_engmedium_2017_18.pdf" dowload target="_new"> <i class="fa fa-download" aria-hidden="true"></i></a> </li>
                              </ul>
                              </div>
                            </div>
                          </div>
                          <div class="panel">
                            <div class="panel-title"> <a data-parent="#accordion1" data-toggle="collapse" href="#accordion16" class="" aria-expanded="true"> <span class="open-sub"></span>Class 10<sup>th</sup></a> </div>
                            <div id="accordion16" class="panel-collapse collapse" role="tablist" aria-expanded="true">
                              <div class="panel-content">
                                <ul class="list check">

                                    <li> English <a class=" btn btn-primary" href="resources/class 10/10_english_2017_18" dowload target="_new"> <i class="fa fa-download" aria-hidden="true"></i></a> </li>

                                    <li> Information Technology <a class=" btn btn-primary" href="resources/class 10/10_informationTechnology_eng_2017_18.pdf" dowload target="_new"> <i class="fa fa-download" aria-hidden="true"></i></a> </li>

                                    <li> Maths English Medium <a class=" btn btn-primary" href="resources/class 10/10_math_engmedium_2017_18.pdf" dowload target="_new"> <i class="fa fa-download" aria-hidden="true"></i></a> </li>

                                    <li> Natural Science English Medium <a class=" btn btn-primary" href="resources/class 10/10_naturalscience_engmedium2017_18.pdf" dowload target="_new"> <i class="fa fa-download" aria-hidden="true"></i></a> </li>

                                    <li> Social Study English Medium <a class=" btn btn-primary" href="resources/class 10/10_socialstudy_engmedium_2017_18.pdf" dowload target="_new"> <i class="fa fa-download" aria-hidden="true"></i></a> </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    <!-- </div> -->

                  </div>

                </div>
              </div>
              <!-- <div class="row">
                <div class="col-md-12" style="padding-top: 10px;">
                   <a class="btn btn-default text-theme-colored font-14 bs-modal-ajax-load mt-0 p-10 pr-15" data-toggle="modal" data-target="#BSParentModal" href="ajax-load/reservation-form.php" style="    margin-left: 27%;">Get admission Now</a>
          
                </div>
              </div>
 -->            </div>
          </div>
          <div class="col-sm-12 col-md-4">
            <div class="sidebar sidebar-left mt-sm-30 ml-40">
              <div class="widget">
                <h4 class="widget-title line-bottom">Courses List</h4>
                <div class="services-list">
                  <ul class="list list-border angle-double-right">
                    <li class="active"><a href="#">Secondary</a></li>
                    <li><a href="secondary.php">Higher Secondary</a></li>
                    <li><a href="diploma.php">Diploma </a></li>
                  </ul>
                </div>
              </div>
              <div class="widget">
                <h4 class="widget-title line-bottom">Opening Hours</h4>
                <div class="opening-hours">
                  <ul class="list-border">
                    <li class="clearfix"> <span> Mon - Tues :  </span>
                      <div class="value pull-right"> 8.00 am - 8.00 pm </div>
                    </li>
                    <li class="clearfix"> <span> Wednes - Thurs :</span>
                      <div class="value pull-right"> 8.00 am - 8.00 pm </div>
                    </li>
                    <li class="clearfix"> <span> Fri : </span>
                      <div class="value pull-right"> 8.00 pm - 8.00 pm </div>
                    </li>
                    <li class="clearfix"> <span> Sun : </span>
                      <div class="value pull-right"> Closed </div>
                    </li>
                    <li class="clearfix"> <span> Duration : </span>
                      <div class="value pull-right">  12 Months </div>
                    </li>

                  </ul>
                </div>
              </div>
              <div class="widget">
                <h4 class="widget-title line-bottom">Venue</h4>
                <div class="opening-hours">
                  <ul class="list-border">
                    <li class="clearfix"> <span>  1/4 Shiraj Bhavan, Elphinstone  </span>
                       <div class="value pull-right"> <a href="https://www.google.co.in/maps/place/18%C2%B057'58.1%22N+72%C2%B048'48.6%22E/@18.966134,72.8113003,747m/data=!3m2!1e3!4b1!4m5!3m4!1s0x0:0x0!8m2!3d18.966134!4d72.813489?hl=en" target="_blank"> Google map</a> </div>
                    </li>
                  </ul>
                </div>
              </div>    
              
              <div class="widget">
                <div class="mt-30 p-30" style="border: 10px solid #f1f1f1;">
                  <h5 class="text-theme-colored title-border mb-20">student's Feedback</h5>
                  
                  <div class="testimonial-carousel-info owl-nav-top">
                  <?php
             foreach ($output as $row) {
              echo'
                    <div class="item">
                      <div class="comment">
                        <p>'.$row['feedback'].'</p>
                      </div>
                      <div class="content mt-20">
                        <div class="thumb" style="width:200px !important; height:200px !important;" >
                          <img class="img-responsive img-rounde" src="academy_admin/images/stud-feedback/'.$row['student_photo'] .'" alt="' . $row['name'] . '" width="150px" height="150px">
                        </div>
                        <div class="patient-details text-right pull-right mr-20 mt-10">
                          <h5 class="author">'.$row['name'].'</h5>
                          <h6 class="title">'.$row['department'].'</h6>
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
        </div>
      </div>
    </section>
  </div>
  <!-- end main-content -->
  
  <!-- Footer -->
  <?php include_once('footer.php'); ?>
</div>

<!-- Footer Scripts --> 
<!-- JS | Custom script for all pages --> 
<!-- <script src="js/custom.js"></script> -->

</body>

</html>