<?php include "config.php";
if(isset($_GET[days]))
{
    
}
else{echo "<script>location.href='index.php?days=7'</script>"; }
$your_ap_team=count_ap_count($_SESSION[ap_id]);
$count_your_dra_team=count_own_dra_team($_SESSION[ap_id]);
$your_direct_costumer=count_total_costumer($_SESSION[ap_id]);
$your_ap_team_costumer=count_ap_team_costumer($_SESSION[ap_id])
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>Dashboard || EIBO</title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
   <?php 
    if($_GET['days']==7)
	  {
	      $date_1=date ("Y-m-d", strtotime("-1 day", strtotime($date)));
	  $date_2=date ("Y-m-d", strtotime("-2 day", strtotime($date)));
	  $date_3=date ("Y-m-d", strtotime("-3 day", strtotime($date)));
	  $date_4=date ("Y-m-d", strtotime("-4 day", strtotime($date)));
	  $date_5=date ("Y-m-d", strtotime("-5 day", strtotime($date)));
	  $date_6=date ("Y-m-d", strtotime("-6 day", strtotime($date)));
	  $date_activity_array=array(

		  array($date,own_business_on_date($_SESSION['ap_id'],$date)),

		  array($date_1,own_business_on_date($_SESSION['ap_id'],$date_1)),

		  array($date_2,own_business_on_date($_SESSION['ap_id'],$date_2)),

		  array($date_3,own_business_on_date($_SESSION['ap_id'],$date_3)),

		  array($date_4,own_business_on_date($_SESSION['ap_id'],$date_4)),

		  array($date_5,own_business_on_date($_SESSION['ap_id'],$date_5)),

		  array($date_6,own_business_on_date($_SESSION['ap_id'],$date_6)),
	  );

	  ?>

	  <script>
window.onload = function () {
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,  
	title:{
		text: "Last 7 Day Business"
	},
	axisY: {
		title: "Business",
		valueFormatString: "#0.",
		suffix: "",
		stripLines: [{
			value: <?php echo ($date_activity_array[0][1]+$date_activity_array[1][1]+$date_activity_array[2][1]+$date_activity_array[3][1]+$date_activity_array[4][1]+$date_activity_array[5][1]+$date_activity_array[6][1])/7;?>,
			label: "Average"
		}]
	},
	data: [{
		yValueFormatString: "### Activity",
		xValueFormatString: "DD-MM-YYYY",
		type: "splineArea",
		dataPoints: [
			{ x: new Date(20<?php echo date("y",strtotime($date_activity_array[0][0]));?>, <?php echo date("m",strtotime($date_activity_array[0][0]));?>, <?php echo date("d",strtotime($date_activity_array[0][0]));?>), y: <?php echo $date_activity_array[0][1];?> },
			 
			{ x: new Date(20<?php echo date("y",strtotime($date_activity_array[1][0]));?>, <?php echo date("m",strtotime($date_activity_array[1][0]));?>, <?php echo date("d",strtotime($date_activity_array[1][0]));?>), y: <?php echo $date_activity_array[1][1];?> },
			
			{ x: new Date(20<?php echo date("y",strtotime($date_activity_array[2][0]));?>, <?php echo date("m",strtotime($date_activity_array[2][0]));?>, <?php echo date("d",strtotime($date_activity_array[2][0]));?>), y: <?php echo $date_activity_array[2][1];?> },
			 
			{ x: new Date(20<?php echo date("y",strtotime($date_activity_array[3][0]));?>, <?php echo date("m",strtotime($date_activity_array[3][0]));?>, <?php echo date("d",strtotime($date_activity_array[3][0]));?>), y: <?php echo $date_activity_array[3][1];?> },
			
			{ x: new Date(20<?php echo date("y",strtotime($date_activity_array[4][0]));?>, <?php echo date("m",strtotime($date_activity_array[4][0]));?>, <?php echo date("d",strtotime($date_activity_array[4][0]));?>), y: <?php echo $date_activity_array[4][1];?> },
			 
			{ x: new Date(20<?php echo date("y",strtotime($date_activity_array[5][0]));?>, <?php echo date("m",strtotime($date_activity_array[5][0]));?>, <?php echo date("d",strtotime($date_activity_array[5][0]));?>), y: <?php echo $date_activity_array[5][1];?> },
			
			{ x: new Date(20<?php echo date("y",strtotime($date_activity_array[6][0]));?>, <?php echo date("m",strtotime($date_activity_array[6][0]));?>, <?php echo date("d",strtotime($date_activity_array[6][0]));?>), y: <?php echo $date_activity_array[6][1];?> },
		]

	}]

});

