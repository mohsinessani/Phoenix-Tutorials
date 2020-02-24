<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>

<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="Phoenix IT academy | Education & Courses Networking Hardware Security" />
<meta name="keywords" content="academy, course, education, education cources, Hardware , software, Networking , Security , learning," />
<meta name="author" content=" " />

<!-- Page Title -->
<title>Phoenix Tutorilas || TimeTable</title>

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
              <h2 class="title text-white">Time Table</h2>
              <ol class="breadcrumb text-center text-black mt-10">
                <li><a href="index.php">Home</a></li>
                <li><a href="#">Cources</a></li>
                <li class="active text-gray-silver">Time Table</li>
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
              
              <!-- === FC Calendar Starts === -->
              <div class="fc-timetable-wrapper">
                <!-- Fc Calendar Filter -->
                <ul class="filter-departments list-inline">
                  <li><a class="active" data-filter="all" href="#">All</a></li>
                  <li><a data-filter="fc-departments-orthopaedics" class="orthopaedics" href="#orthopaedics">Secondary</a></li>
                  <li><a data-filter="fc-departments-cardiology" class="cardiology" href="#cardiology">Higher Secondary</a></li>
                  <li><a data-filter="fc-departments-neurology" class="neurology" href="#neurology">Diploma </a></li>
                  <!-- <li><a data-filter="fc-departments-dental" class="dental" href="#dental">Dental</a></li>
                  <li><a data-filter="fc-departments-haematology" class="haematology" href="#haematology">Haematology</a></li>
                </ul> -->
                <!-- Fc Calendar Calendar -->
                <div id='calendar'></div>
              </div>

              <!-- Fc Calendar Script -->
              <script>
                $(document).ready(function() {
                  $(".filter-departments a").on("click", function(e){
                    e.preventDefault();
                    var filterData = $(this).data("filter");
                    if (filterData == "all") {
                      $(".filter-departments a.active").removeClass("active");
                      $(this).addClass("active");
                      $(".fc-content-skeleton a.fc-event.hide").removeClass("hide");
                    } else {
                      $(".filter-departments a.active").removeClass("active");
                      $(this).addClass("active");
                      $(".fc-content-skeleton a.fc-event.hide").removeClass("hide");
                      $(".fc-content-skeleton a.fc-event").not("."+filterData).addClass("hide");
                    }
                  });

                  var monday = '2015-03-09T';
                  var tuesday = '2015-03-10T';
                  var wednesday = '2015-03-11T';
                  var thursday = '2015-03-12T';
                  var friday = '2015-03-13T';
                  var saturday = '2015-03-14T';
                  var sunday = '2015-03-15T';
                  $('#calendar').fullCalendar({
                    header: {
                      left: '',
                      center: '',
                      right: ''
                    },
                    axisFormat: 'HH:mm - HH:mm',
                    minTime: '08:00:00',
                    maxTime: '24:00:00',
                    defaultView: 'agendaWeek',
                    defaultDate: '2015-03-09',
                    firstDay: 1,
                    slotDuration: '01:00:00',
                    columnFormat: 'dddd',
                    allDaySlot: false,
                    editable: false,
                    eventLimit: true,
                    windowResize: function(view) {
                    },
                    events: [
                      {
                        title: 'Secondary 08:00 - 12:30',
                        start: monday+'08:00:00',
                        end: monday+'12:30:00',
                        url: 'primary.php',
                        className: 'fc-departments-orthopaedics'
                      },
                      {
                        title: 'Secondary  09:00 - 11:00',
                        start: saturday+'09:00:00',
                        end: saturday+'11:00:00',
                        url: 'primary.php',
                        className: 'fc-departments-orthopaedics'
                      },
                      {
                        title: 'Secondary Care 13:00 - 16:00',
                        start: thursday+'13:00:00',
                        end: thursday+'16:00:00',
                        url: 'primary.php',
                        className: 'fc-departments-orthopaedics'
                      },
                      {
                        title: 'Diploma  14:00 - 18:00',
                        start: tuesday+'14:00:00',
                        end: tuesday+'18:00:00',
                        url: 'diploma.php',
                        className: 'fc-departments-neurology'
                      },
                      {
                        title: 'Diploma  11:00 - 14:30',
                        start: friday+'11:00:00',
                        end: friday+'14:30:00',
                        url: 'diploma.php',
                        className: 'fc-departments-neurology'
                      },
                      {
                        title: 'Higher Secondary  10:00 - 12:00',
                        start: wednesday+'10:00:00',
                        end: wednesday+'12:00:00',
                        url: 'secondary.php',
                        className: 'fc-departments-cardiology'
                      },
                      {
                        title: 'Higher Secondary Care 16:30 - 8:30:',
                        start: friday+'16:30:00',
                        end: friday+'18:30:00',
                        url: 'secondary.php',
                        className: 'fc-departments-cardiology'
                      },
                      {
                        title: 'Diploma  11:30 - 13:00',
                        start: sunday+'11:30:00',
                        end: sunday+'13:00:00',
                        url: 'diploma.php',
                        className: 'fc-departments-cardiology'
                      }
                    ]
                  });
                  
                });
                
                //fix hour range
                $( window ).load(function() {
                  $("#calendar .fc-axis.fc-time").each(function() {
                    var each_range = $(this).children('span').html();
                    var range_array = each_range.split(' - ');
                    if( range_array[0] == range_array[1] ) {
                      var range_end_hour = range_array[1].split(':');
                      var h = parseInt(range_end_hour[0], 10) + 1;
                      $(this).children('span').html(range_array[0] + ' - ' + h + ':' + range_end_hour[1] )
                    }
                  });
                  if(window.location.hash) {
                    var hash = document.URL.substr(document.URL.indexOf('#')+1);
                    $(".filter-departments a."+hash).trigger('click');
                  }
                });
              </script>
              <!-- === FC Calendar Ends === -->

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
<!-- end wrapper -->

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<!-- <script src="js/custom.js"></script> -->

</body>


</html>