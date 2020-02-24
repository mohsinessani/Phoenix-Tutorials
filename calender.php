<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Phoenix Tutorials || Dashboard</title>

  <!-- Bootstrap core CSS -->

  <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

  <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <link href="build/css/custom.min.css" rel="stylesheet">

  <link href="vendors/fullcalendar/dist/fullcalendar.css" rel="stylesheet">
  <link href="vendors/fullcalendar/dist/fullcalendar.print.css" rel="stylesheet" media="print">

  <script src="js/jquery.min.js"></script>

  <!--[if lt IE 9]>
            <script src="../assets/js/ie8-responsive-file-warning.js"></script>
            <![endif]-->

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
              <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
              <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
            <![endif]-->

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
          <div class="clearfix"></div>


          
      <!-- page content -->
      <div class="right_col" role="main">
        <div class="">

          <!--  <iframe src="https://calendar.google.com/calendar/embed?height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=fspsframn5k2ff5kk7k1neu84s%40group.calendar.google.com&amp;color=%238C500B&amp;src=en.indian%23holiday%40group.v.calendar.google.com&amp;color=%23125A12&amp;ctz=Asia%2FCalcutta" style="border-width:0" width="100%" height="600px" frameborder="0" scrolling="no"></iframe> -->
          <iframe src="https://calendar.google.com/calendar/render?pli=1#main_7%7Cmonth/"></iframe>
          </div>
        </div>

        <!-- footer content -->
        <?php include_once('footer.php'); ?>
        <!-- /footer content -->

      </div>


      <!-- Start Calender modal -->
      <div id="CalenderModalNew" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">

            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
              <h4 class="modal-title" id="myModalLabel">New Calender Entry</h4>
            </div>
            <div class="modal-body">
              <div id="testmodal" style="padding: 5px 20px;">
                <form id="antoform" class="form-horizontal calender" role="form">
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Title</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="title" name="title">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Description</label>
                    <div class="col-sm-9">
                      <textarea class="form-control" style="height:55px;" id="descr" name="descr"></textarea>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default antoclose" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary antosubmit">Save changes</button>
            </div>
          </div>
        </div>
      </div>
      <div id="CalenderModalEdit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">

            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
              <h4 class="modal-title" id="myModalLabel2">Edit Calender Entry</h4>
            </div>
            <div class="modal-body">

              <div id="testmodal2" style="padding: 5px 20px;">
                <form id="antoform2" class="form-horizontal calender" role="form">
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Title</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="title2" name="title2">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Description</label>
                    <div class="col-sm-9">
                      <textarea class="form-control" style="height:55px;" id="descr2" name="descr"></textarea>
                    </div>
                  </div>

                </form>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default antoclose2" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary antosubmit2">Save changes</button>
            </div>
          </div>
        </div>
      </div>

      <div id="fc_create" data-toggle="modal" data-target="#CalenderModalNew"></div>
      <div id="fc_edit" data-toggle="modal" data-target="#CalenderModalEdit"></div>

      <!-- End Calender modal -->
      <!-- /page content -->
    </div>

  </div>

  <div id="custom_notifications" class="custom-notifications dsp_none">
    <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
    </ul>
    <div class="clearfix"></div>
    <div id="notif-group" class="tabbed_notifications"></div>
  </div>

  <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>

  <script src="vendors/nprogress/nprogress.js"></script>
  
  <!-- bootstrap progress js -->
  <script src="vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
  <script src="vendors/nicescroll/jquery.nicescroll.min.js"></script>
  <!-- icheck -->
  <script src="vendors/icheck/icheck.min.js"></script>

  <script src="build/js/custom.js"></script>
  

  <script src="js/moment/moment.min.js"></script>
  <script src="vendors/fullcalendar/dist/fullcalendar.min.js"></script>
  <!-- pace -->
  <script src="js/pace/pace.min.js"></script>
  <script>
    $(window).load(function() {

      var date = new Date();
      var d = date.getDate();
      var m = date.getMonth();
      var y = date.getFullYear();
      var started;
      var categoryClass;

      var calendar = $('#calendar').fullCalendar({
        header: {
          left: 'prev,next today',
          center: 'title',
          right: 'month,agendaWeek,agendaDay'
        },
        selectable: true,
        selectHelper: true,
        select: function(start, end, allDay) {
          $('#fc_create').click();

          started = start;
          ended = end

          $(".antosubmit").on("click", function() {
            var title = $("#title").val();
            if (end) {
              ended = end
            }
            categoryClass = $("#event_type").val();

            if (title) {
              calendar.fullCalendar('renderEvent', {
                  title: title,
                  start: started,
                  end: end,
                  allDay: allDay
                },
                true // make the event "stick"
              );
            }
            $('#title').val('');
            calendar.fullCalendar('unselect');

            $('.antoclose').click();

            return false;
          });
        },
        eventClick: function(calEvent, jsEvent, view) {
          //alert(calEvent.title, jsEvent, view);

          $('#fc_edit').click();
          $('#title2').val(calEvent.title);
          categoryClass = $("#event_type").val();

          $(".antosubmit2").on("click", function() {
            calEvent.title = $("#title2").val();

            calendar.fullCalendar('updateEvent', calEvent);
            $('.antoclose2').click();
          });
          calendar.fullCalendar('unselect');
        },
        editable: true,
        events: [{
          title: 'All Day Event',
          start: new Date(y, m, 1)
        }, {
          title: 'Long Event',
          start: new Date(y, m, d - 5),
          end: new Date(y, m, d - 2)
        }, {
          title: 'Meeting',
          start: new Date(y, m, d, 10, 30),
          allDay: false
        }, {
          title: 'Lunch',
          start: new Date(y, m, d + 14, 12, 0),
          end: new Date(y, m, d, 14, 0),
          allDay: false
        }, {
          title: 'Birthday Party',
          start: new Date(y, m, d + 1, 19, 0),
          end: new Date(y, m, d + 1, 22, 30),
          allDay: false
        }, {
          title: 'Click for Google',
          start: new Date(y, m, 28),
          end: new Date(y, m, 29),
          url: 'http://google.com/'
        }]
      });
    });
  </script>
</body>

</html>
