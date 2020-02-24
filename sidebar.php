<?php 


  include_once('login_check.php');


 ?>

<div class="navbar nav_title" style="border: 0;">
  <a href="index.php" class="site_title"><i class="fa fa-graduation-cap"></i> <span>Phoenix Tutorials </span></a>
</div>

<div class="clearfix"></div>

<!-- menu profile quick info -->
<!-- <div class="profile">
  <div class="profile_pic">
    <img src="images/img.jpg" alt="..." class="img-circle profile_img">
  </div>
  <div class="profile_info">
    <span>Welcome,</span>
    <h2>John Doe</h2>
  </div>
</div> -->
<!-- /menu profile quick info -->

<br />

<!-- sidebar menu -->
  <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    <div class="menu_section">
      <h3>Dashboard</h3>
      <ul class="nav side-menu">
        <!-- <li><a href="index.php"><i class="fa fa-home"></i> Home </a></li> -->
        
        <li><a><i class="fa fa-user"></i> Candidate <span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
            <li><a href="candidate.php">Adminssion </a></li>
            <!-- <li><a href="candidate_add.php">Add New</a></li> -->
            <li><a href="contact.php">Contact Form</a></li>
            <li><a href="inquery.php">Inquery </a></li>
          </ul>
        </li>

        <li><a><i class="fa fa-info"></i> About us <span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
            <li><a href="about_us.php">View About us </a></li>
            <li><a href="about_add.php?id=1">Update About us</a></li>
          </ul>
        </li>

        <li><a><i class="fa fa-calendar"></i> Events <span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
            <li><a href="view_event.php">List All </a></li>
            <li><a href="add_event.php">Add Event </a></li>
          </ul>
        </li>

        <li><a><i class="fa fa-thumbs-o-up"></i>Student Feedback <span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
            <li><a href="student.php">List All</a></li>
            <li><a href="add_stud_feedback.php">Add New</a></li>
          </ul>
        </li>

        <!--<li><a><i class="fa fa-rss-square"></i> Blogs <span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
            <li><a href="blogs.php">List All</a></li>
            <li><a href="add_post.php">Add New</a></li>
          </ul>
        </li>-->
        <li><a><i class="fa fa-file-image-o"></i> Fees<span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
            <li><a href="fees.php">List All</a></li>
            <li><a href="fees_add.php">Add New</a></li>
          </ul>
        </li>

        <li><a><i class="fa fa-rss-square"></i> Teachers <span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
            <li><a href="teachers.php">List All</a></li>
            <li><a href="add_teachers.php">Add New</a></li>
          </ul>
        </li>

        <li><a><i class="fa fa-image"></i> Gallery <span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
            <li><a href="gallery.php">List All</a></li>
            <li><a href="gallery_add.php">Add New</a></li>
          </ul>
        </li>

        <li><a><i class="fa fa-tasks"></i> Upcoming Batch <span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
            <li><a href="batch.php">List All</a></li>
            <li><a href="batch_add.php">Add New</a></li>
          </ul>
        </li>
         <li><a><i class="fa fa-tasks"></i>Attendance <span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
            <li><a href="viewattendance.php">List All</a></li>
            <li><a href="attendance_add.php">Add New</a></li>
          </ul>
        </li>
        <li><a><i class="fa fa-tasks"></i> Course Notes <span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
            <li><a href="viewnotes.php">List All</a></li>
            <li><a href="notes.php">Add New</a></li>
          </ul>
        </li>
        <li><a><i class="fa fa-file-image-o"></i>Topper<span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
            <li><a href="topper.php">List All</a></li>
            <li><a href="topper_add.php">Add New</a></li>
          </ul>
        </li>
        <li><a href="chat.php"><i class="fa fa-comments"></i> Online Help </a></li>
        <!-- <li><a href="terms_conditions.php"><i class="fa fa-tags"></i> Terms and Conditions </a></li>  -->
      </ul>
    </div>
    <!-- <div class="menu_section">
      <h3>Live On</h3>
     
    </div> -->

  </div>
  <!-- /sidebar menu -->

  <!-- /menu footer buttons -->
  <div class="sidebar-footer hidden-small">
    <a data-toggle="tooltip" data-placement="top" title="Settings">
      <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
    </a>
    <a id="fullScreen" href="#1" data-toggle="tooltip" data-placement="top" title="FullScreen">
      <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
    </a>
    <a data-toggle="tooltip" data-placement="top" title="Lock">
      <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
    </a>
    <a data-toggle="tooltip" data-placement="top" title="Logout">
      <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
    </a>
  </div>
  <!-- /menu footer buttons -->

  <script type="text/javascript" src="js/screenfull.js"></script>
  <script type="text/javascript">
    const elem = document.getElementsByTagName('body')[0];

    document.getElementById('fullScreen').addEventListener('click', () => {
        if (screenfull.enabled) {
            screenfull.toggle();
        }
    });
  </script>