<?php include "config.php";?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Commission Detail | EIBO </title>

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

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
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
                <h3>My Commission</h3>
			  </div>
            </div>

            <div class="clearfix"></div>
            <div class="row tile_count">
                <div class="animated flipInY col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <a href="withdrawl_wallet.php"><div class="tile-stats">
                      <div class="icon"><i class="fa fa-money"></i></div>
                      <div class="count"><i class="fa fa-inr"></i> <?php echo this_month_business($_SESSION[ap_id]);?></div>
                      <h3>This Month Business</h3>
                    </div></a>
                </div>
                <div class="animated flipInY col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <a href="withdrawl_wallet.php"><div class="tile-stats">
                      <div class="icon"><i class="fa fa-money"></i></div>
                      <div class="count"><i class="fa fa-inr"></i> <?php echo this_month_commission($_SESSION[ap_id]);?></div>
                      <h3>This Month Commission</h3>
                    </div></a>
                </div>
                <?php 
                $tb=0;
                $tc=0;
                $dsf="SELECT * FROM `ap_commission` WHERE `ap_id`='$_SESSION[ap_id]' ORDER BY `apc_id` DESC";
						$query=$con->query($dsf);
						while($rfgs=mysqli_fetch_assoc($query)){
						    $tb=$tb+$rfgs[amount];
						    $tc=$tc+$rfgs[c_amount];
						}
						?>
                <div class="animated flipInY col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <a href="withdrawl_wallet.php"><div class="tile-stats">
                      <div class="icon"><i class="fa fa-money"></i></div>
                      <div class="count"><i class="fa fa-inr"></i> <?php echo $tb;?></div>
                      <h3>Total Business</h3>
                    </div></a>
                </div>
                <div class="animated flipInY col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <a href="withdrawl_wallet.php"><div class="tile-stats">
                      <div class="icon"><i class="fa fa-money"></i></div>
                      <div class="count"><i class="fa fa-inr"></i> <?php echo $tc;?></div>
                      <h3>Total Commission</h3>
                    </div></a>
                </div>
            </div>
            <div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Commission Detail<small></small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a class="dropdown-item" href="#">Settings 1</a>
                          </li>
                          <li><a class="dropdown-item" href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                   <div class="card-box table-responsive">
                    <p class="text-muted font-13 m-b-30">
                     Your Subscription Detail Are shown.
                    </p>
                   <table id="datatable" class="table table-striped table-bordered">
                   	<thead>
                   		<tr>
                   			<th>#</th>
                   			<th>Name ( ID )</th>
                   			<th>Date / Time</th>
                   			<th>Billing Amount</th>
                   			<th>Percentage</th>
                   			<th>Commission</th>  
                           			
                   		</tr>
                   	</thead>
                   	<tbody>
                <?php 
						$a=0;
						$dsfe="SELECT * FROM `ap_commission` WHERE `ap_id`='$_SESSION[ap_id]' ORDER BY `apc_id` DESC";
						$querye=$con->query($dsfe);
						while($rfg=mysqli_fetch_assoc($querye))
						{
							$sd="SELECT * FROM `employee` WHERE `e_id`='$rfg[s_e_id]'";
							$dcv=$con->query($sd);
							$svb=mysqli_fetch_assoc($dcv);
							$a++;
							?>
							<tr>
							<td><?php echo $a;?></td>
							<td><?php echo $svb[name]." ( ".$svb[e_id]." ) ";?></td>
							<td><?php echo $rfg[date]." / ".$rfg[time];?></td>
							<td><?php echo $rfg[amount];?></td>
							<td><?php echo $rfg[percentage];?>%</td>
							<td><?php echo $rfg[c_amount];?></td>
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
    
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
  </body>
</html>
