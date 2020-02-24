<?php 
 include_once('academy_admin/source/config.php');

// $output[];
try 
        {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // Make a sql query
            $sql = "SELECT * FROM student_feedback WHERE status='Enable'";

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

<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="Phoenix Tutorials |" />
<meta name="keywords" content="academy, course, education, education cources, Hardware , software, Networking , Security , learning," />
<meta name="author" content="Ajay " />

<!-- Page Title -->
<title>Phonix Tutorials | Diploma </title>

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
    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="images/bg/bg6.jpg">
      <div class="container pt-70 pb-20">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12">
              <h2 class="title text-white text-center">Course Details</h2>
              <ol class="breadcrumb text-left text-black mt-10">
                <li><a href="index.php">Home</a></li>
                <li><a href="javascript:void(0)">Course</a></li>
                <li class="active text-gray-silver">Diploma</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Blog -->
    <section>
      <div class="container mt-30 mb-0 pt-30 pb-30">
        <div class="row">
          <div class="col-md-8 blog-pull-right">
            <div class="single-service">
              <img src="images/cource-name/diploma.jpg" alt="Diploma">
              <h3 class="text-theme-colored">Training for Engineering Diploma</h3>
              <!--<h5><em>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo unde, <span class="text-theme-color-2">Accounting Technologies</span> corporis dolorum blanditiis ullam officia <span class="text-theme-color-2">car repairing </span>natus minima fugiat repellat! Corrupti voluptatibus aperiam voluptatem. Exercitationem, placeat, cupiditate.</em></h5>-->

              <p class="more">Galaxy Of Academic Staff<br>
				More than sixty highly qualified, experienced, competent and popular Professors are teaching and guiding the students of Vinayak Classes either full time or part time. All our teachers have to survive the acid test of ruthless assessment by the student.<br>
			Each student is given a secret ballot paper for writing their frank opinions about every teacher. This system has continuously enabled us to maintain a very high quality of teaching by requesting ineffective teachers to discontinue.<br>

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
                  </ul>
                  <div id="myTabContent2" class="tab-content">
                    <div class="tab-pane fade in active" id="home2">
                      <p>The students’ interest alone, is our prime concern- As was, and is ALWAYS! the primary objective of each and every student is to achieve good results in the University exams and acquire absolute knowledge. This can be acquired through the right kind of education, imparted in the right manner.</p>
                    </div>
                    <div class="tab-pane fade" id="profile2">
                      <p>Phoenix Tutorials has evolved the best of systems over a long span of 10 years of dedicated hard-work and it has been following this system with very gratifying results year after year. All this takes TIME AND MONEY. But this is in the INTEREST of the students. Absence of ANY of these factors MAY save money but actually amounts to cheating the students.</p>
                    </div>
                    <div class="tab-pane fade" id="profile3">
                      <!-- <div class="col-md-7 hidden-xs pl-40"> -->
                        <h3 class="line-bottom mt-20 line-height-1"><span class="text-theme-color-2">Diploma</span><a href="resources/Diploma 1 sem/FG_1_1.pdf" title="Download Syllabus"> <i style="padding-left: 60%;" class="fa fa-download" aria-hidden="true"></i></a></h3>
                       <!-- <div id="accordion1" class="panel-group accordion">
                          <div class="panel">
                            <div class="panel-title"> <a class="active" data-parent="#accordion1" data-toggle="collapse" href="#accordion11" aria-expanded="true"> <span class="open-sub"></span> 1.  Network Theory</a> </div>
                            <div id="accordion11" class="panel-collapse collapse in" role="tablist" aria-expanded="true">
                              <div class="panel-content">
                                <ul class="list check">
                                  <li> Networking Terminology</li>
                                  <li> Network Categories</li>
                                  <li> Standard Network Models</li>
                                  <li> Physical Network Topologies</li>
                                  <li> Logical Network Topologies</li>
                                </ul>
                              </div>
                            </div>
                          </div>
                          <div class="panel">
                            <div class="panel-title"> <a data-parent="#accordion1" data-toggle="collapse" href="#accordion12" class="" aria-expanded="true"> <span class="open-sub"></span> 2.  Network Communications Methods</a> </div>
                            <div id="accordion12" class="panel-collapse collapse" role="tablist" aria-expanded="true">
                              <div class="panel-content">
                                <ul class="list check">
                                    <li>Data Transmission Methods</li>
                                    <li> Media Access Methods<
                                    <li> Signaling Methods</li>
                                </ul>
                              </div>
                            </div>
                          </div>
                          <div class="panel">
                            <div class="panel-title"> <a data-parent="#accordion1" data-toggle="collapse" href="#accordion13" class="" aria-expanded="true"> <span class="open-sub"></span> 3.  Network Media and Hardware</a> </div>
                            <div id="accordion13" class="panel-collapse collapse" role="tablist" aria-expanded="true">
                              <div class="panel-content">
                                <ul class="list check">
                                  <li> Bounded Network Media</li>
                                  <li> Unbounded Network Media</li>
                                  <li> Noise Control</li>
                                  <li> Network Connectivity Devices</li>
                                </ul>
                              </div>
                            </div>
                          </div>
                          <div class="panel">
                            <div class="panel-title"> <a data-parent="#accordion1" data-toggle="collapse" href="#accordion14" class="" aria-expanded="true"> <span class="open-sub"></span> 4.  Network Implementations</a> </div>
                            <div id="accordion14" class="panel-collapse collapse" role="tablist" aria-expanded="true">
                              <div class="panel-content">
                               <ul class="list check">
                                 <li>  Ethernet Networks</li>
                                 <li> Wireless Networks </li>
                               </ul>
                              </div>
                            </div>
                          </div>
                          <div class="panel">
                            <div class="panel-title"> <a data-parent="#accordion1" data-toggle="collapse" href="#accordion15" class="" aria-expanded="true"> <span class="open-sub"></span> 5.  Networking Models</a> </div>
                            <div id="accordion15" class="panel-collapse collapse" role="tablist" aria-expanded="true">
                              <div class="panel-content">
                                <ul class="list check">
                                  <li> The OSI Model</li>
                                  <li> The TCP/IP Model</li>
                                </ul>
                              </div>
                            </div>
                          </div>
                          <div class="panel">
                            <div class="panel-title"> <a data-parent="#accordion1" data-toggle="collapse" href="#accordion16" class="" aria-expanded="true"> <span class="open-sub"></span> 6.  TCP/IP Addressing and Data Delivery</a> </div>
                            <div id="accordion16" class="panel-collapse collapse" role="tablist" aria-expanded="true">
                              <div class="panel-content">
                                <ul class="list check">
                                  <li> The TCP/IP Protocol Suite</li>
                                  <li> IP Addressing</li>
                                  <li> Default IP Addressing Schemes</li>
                                  <li> Create Custom IP Addressing Schemes</li>
                                  <li> Implement IPv6 Addresses</li>
                                  <li> Delivery Techniques</li>
                                </ul>
                              </div>
                            </div>
                          </div>

                          <div class="panel">
                            <div class="panel-title"> <a data-parent="#accordion1" data-toggle="collapse" href="#accordion17" class="" aria-expanded="true"> <span class="open-sub"></span>7.  TCP/IP Services</a> </div>
                            <div id="accordion17" class="panel-collapse collapse" role="tablist" aria-expanded="true">
                              <div class="panel-content">
                                <ul class="list check">
                                  <li>  Assign IP Addresses</li>
                                  <li> Domain Naming Services</li>
                                  <li>TCP/IP Commands</li>
                                  <li> Common TCP/IP Protocols</li>
                                  <li> TCP/IP Interoperability Services</li>
                                </ul>
                              </div>
                            </div>
                          </div>

                          <div class="panel">
                            <div class="panel-title"> <a data-parent="#accordion1" data-toggle="collapse" href="#accordion18" class="" aria-expanded="true"> <span class="open-sub"></span>7. TCP/IP Services</a> </div>
                            <div id="accordion18" class="panel-collapse collapse" role="tablist" aria-expanded="true">
                              <div class="panel-content">
                                <ul class="list check">
                                  <li>  Assign IP Addresses</li>
                                  <li> Domain Naming Services</li>
                                  <li>TCP/IP Commands</li>
                                  <li> Common TCP/IP Protocols</li>
                                  <li> TCP/IP Interoperability Services</li>
                                </ul>
                              </div>
                            </div>
                          </div>

                          <div class="panel">
                            <div class="panel-title"> <a data-parent="#accordion1" data-toggle="collapse" href="#accordion19" class="" aria-expanded="true"> <span class="open-sub"></span>8. LAN Infrastructure</a> </div>
                            <div id="accordion19" class="panel-collapse collapse" role="tablist" aria-expanded="true">
                              <div class="panel-content">
                                <ul class="list check">
                                  <li> Switching</li>
                                  <li> Enable Static Routing</li>
                                  <li> Implement Dynamic IP Routing</li>
                                  <li> Virtual LANs</li>
                                  <li> Plan a SOHO Network</li>
                                </ul>
                              </div>
                            </div>
                          </div>

                          <div class="panel">
                            <div class="panel-title"> <a data-parent="#accordion1" data-toggle="collapse" href="#accordion20" class="" aria-expanded="true"> <span class="open-sub"></span>9. WAN Infrastructure</a> </div>
                            <div id="accordion20" class="panel-collapse collapse" role="tablist" aria-expanded="true">
                              <div class="panel-content">
                                <ul class="list check">
                                  <li> WAN Transmission Technologies</li>
                                  <li> WAN Connectivity Methods</li>
                                  <li> Voice over Data Transmission</li>
                                </ul>
                              </div>
                            </div>
                          </div>

                          <div class="panel">
                            <div class="panel-title"> <a data-parent="#accordion1" data-toggle="collapse" href="#accordion21" class="" aria-expanded="true"> <span class="open-sub"></span>10. Remote Networking</a> </div>
                            <div id="accordion21" class="panel-collapse collapse" role="tablist" aria-expanded="true">
                              <div class="panel-content">
                                <ul class="list check">
                                  <li> Remote Network Architectures</li>
                                  <li> Remote Access Networking Implementations</li>
                                  <li> Virtual Private Networking</li>
                                  <li> VPN Protocols</li>
                                </ul>
                              </div>
                            </div>
                          </div>

                           <div class="panel">
                            <div class="panel-title"> <a data-parent="#accordion1" data-toggle="collapse" href="#accordion22" class="" aria-expanded="true"> <span class="open-sub"></span>11. System Security</a> </div>
                            <div id="accordion22" class="panel-collapse collapse" role="tablist" aria-expanded="true">
                              <div class="panel-content">
                                <ul class="list check">
                                  <li> Computer Security Basics</li>
                                  <li> System Security Tools</li>
                                  <li> Authentication Methods</li>
                                  <li> Encryption Methods</li>
                                </ul>
                              </div>
                            </div>
                          </div>

                          <div class="panel">
                            <div class="panel-title"> <a data-parent="#accordion1" data-toggle="collapse" href="#accordion23" class="" aria-expanded="true"> <span class="open-sub"></span>12.  Network Security</a> </div>
                            <div id="accordion23" class="panel-collapse collapse" role="tablist" aria-expanded="true">
                              <div class="panel-content">
                                <ul class="list check">
                                  <li> Network Perimeter Security</li>
                                  <li> Intrusion Detection and Prevention</li>
                                  <li> Protect Network Traffic Using IPSec</li>
                                </ul>
                              </div>
                            </div>
                          </div>

                          <div class="panel">
                            <div class="panel-title"> <a data-parent="#accordion1" data-toggle="collapse" href="#accordion24" class="" aria-expanded="true"> <span class="open-sub"></span>13.  Network Security Threats and Attacks</a> </div>
                            <div id="accordion24" class="panel-collapse collapse" role="tablist" aria-expanded="true">
                              <div class="panel-content">
                                <ul class="list check">
                                  <li> Network-Based Security Threats and Attacks</li>
                                  <li> Apply Threat Mitigation Techniques</li>
                                  <li> Educate Users</li>
                                </ul>
                              </div>
                            </div>
                          </div>

                          <div class="panel">
                            <div class="panel-title"> <a data-parent="#accordion1" data-toggle="collapse" href="#accordion25" class="" aria-expanded="true"> <span class="open-sub"></span>14.  Network Management</a> </div>
                            <div id="accordion25" class="panel-collapse collapse" role="tablist" aria-expanded="true">
                              <div class="panel-content">
                                <ul class="list check">
                                  <li> Network Monitoring</li>
                                  <li> Configuration Management Documentation</li>
                                  <li> Network Performance Optimization</li>
                                </ul>
                              </div>
                            </div>
                          </div>

                          <div class="panel">
                            <div class="panel-title"> <a data-parent="#accordion1" data-toggle="collapse" href="#accordion27" class="" aria-expanded="true"> <span class="open-sub"></span>15.  Network Troubleshooting</a> </div>
                            <div id="accordion27" class="panel-collapse collapse" role="tablist" aria-expanded="true">
                              <div class="panel-content">
                                <ul class="list check">
                                  <li> Network Troubleshooting Models</li>
                                  <li> Network Troubleshooting Utilities</li>
                                  <li> Hardware Troubleshooting Tools</li>
                                  <li> Common Connectivity Issues</li>
                                </ul>
                              </div>
                            </div>
                          </div>

                        </div>-->
                      </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
         <div class="col-sm-12 col-md-4">
            <div class="sidebar sidebar-left mt-sm-30 ml-40">
              <div class="widget">
                <h4 class="widget-title line-bottom">Courses List</h4>
                <div class="services-list">
                  <ul class="list list-border angle-double-right">
                    <li ><a href="primary.php">Secondary</a></li>
                    <li ><a href="secondary.php">Higher Secondary</a></li>
                    <li class="active"><a href="javascript:void()">Diploma </a></li>
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
                      <div class="value pull-right"> 8.00 am - 8.00 pm </div>
                    </li>
                    <li class="clearfix"> <span> Sun : </span>
                      <div class="value pull-right"> Closed </div>
                    </li>
                    <li class="clearfix"> <span> Duration : </span>
                      <div class="value pull-right"> 06 Months </div>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="widget">
                <h4 class="widget-title line-bottom">Venue</h4>
                <div class="opening-hours">
                  <ul class="list-border">
                    <li class="clearfix"> <span>   1/4 Shiraj Bhavan, Elphinstone   </span>
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
                        <div class="thumb pull-right">
                          <img class="img-circle" src="academy_admin/images/stud-feedback/'.$row['student_photo'] .'" alt="' . $row['name'] . '">
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

<!-- Mirrored from kodesolution.com/demo/wxyz/w/learnpress/v2.0/demo/page-courses-accounting-technologies.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Jan 2017 08:09:29 GMT -->
</html>