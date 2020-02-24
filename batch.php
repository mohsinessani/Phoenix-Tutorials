<?php 

  include_once('login_check.php');
    include_once('source/config.php');
    $output = [];
    
    try 
    {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // Make a sql query
        $sql = "SELECT * FROM upcoming_batches";

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
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Phoenix Tutorials || Dashboard </title>

    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- Datatables -->
    <link href="vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="build/css/custom.min.css" rel="stylesheet">

    <style type="text/css">
        .dataTables_filter {
            width: auto !important;
        }

        .img-thumbs
        {
          width: 50px;
          height: 50px;
        }

        table tbody tr td{
          vertical-align: middle !important;
          text-transform: capitalize;
        }

        .check-text
        {
          position: relative;
          left: -10px;
          z-index: 1;
          pointer-events: none;
          top: 20px;
          text-align: center;
        }

        .bottom-bar
        {
          position: fixed;
          bottom: 0;
          left: 0;
          right: 0;
          background-color: rgba(0,0,0,0.7);
          padding: 5px;
          display: none;
        }

        .pagination>.active>a
        {
          z-index: 0 !important;
        }
        @media only screen and (min-width:768px){ 
          .notification{
          position: relative !important;
          /* top: -160px; */
          bottom: 437px !important;
          left: 41% !important;
        }
      }
      @media only screen and (min-width:768px){ 
          .notification{
          position: relative !important;
          /* top: -160px; */
          bottom: 437px !important;
          left: 41% !important;
        }
      }
     @media only screen and (max-width:375px){ 
          .notification{
          position: relative !important;
          /* top: -160px; */
          bottom:563px !important;
          left: 24% !important;
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
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Upcoming Batches</small></h2>
                    <ul class="nav navbar-right">
                        <a href="batch_add.php" class="btn btn-primary "><i class="fa fa-plus"> New Batch</i></a>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content table-responsive">
                    <p class="text-muted font-13 m-b-30">

                    </p>

                    <table id="datatable-checkbox" class="table table-striped table-bordered bulk_action table-responsive">
                      <thead class="table-responsive">
                        <tr>
                          <th></th>
                          <th>Course Name</th>

                          <th>batch</th>
                          <th>Start Date</th>
                          <th>End Date</th>
                          <th>Duration</th>
                          <!-- <th>Day's</th> -->
                          <th>Time</th>
                          <!-- <th>Location</th> -->
                          <th>Action</th>
                        </tr>
                      </thead>


                      <tbody class="responsive">
                        <?php
                          $countt = 1;
                         
                          foreach ($output as $row) {

                          
                            echo '<tr>
                                    <td><div class="check-text">'.$countt.'</div><input type="checkbox" class="flat" ejaz-row="'.$row['id'].'" name="table_records"></td>
                                    <td>'.$row['category'].'</td>
                                    <td>'.$row['batch'].'</td>
                                    <td>'.$row['start_date'].'</td>
                                    <td>'.$row['end_date'].'</td>
                                    <td>'.$row['duration'].'</td>
                                    <td>'.$row['day_time'].'</td>
                                    <td>
                                      <a href="batch_update.php?id='.$row['id'].'" title="Update"><span class="glyphicon glyphicon-pencil"></span></a>
                                      <a href="source/batch_delete.php?id='.$row['id'].'" onclick = "return confirm(\'Do you really want to Delete?\')" title="delete"><span class="glyphicon glyphicon-trash"></span></a>
                                    </td>
                                  </tr>
                                  ';
                            $countt++;
                          }

                         ?>                       
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div class="bottom-bar"><a href="#" class="btn btn-danger btn-smy pull-right">Delete</a></div>
              <a class="btn btn-app notification" >
                <span class="badge bg-red" ><?=$row['id']?></span>
                <i class="fa fa-bullhorn"></i>Batches
              </a>
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
    <!-- iCheck -->
    <script src="vendors/iCheck/icheck.min.js"></script>
    <!-- Datatables -->
    <script src="vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="build/js/custom.js"></script>

    <!-- Datatables -->
    <script>
      $(document).ready(function() {

        var selected_rows = [];
        var $datatable = $('#datatable-checkbox');

        $datatable.dataTable({
          'order': [[ 1, 'asc' ]],
          'columnDefs': [
            { orderable: false, targets: [0] }
          ]
        });
        $datatable.on('draw.dt', function() {
          $('input').iCheck({
            checkboxClass: 'icheckbox_flat-green'
          });
        });


        $datatable.on('ifChanged', 'input', function(event){
            if(event.target.checked == true)
            {
                console.log('checked : ' + $(this).attr('ejaz-row'));
                selected_rows.push($(this).attr('ejaz-row'));
                $(this).parent('div').siblings('div').css('visibility', 'hidden');
            }
            else
            {
                console.log('unchecked : ' + $(this).attr('ejaz-row'));
                selected_rows.splice(selected_rows.indexOf($(this).attr('ejaz-row')), 1);
                $(this).parent('div').siblings('div').css('visibility', 'visible');
            }

            if(selected_rows.length > 0)
            {
                $('.bottom-bar').html("<a href='source/batch_delete.php?id="+selected_rows.join()+"' onclick = \"return confirm('Do you really want to Delete?')\" class='btn btn-danger btn-smy pull-right'>Delete " + selected_rows.length + " selected</a>");
                $('.bottom-bar').show('fade');
            }
            else
            {
                $('.bottom-bar').html("<a href='source/batch_delete.php?id="+selected_rows.join()+"' onclick = \"return confirm('Do you really want to Delete?')\" class='btn btn-danger btn-smy pull-right'>Delete " + selected_rows.length + " selected</a>");
                $('.bottom-bar').hide('fade');
            }

            console.log(selected_rows);


        });

      });
    </script>
    <!-- /Datatables -->
  </body>
</html>
