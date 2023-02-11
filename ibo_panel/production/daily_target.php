<?php include "config.php";
//////////////////////////////////////////////////for updating daily target
daily_targets_update($_SESSION[ibo_id]);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Daily Target | Success youth Network Team </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
	 <!-- Datatables -->
    
    <link href="../vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
    <!-- PNotify -->
    <link href="../vendors/pnotify/dist/pnotify.css" rel="stylesheet">
    <link href="../vendors/pnotify/dist/pnotify.buttons.css" rel="stylesheet">
    <link href="../vendors/pnotify/dist/pnotify.nonblock.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md" onload="<?php echo $script;?>">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            

            <!-- sidebar menu -->
            <?php include "include/sidebar.php";
            ?>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <?php include "include/header.php";?>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Daily Target</h3>
              </div>

              
            </div>

            <div class="clearfix"></div>

            <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Daily Target Report History</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table class="table">
                    <thead>
                    	<th>Date Of starting</th>
                    	<th>STP</th>
                    	<th>Follow Up</th>
                    	<th>Joining</th>
                    	<th></th>
					</thead>
                   <tbody>
                  		<?php
					   $huut="SELECT * FROM `target_per_day` WHERE `e_id`='$_SESSION[ibo_id]' ORDER BY `tpd_id` DESC";
					  $queryu=mysqli_query($con,$huut);
					  $a=0;
					  $rotu=mysqli_fetch_assoc($queryu);
					   ?>
                   		<td><?php echo $rotu[date];?></td>
                   		<td><?php echo $rotu[stp_target];?></td>
                   		<td><?php echo $rotu[follow_up_target];?></td>
                   		<td><?php echo $rotu[joining_target];?></td>
                   		<td><button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Set / Change Daily targets</button></td>
                   </tbody>
                    </table>
                     

                  <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">

                        <div class="modal-header">
                          <h4 class="modal-title" id="myModalLabel">Set Your Daily Targets</h4>
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <h4>You Set your daily targets for big Achievment. this is counted as your personal and your team targets also</h4>
                  <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action="process_daily_targets.php">
    
                      
                     
                       <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Daily STP<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="number" class="form-control" name="daily_stp">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Daily Follow Up<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="number" class="form-control date" name="daily_f_up">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Daily Joining<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                         <input type="number" class="form-control date" name="daily_joining">
                        </div>
                      </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <input type="submit" name="submit_daily_targets" class="btn btn-success">
                        </div>
</form>
                      </div>
                    </div>
                  </div>
                      <br>&nbsp;
                      <br>&nbsp;
                      <br>&nbsp;
                      <h3>Daily Targets Achivement history</h3>
                       <div class="card-box table-responsive">
                   <table id="datatable" class="table table-striped">
                   <thead>
                   <tr>
                   	<th>Sr No.</th>
                   	<th>Date/Time</th>
                   	<th>STP Target</th>
                   	<th>Follow UP Target</th>
                   	<th>Joining Target</th>
                   	<th>complete Meters</th>
                   	
                   </tr>
                   </thead>
                   <tbody>
                    <?php
					  $huut="SELECT * FROM `target_per_day_history` WHERE `e_id`='$_SESSION[ibo_id]' ORDER BY `tpdh_id` DESC";
					  $queryu=mysqli_query($con,$huut);
					  $a=0;
					  while($rotu=mysqli_fetch_assoc($queryu))
					  {
					  $a++;
					?>
						  <tr>
						  	<td><?php echo $a;?></td>
							<td><?php echo $rotu[data_date];?></td>
						  	<td><?php echo $rotu[c_stp]."/".$rotu[t_stp];?></td>
						  	<td><?php echo $rotu[c_follow_up]."/".$rotu[t_f_up];?></td>
						  	<td><?php echo $rotu[c_joined]."/".$rotu[t_joining];?></td>
						  	<td><div class="progress">
                    <div class="progress-bar progress-bar-striped" role="progressbar" style="width: <?php echo $rotu[average_completed_percentage];?>%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"><?php echo $rotu[average_completed_percentage];?>%</div>
                  </div></td>						  	
						  </tr>
						  
						<?php  
					  }
						?>
					   </tbody>
                  
					  </table>
					  </div>
                         
                    

                    </div>
                  </div>
                </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

     
       
       
       
        <!-- footer content -->
       <?php include "include/footer.php";?>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
   <script src="../vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- Datatables -->
    <script src="../vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="../vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="../vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="../vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="../vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="../vendors/jszip/dist/jszip.min.js"></script>
    <script src="../vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="../vendors/pdfmake/build/vfs_fonts.js"></script>
    <!-- PNotify -->
    <script src="../vendors/pnotify/dist/pnotify.js"></script>
    <script src="../vendors/pnotify/dist/pnotify.buttons.js"></script>
    <script src="../vendors/pnotify/dist/pnotify.nonblock.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
  </body>
</html>
