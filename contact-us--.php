<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>

<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="Naimah | Education & Courses" />
<meta name="keywords" content="academy, course, education, education, elearning, learning, contact page , phoenix Tutorials,tuisions, PCB ,PCMB, PCM, Primary, Secondary, Diploma," />
<meta name="author" content="Ajay " />

<!-- Page Title -->
<title>Phoenix Tutorials || Contacu Us</title>

<!-- Favicon and Touch Icons -->
<link href="images/favicon.png" rel="shortcut icon" type="image/png">

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

  input{
    color:#000 !important;
  }
  textarea{
    color:#000 !important;
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
      <img alt="" src="images/preloaders/5.gif">
    </div>
    <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
  </div>
  
 <?php  
    include_once('header.php');
 ?>
  
  <!-- Start main-content -->
  <div class="main-content bg-lighter">
    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="images/bg/bg6.jpg">
      <div class="container pt-70 pb-20">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12">
              <h2 class="title text-white text-center">Contact</h2>
              <ol class="breadcrumb text-left text-black mt-10">
                <li><a href="index.php">Home</a></li>
                <li class="active text-gray-silver">Contact</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Divider: Contact -->
    <section class="divider layer-overlay overlay-white-9" data-bg-img="images/bg/bg15.html">
      <div class="container">
        <div class="row pt-30">
          <div class="col-md-8">
            <h3 class="line-bottom mt-0 mb-20">Interested in discussing?</h3>
            <!-- Contact Form -->
            	<form id="contact_form" name="contact_form" class="form-transparent" action="ajax-load/contact-form.php" method="post">
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="form_name">Name <small>*</small></label>
                    <input name="name" class="form-control" type="text" placeholder="Enter Name" required="">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="form_email">Email <small>*</small></label>
                    <input name="email" class="form-control required email" type="email" placeholder="Enter Email">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="form_name">Subject <small>*</small></label>
                    <input name="subject" class="form-control required" type="text" placeholder="Enter Subject">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="form_phone">Phone</label>
                    <input name="phone" class="form-control" type="text" placeholder="Enter Phone">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="form_name">Message</label>
                <textarea name="message" class="form-control required" rows="5" placeholder="Enter Message"></textarea>
              </div>
              <div class="form-group">
                <input name="form_botcheck" class="form-control" type="hidden" value="" />
                <button type="submit" class="btn btn-dark btn-theme-colored btn-flat mr-5" data-loading-text="Please wait...">Send your message</button>
                <button type="reset" class="btn btn-default btn-flat btn-theme-colored">Reset</button>
              </div>
            </form>
            
            <!-- Contact Form Validation-->
            <script type="text/javascript">
              $("#contact_form").validate({
                submitHandler: function(form) {
                  var form_btn = $(form).find('button[type="submit"]');
                  var form_result_div = '#form-result';
                  $(form_result_div).remove();
                  form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
                  var form_btn_old_msg = form_btn.html();
                  form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
                  $(form).ajaxSubmit({
                    dataType:  'json',
                    success: function(data) {
                      if( data.status == 'true' ) {
                        $(form).find('.form-control').val('');
                      }
                      form_btn.prop('disabled', false).html(form_btn_old_msg);
                      $(form_result_div).html(data.message).fadeIn('slow');
                      setTimeout(function(){ $(form_result_div).fadeOut('slow') }, 6000);
                    }
                  });
                }
              });
            </script>
          </div>
          
          <div class="col-md-4">
            <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="icon-box left media bg-black-333 p-25 mb-20"> <a class="media-left pull-left" href="#"> <i class="pe-7s-map-2 text-theme-color-2"></i></a>
                  <div class="media-body"> <strong class="text-white">OUR OFFICE LOCATION</strong>
                    <p class="text-white">1/14 shivraj bhavan 1, Elphinstone ,Indiabulls gate no 3, B.M.Marg. Mumbai- 13</p>
                  </div>
                </div>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-12 text-white">
                <div class="icon-box left media bg-black-333 p-25 mb-20"> <a class="media-left pull-left" href="#"> <i class="pe-7s-call text-theme-color-2"></i></a>
                  <div class="media-body"> <strong class="text-white">OUR CONTACT NUMBER</strong>
                    <p><a class="text-white" href="tel:+91 8369741588">+91 836 974 1588</a></p>
                    <p><a class="text-white" href="tel:+91 9664176085">+91 966 417 6085</a></p>
                  </div>
                </div>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-12 text-white">
                <div class="icon-box left media bg-black-333 p-25 mb-20"> <a class="media-left pull-left" href="#"> <i class="pe-7s-mail text-theme-color-2"></i></a>
                  <div class="media-body"> <strong class="text-white">OUR CONTACT E-MAIL</strong>
                    <p> <a class="text-white" href="mailto: help@phoenixtutorial.com">help@phoenixtutorial.com</a></p>
                  </div>
                </div>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-12 text-white">
                <div class="icon-box left media bg-black-333 p-25 mb-20"> <a class="media-left pull-left" href="#"> <i class="fa fa-whatsapp text-theme-color-2"></i></a>
                  <div class="media-body"> <strong class="text-white">Make a WhatsApp Inquiry</strong>
                  	<p><a class="text-white" href="whatsapp://send?text=Hello Sir!! &phone=+91 8369741588" >+91 836 974 1588</a></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-md-12 col-sm-12">
            <div class="row">
                <ul class="styled-icons icon-dark icon-sm icon-circled mb-20" style="padding-top: 48px;">
                  <li><a href="#" data-bg-color="#3B5998"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#" data-bg-color="#02B0E8"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#" data-bg-color="#4C75A3"><i class="fa fa-vk"></i></a></li>
                  <li><a href="#" data-bg-color="#D9CCB9"><i class="fa fa-instagram"></i></a></li>
                  <li><a href="#" data-bg-color="#D71619"><i class="fa fa-google-plus"></i></a></li>
                  <li><a href="#" data-bg-color="#A4CA39"><i class="fa fa-android"></i></a></li>
                  <li><a href="#" data-bg-color="#4C75A3"><i class="fa fa-vk"></i></a></li>
                  <li><a href="whatsapp://send?text=Hello Sir!&phone=+91 8369741588" data-bg-color="#2098d1"><i class="fa fa-whatsapp"></i></a></li>
                </ul>
              </div>
            </div>
      </div>
    </section>
    
    <!-- Divider: Google Map -->
    <section>
      <div class="container-fluid pt-0 pb-0">
        <div class="row">

          <!-- Google Map HTML Codes -->
          <!-- <div 
            id="map-canvas-multipointer"
            data-mapstyle="default"
            data-height="500"
            data-zoom="24"
            data-marker="images/map-marker.png">
          </div> -->
          <!-- Google Map Javascript Codes -->
          <!-- <script src="http://maps.google.com/maps/api/js?key=AIzaSyAYWE4mHmR9GyPsHSOVZrSCOOljk8DU9B4"></script> -->
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15089.274971341316!2d72.82424922244019!3d19.00567126830762!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7cee9500c0001%3A0x73faf0d2a7a7ae95!2sPhoenix+Tutorials!5e0!3m2!1sen!2sin!4v1520677166033" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>

          <!-- <script src="js/google-map-init-multilocation.js"></script> -->
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