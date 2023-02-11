<?php include "config.php";?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Team Management | Networker asia </title>

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
	<!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- bootstrap-datetimepicker -->
    <link href="../vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
    <script>
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,  
	title:{
		text: "Last 7 Day Activity"
	},
	axisY: {
		title: "Activity",
		valueFormatString: "#0.",
		suffix: "",
		stripLines: [{
			value: 100,
			label: "Average"
		}]
	},
	data: [{
		yValueFormatString: "### Activity",
		xValueFormatString: "DD-MM-YYYY",
		type: "spline",
		dataPoints: [
			<?php 
			$t=array();
			$dfg="SELECT * FROM `master_data_record_contact_list` WHERE `e_id`='$_GET[e_id]'";
				  $sels=$con->query($dfg);
				  while($reddx=mysqli_fetch_assoc($sels))
				  {
					  $t[]=$reddx[date];
					  //echo  $reddx[date];
				  }
			$datecd = date ("Y-m-d", strtotime("-7 day", strtotime($date)));
	//echo $datecd;
	$end_date =date('Y-m-d');
	//echo $end_date;
   
   
	while (strtotime($datecd) <= strtotime($end_date)) {
	    
	$fg=0;
	
		
		for($x=0;$x<count($t);$x++)
	  {
	  if($t[$x]==$datecd){
			$fg++;}
		}
			$mm=date("m",strtotime($datecd));
		$dd=date("d",strtotime($datecd));
		$yy=date("y",strtotime($datecd));
		echo "{ x: new Date(20".$yy.", ".$mm.", ".$dd."), y: $fg },\n";
		$datecd = date ("Y-m-d", strtotime("+1 day", strtotime($datecd)));
	}
					  
			?>
					 
			
			
			
		]
	}]
});
chart.render();

}
</script>
  </head>

  <body class="nav-md">
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
                <h3>User Profile</h3>
              </div>
            </div>
            <?php
			  $e_id_ed="SELECT * FROM `employee` WHERE `e_id`='$_GET[e_id]'";
			  $asasas=$con->query($e_id_ed);
			  $e_info_id=mysqli_fetch_assoc($asasas);
			  
			  ?>
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>User Report <small>Activity report</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Settings 1</a>
                            <a class="dropdown-item" href="#">Settings 2</a>
                          </div>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="col-md-3 col-sm-3  profile_left">
                      <div class="profile_img">
                        <div id="crop-avatar">
                          <!-- Current avatar -->
                          <?php
							if($e_info_id[profile_photo]!="")
							{$photo="profile_photos/$e_info_id[e_id].jpg";}
							else{$photo="profile_photos/default_profile.png";}
							?>
                          <img class="img-responsive avatar-view" src="<?php echo $photo;?>" width="100%" height="350" alt="Profile Photo" title="Change the Profile Photo">
                        </div>
                      </div>
                      <h3><?php echo $e_info_id[name];?></h3>

                      <ul class="list-unstyled user_data">
                        <li><i class="fa fa-map-marker user-profile-icon"></i> <?php echo $e_info_id[addreass];?>, <?php echo $e_info_id[city];?>, <?php echo $e_info_id[state];?>
                        </li>

                        <li>
                          <i class="fa user-profile-icon fa-phone"></i> <?php echo $e_info_id[mobile];?>
                        </li>
                      </ul>
					 <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">View More Details</button>
                     <a href="create_dra.php"><button type="button" class="btn btn-primary">Create Dra</button></a>
                     <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title" id="myModalLabel">Detail View</h4>
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                          </button>
                        </div>
                        <div class="modal-body">                        
                          <table class="table table-striped">
                          	<tr><th>Name</th><td><?php echo $e_info_id[name];?></td></tr>
                          	<tr><th>Mobile</th><td><?php echo $e_info_id[mobile];?></td></tr>
                          	<tr><th>Alternative Mobile</th><td><?php echo $e_info_id[a_mobile];?></td></tr>
                          	<tr><th>SEX</th><td><?php echo $e_info_id[sex];?></td></tr>
                          	<tr><th>Addreass</th><td><?php echo $e_info_id[addreass];?></td></tr>
                          	<tr><th>City (State)</th><td><?php echo $e_info_id[city]."(".$e_info_id[state].")";?></td></tr>
                          	<tr><th>Last Active</th><td><?php echo $e_info_id[last_active_date]."/".$e_info_id[last_active_time];?></td></tr>
                          </table>
                          
                      </div>
                    </div>
                  </div>
						</div>
                   
                    
						
                     </div>
                    <div class="col-md-9 col-sm-9 ">

                      <div class="profile_title">
                        <div class="col-md-6">
                          <h2>User Activity Report</h2>
                        </div>
                        
                      </div>
					
					
                      <!-- start of user-activity-graph -->
                      <div id="chartContainer" style="height: 370px; width: 100%;"></div>
					  <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
                      <!-- end of user-activity-graph -->
                      <br />
					</div>
				  </div>
                   
                    <div class="x_content">
                     <div class="col-md-3 col-sm-3  profile_left">
                     <hr>
                      <!-- start skills -->
                      <h4>This Month Activity Details And Their Targets</h4>
                      <a href="costumer_team_detail.php?e_id=<?php echo $_GET[e_id];?>&step=1" class="btn btn-info form-control">Daily Working Report</a>
                      <a href="costumer_team_detail.php?e_id=<?php echo $_GET[e_id];?>&step=2" class="btn btn-info form-control">Their Contact List</a>
                      <a href="costumer_team_detail.php?e_id=<?php echo $_GET[e_id];?>&step=3" class="btn btn-info form-control">Total Activity Report</a>
                      
                      
                      
                      <!-- end of skills -->

                    </div>
                    <div class="col-md-9 col-sm-9 ">
<hr>
                     
                      <?php
                      if($_GET[step]== 1)
					  {daily_work_sheet_display($_GET[e_id]);}
					  if($_GET[step]== 2){team_contact_list($_GET[e_id]);}?>
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
     <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap-datetimepicker -->    
    <script src="../vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
    
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
  </body>
</html>