chart.render();
}
</script>
 <?php }

 else{ network_activity_graph($_GET[days]);}
 ?>
    
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <!-- sidebar menu -->
            <?php include "include/sidebar.php";?>
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
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.php">
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
          <!-- top tiles -->
          <div class="row tile_count">
            <div class="animated flipInY col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <a href="withdrawl_wallet.php"><div class="tile-stats">
                  <div class="icon"><i class="fa fa-money"></i></div>
                  <div class="count"><i class="fa fa-inr"></i> <?php echo $ap_detail['wallet']+0;?></div>
                  <h3>Withdrawal Wallet</h3>
                </div></a>
            </div>
            <div class="animated flipInY col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <a href="hold_wallet_ledger.php"><div class="tile-stats">
                  <div class="icon"><i class="fa fa-money"></i></div>
                  <div class="count"><i class="fa fa-inr"></i> <?php echo $ap_detail['hold_wallet']+0;?></div>
                  <h3>Hold Wallet</h3>
                </div></a>
            </div>
          </div>
          <div class="row" style="display: block;" >
          <div class="tile_count">
            <div class="col-md-2 col-sm-4  tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Your AP Team</span>
              <div class="count"><?php echo $your_ap_team;?></div>
              
            </div>
            <div class="col-md-2 col-sm-4  tile_stats_count">
              <span class="count_top"><i class="fa fa-clock-o"></i> Your DRA Team</span>
              <div class="count"><?php echo $count_your_dra_team;?></div>
              
            </div>
            <div class="col-md-2 col-sm-4  tile_stats_count">
              <span class="count_top"><i class="fa fa-clock-o"></i> Your Costumer</span>
              <div class="count"><?php echo $your_direct_costumer;?></div>
             
            </div>
            <div class="col-md-2 col-sm-4  tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Your AP team Costumer</span>
              <div class="count green"><?php echo $your_ap_team_costumer;?></div>
            </div>
            <div class="col-md-2 col-sm-4  tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> This Month Business</span>
              <div class="count"><?php echo this_month_business($_SESSION[ap_id]);?></div>
            </div>
            <div class="col-md-2 col-sm-4  tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> This Month Commission</span>
              <div class="count"><?php echo $ap_detail[hold_wallet];?></div>
            </div>
          </div>
        </div>
          <!-- /top tiles -->

          <div class="row">
            <div class="col-md-12 col-sm-12 ">
              <div class="dashboard_graph">

                <div class="row x_title">
                  <div class="col-md-6">
                    <h3>Network Activities <small>Graph title sub-title</small></h3>
                  </div>
                  <div class="col-md-6">
                    <div id="reportrange" class="pull-right" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
                      <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                      <span>December 30, 2014 - January 28, 2015</span> <b class="caret"></b>
                    </div>
                  </div>
                </div>
                <div class="col-md-9 col-sm-9 ">
                  <div id="chartContainer" style="height: 370px; width: 100%;"></div>
					  <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
                </div>
                <?php
				   /* $huutee="SELECT * FROM `target_per_day` WHERE `e_id`='$_SESSION[ibo_id]' ORDER BY `tpd_id` DESC";
	  				$queryuee=mysqli_query($con,$huutee);
				  	$rotuee=mysqli_fetch_assoc($queryuee);
				    $stp_t_activity=find_downline_activity($_SESSION[ibo_id],$date,"STP")+find_own_activity($_SESSION[ibo_id],$date,"STP");
				    $stp_percentage=$stp_t_activity*100/$rotuee[stp_target];
				    $f_up_t_activity=find_downline_activity($_SESSION[ibo_id],$date,"F_UP")+find_own_activity($_SESSION[ibo_id],$date,"F_UP");
				    $f_up_percentage=$f_up_t_activity*100/$rotuee[follow_up_target];
				    $jnd_t_activity=find_downline_activity($_SESSION[ibo_id],$date,"JND")+find_own_activity($_SESSION[ibo_id],$date,"JND");
				    $jnd_percentage=$jnd_t_activity*100/$rotuee[follow_up_target];*/
				?>
                <div class="col-md-3 col-sm-3  bg-white">
                  <div class="x_title">
                    <h2>Today Report According to your target</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="col-md-12 col-sm-12 ">
                    <div>
                      <p>Plan Shown <?php echo $stp_percentage."/".$rotuee[stp_target];?></p>
                      <div class="">
                        <div class="progress progress_sm" style="width: 100%;">
                          <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="<?php echo $stp_percentage;?>"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12 col-sm-12 ">
                    <div>
                      <p>Follow UP <?php echo $f_up_percentage."/".$rotuee[follow_up_target];?></p>
                      <div class="">
                        <div class="progress progress_sm" style="width: 100%;">
                          <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="<?php echo $f_up_percentage;?>"></div>
                        </div>
                      </div>
                    </div>
                     <div>
                      <p>Joining <?php echo $jnd_percentage."/".$rotuee[joining_target];?></p>
                      <div class="">
                        <div class="progress progress_sm" style="width: 100%;">
                          <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="<?php echo $jnd_percentage;?>"></div>
                        </div>
                      </div>
                    </div>
                    
                  </div>

                </div>

                <div class="clearfix"></div>
              </div>
            </div>

          </div>
          <br />

          <div class="row">
            <div class="col-md-4 col-sm-4 ">
              <div class="x_panel tile fixed_height_320">
                <div class="x_title">
                  <h2>Daily Target Achievment</h2>
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
                  <h4>Here today activity tracking report are shown here</h4>
                  <div class="widget_summary">
                    <div class="w_left w_25">
                      <span>Show The Plan</span>
                    </div>
                    <div class="w_center w_55">
                      <div class="progress">
                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $stp_percentage;?>%;">
                          <span class="sr-only"><?php echo $stp_percentage;?>% Complete</span>
                        </div>
                      </div>
                    </div>
                    <div class="w_right w_20">
                      <span><?php echo $stp_t_activity;?>/<?php echo $rotuee[stp_target];?></span>
                    </div>
                    <div class="clearfix"></div>
                  </div>

                  <div class="widget_summary">
                    <div class="w_left w_25">
                      <span>Follow Up</span>
                    </div>
                    <div class="w_center w_55">
                      <div class="progress">
                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 45%;">
                          <span class="sr-only">60% Complete</span>
                        </div>
                      </div>
                    </div>
                    <div class="w_right w_20">
                      <span>53k</span>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="widget_summary">
                    <div class="w_left w_25">
                      <span>Joining</span>
                    </div>
                    <div class="w_center w_55">
                      <div class="progress">
                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 25%;">
                          <span class="sr-only">60% Complete</span>
                        </div>
                      </div>
                    </div>
                    <div class="w_right w_20">
                      <span>23k</span>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  
                

                </div>
              </div>
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
    <!-- Chart.js -->
    <script src="../vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="../vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="../vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="../vendors/Flot/jquery.flot.js"></script>
    <script src="../vendors/Flot/jquery.flot.pie.js"></script>
    <script src="../vendors/Flot/jquery.flot.time.js"></script>
    <script src="../vendors/Flot/jquery.flot.stack.js"></script>
    <script src="../vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="../vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="../vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="../vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="../vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="../vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="../vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="../vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
	
  </body>
</html>
