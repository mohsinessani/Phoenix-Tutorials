<?php 
  include_once('login_check.php');

include_once('source/config.php');
include_once('export.php');

 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta name="theme-color" content="#2a3f54" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" sizes="192x192" href="mastercard.png">
    <title>Phoenix Tutorials || Dashboard</title>

    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- bootstrap-datepicker -->
    <link href="vendors/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">

    <!-- <link href="css/file_upload.css" rel="stylesheet"> -->

    <!-- PNotify -->
    <link href="vendors/pnotify/dist/pnotify.css" rel="stylesheet">
    <link href="vendors/pnotify/dist/pnotify.buttons.css" rel="stylesheet">
    <link href="vendors/pnotify/dist/pnotify.nonblock.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="build/css/custom.min.css" rel="stylesheet">

    <style type="text/css">
        .tab-head{
            position: relative;
            top: -34px;
            left: 88%;
            /* color: black; */
            background-color: #fff;
            border: 1px solid;
            border-radius: 4px;
            padding: 4px;
            width: auto;
        }

        .well{
            border :1px solid;
        }
        .inputfile {
            width: 0.1px;
            height: 0.1px;
            opacity: 0;
            overflow: hidden;
            position: absolute;
            z-index: -1;
        }

        @media only screen and (max-width: 768px){
            .tab-head{
                position: static;
                width: 100%;
            }
        } 

    </style>
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
        	<?php if(!empty($import_status_message)){
        echo '<div class="alert '.$message_stauts_class.'">'.$import_status_message.'</div>';
    } ?>
            <div class="x_panel">
            	
                   <!--  <?php 
                        // if(isset($_GET['id']))
                        // {
                        //     $id = $_GET['id'];
                        //     echo '<input type="hidden" name="id" value="'.$id.'" >';
                        // }
                     ?> -->

                    <div class="well">
                        <label class="tab-head">Attendance Details</label>
                        
                <form id="attendanceForm" action="source/attendance_form.php" method="POST" enctype="multipart/form-data" class="form-horizontal form-label-left">

                			<div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Choose Course <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                	<select  name="course"  class="form-control" required="required" >
						              <option  >Choose Course</option>
						              <option  value="Secondary">Secondary</option>
						              <option  value="Higher Secondary">Higher Secondary</option>
						              <option  value="Diploma">Diploma</option>
						            </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Student Name <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                	<select  name="s_name"  class="form-control" required="required" >
						              <option >Choose Student</option>
						              <?php
						                $conn = new mysqli($servername, $username, $password, $dbname);
						                if ($conn->connect_error) {
						                    die("Connection failed: " . $conn->connect_error);
						                }
						                $get_name="SELECT * FROM register_online WHERE status='Active'";
						                $run_name=mysqli_query($conn,$get_name);
						                while ($row_name=mysqli_fetch_array($run_name)) {
						                  
						                  $name=$row_name['name'];
						                  $s_id=$row_name['reg_id'];
						                  echo "<option value='$s_id' >$name</option>";

						                }
						              ?>
						            </select>

                                </div>
                            </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Status <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <select class="form-control" name="status"  >
                                	<option value="">Select Status</option>
                                	<option value="P">Present</option>
                                	<option value="A">Absent</option>
                                	<option value="H">Holiday</option>
                                </select>
                            </div>
                        </div>

                    </div>

                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="submit" name="submit" id="submit" class="btn btn-dark btn-lg pull-right" value="Submit">
                        </div>
                    </div>
                </form>
                    
            </div>
            
            <div id="output1"></div>
            <div class="well">
                <label class="tab-head">Import / Export Data</label>
                <form action="import.php" method="post" enctype="multipart/form-data" id="import_form">             
                            <div class="col-md-3">
                            <input type="file" name="file" />
                            </div>
                            <div class="col-md-5">
                            <input type="submit" class="btn btn-primary" name="import_data" value="IMPORT">
                            </div>          
                        </form>
                        <br>
            <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">                   
                <button type="submit" id="export_csv_data" name='export_csv_data' value="Export to CSV" class="btn btn-info">Export to CSV</button>
            </form>
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
    <!-- jquery.inputmask -->
    <script src="vendors/jquery.inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>

    <script type="text/javascript" src="js/jquery.custom-file-input.js"></script>
    <!-- bootstrap-datepicker -->
    <script src="vendors/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
    <!-- Jquery ajax form -->
    <script type="text/javascript" src="js/jquery.form.js"></script>
    <!-- PNotify -->
    <script src="vendors/pnotify/dist/pnotify.js"></script>
    <script src="vendors/pnotify/dist/pnotify.buttons.js"></script>
    <script src="vendors/pnotify/dist/pnotify.nonblock.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="build/js/custom.js"></script>
    

    <script type="text/javascript">
        $(document).ready(function(){
            $(":input").inputmask();
            $(".datepicker").datepicker({
                format: 'dd MM, yyyy',
                autoclose: true
            });
        });
    </script>



     <!-- Form submit -->
    <script type="text/javascript">
      // prepare the form when the DOM is ready 
      $(document).ready(function() {

          var options = { 
              //target:        '#output1',   // target element(s) to be updated with server response 
              beforeSubmit:  showRequest,  // pre-submit callback 
              success:       showResponse  // post-submit callback 
       
              // other available options: 
              //url:       url         // override for form's 'action' attribute 
              //type:      type        // 'get' or 'post', override for form's 'method' attribute 
              //dataType:  null        // 'xml', 'script', or 'json' (expected server response type) 
              //\clearForm: true        // clear all form fields after successful submit 
              //resetForm: true        // reset the form after successful submit 
       
              // $.ajax options can be used here too, for example: 
              //timeout:   3000 
          }; 
       
          // bind form using 'ajaxForm' 
          $('#attendanceForm').ajaxForm(options); 


          

          
      }); 
    
      var notice = null;
      // pre-submit callback 
      function showRequest(formData, jqForm, options) { 

        
            notice = new PNotify({
            text: "Please Wait",
            type: 'info',
            icon: 'fa fa-spinner fa-spin',
            hide: false,
            buttons: {
                closer: false,
                sticker: false
            },
             opacity: .75,
            // shadow: false,
            addclass: 'dark',
            styling: 'bootstrap3',
            width: "170px"
        });

        notice.update({
            title: false
        });
      } 
       
      // post-submit callback 
      function showResponse(responseText, statusText, xhr, $form)  { 
            var classTemp = "dark";

            if(responseText.indexOf("Success") != -1)
            {
                classTemp = "success";
            }

            var options = {
                text: responseText,
                title : "Done!",
                type : "success",
                hide : true,
                buttons : {
                    closer: true,
                    sticker: true
                },
                addclass : classTemp,
                icon : 'fa fa-check',
                opacity : 1,
                shadow : true,
                width : PNotify.prototype.options.width,
            };
        
            notice.update(options);

            if(classTemp == "success")
            {
                // redirect
                setTimeout(function(){
                    window.location.replace("attendance.php");
                }, 1500);
            }
       
          // alert('status: ' + statusText + '\n\nresponseText: \n' + responseText + 
          //     '\n\nThe output div should have already been updated with the responseText.'); 
      } 
    </script>
    <!-- /form submit -->
  </body>
</html>
