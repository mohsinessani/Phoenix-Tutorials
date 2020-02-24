<?php 
  include_once('login_check.php');

include_once('source/config.php');

    $id                 = '';
    $name        = '';
    $department     = '';
    $feedback         = '';
    $image_file         = '';
    $event_image        = '';
    $update_date       = '';


if (isset($_GET['id'])) 
{
    include_once('source/config.php');
    $id = $_GET['id'];

    try 
    {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // Make a sql query
        $sql = "SELECT * FROM student_feedback where id = :id";

        //Prepare sql query
        $stmt = $conn->prepare($sql);
        
        $stmt->bindParam(':id', $id);

        $stmt->execute();

        while ($data = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $name = $data['name'];
            $department = $data['department'];
            $feedback = $data['feedback'];  
            $student_photo = $data['student_photo']; 
            $update_date = $data['update_date'];
            $student_photo        = $data['student_photo'];
        }
    }
    catch(PDOException $e)
    {
        echo "Connection failed: " . $e->getMessage();
        $action = "";
    }
}
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
    <title>Phoenix Tutorials  || Dashboard</title>

    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- bootstrap-datepicker -->
    <link href="vendors/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">

    <link href="css/file_upload.css" rel="stylesheet">

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
            <div class="x_panel">
                <form id="galleryForm" action="source/feedback_form.php" method="POST" enctype="multipart/form-data" class="form-horizontal form-label-left">
                   <!--  <?php 
                        // if(isset($_GET['id']))
                        // {
                        //     $id = $_GET['id'];
                        //     echo '<input type="hidden" name="id" value="'.$id.'" >';
                        // }
                     ?> -->

                    <div class="well">
                        <label class="tab-head">Event Details</label>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Student Name <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" placeholder="Enter Student name"  class="form-control" name="name"  >
                                </div>
                            </div>

                        <!-- <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Event Date <span class="required">*</span>
                            </label>

                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="control-group">
                                  <div class="controls">
                                    <div class="input-prepend input-group">
                                      <span class="add-on input-group-addon"><i class="glyphicon glyphicon-calendar fa fa-calendar"></i></span>
                                       <input type="text" placeholder="dd month, year" class="form-control datepicker" name="event_date"  >
                                    </div>
                                  </div>
                                </div>
                            </div> 
                        </div> -->
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Department (Class)<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" placeholder="Student Department"  class="form-control" name="department"  >
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Feedback <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <textarea class="form-control" rows="4" name="feedback" placeholder="Give feedback Details" > </textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Select Image<span class="required">*</span>
                            </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                <div style="background-size:cover; background-repeat:no-repeat">
                                    <input type="file" name="uploads[]" id="file-1" class="inputfile inputfile-1"  accept='image/*'  />
                                    <label for="file-1"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg> <span>Choose a file&hellip;</span></label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Status <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <Select class="form-control" name="status">
                                	<option value="Enable">Enable</option>
                                	<option value="Disable">Disable</option>
                                </Select>
                            </div>
                        </div>

                    </div>

                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="submit" name="submit" class="btn btn-dark btn-lg pull-right" value="submit">
                        </div>
                    </div>
                </form>
                    
            </div>
            <div id="output1"></div>
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
          $('#galleryForm').ajaxForm(options); 


          

          
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
                    window.location.replace("student.php");
                }, 1500);
            }
       
          // alert('status: ' + statusText + '\n\nresponseText: \n' + responseText + 
          //     '\n\nThe output div should have already been updated with the responseText.'); 
      } 
    </script>
    <!-- /form submit -->
  </body>
</html>
