<?php include "config.php";?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Team Management | EIBO</title>
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
<?php
    $axx="SELECT * FROM `ap` WHERE `ap_id`='$_GET[ap_id]';";
    $xa=$con->query($axx);
    $ap_d=mysqli_fetch_assoc($xa);
    
    $cccc="SELECT photo FROM `ap_kyc` WHERE `ap_id`='$_GET[ap_id]' AND `kyc_for`='photo' AND `status`='C';";
    $sssss=$con->query($cccc);
    if($sssss->num_rows>0)
    {
    $ap_photo=mysqli_fetch_assoc($sssss);
    $ap_pho="photo/".$ap_photo['photo'].".jpg";
    }
    else{ $ap_pho="images/user.png"; }
?>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>AP Team</h3>
			  </div>
            </div>
            <div class="clearfix"></div>
                <div class="row">
                     <div class="col-md-3   widget widget_tally_box">
                        <div class="x_panel">
                          <div class="x_content">

                            <div class="flex">
                              <ul class="list-inline widget_profile_box">
                                  <li>
                                    &nbsp;
                                </li>
                                <li>
                                  <img src="<?php echo $ap_pho;?>" alt="..." class="img-circle profile_img">
                                </li>
                                <li>
                                     &nbsp;
                                </li>
                              </ul>
                            </div>

                            <h3 class="name"><?php echo $ap_d['name'];?></h3>
                            <h4 class="name">7869470415</h4>
                            <h4 class="name">Gwalior (Madhya Pradesh)</h4>

                        
                          </div>
                        </div>
                      </div>
            </div>
            <div class="row">
              <div class="col-md-6 col-sm-6 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Direct Sponser AP List<small></small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-wrench"></i></a>
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
                     Their team are shown here
                    </p>
                    
                   <table id="datatable" class="table table-striped table-bordered">
                   	<thead>
                   		<tr>
                   			<th>#</th>
                   			<th>Name (ID)</th>
							<th>Mobile</th>
                  			<th>City (State)</th>
                   			<th>Their DRA</th>
                   			<th>Their Costumer</th>
                   		</tr>
                   	</thead>
                   	<tbody>
                <?php 
                
						$dsfc="SELECT * FROM `ap` WHERE `s_ap_id`='$_GET[ap_id]';";
						$queryc=$con->query($dsfc);
						while($rfgc=mysqli_fetch_assoc($queryc))
						{
							$a++;
							?>
							<tr>
								<td><?php echo $a;?></td>
								<td><?php echo $rfgc[name]." (".$rfgc[ap_id].")";?></td>
								<td><?php echo $rfgc[mobile];?></td>
								<td><?php echo $rfgc[city]."(".$rfgc[state].")";?></td>
								<td><?php echo $rfgc[status];?></td>
								<td><?php echo count_total_costumer($rfgc[ap_id]);?></td>
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
            
              <div class="col-md-6 col-sm-6 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Costumer List<small></small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-wrench"></i></a>
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
                Their Costumer List Are Shown
                    </p>
                    
                   <table id="datatable-fixed-header" class="table table-striped table-bordered">
                   	<thead>
                   		<tr>
                   			<th>#</th>
                   			<th>Name (ID)</th>
                  			<th>State</th>
                  			<th>Status</th>
                   		</tr>
                   	</thead>
                   	<tbody>
                <?php 
                
						$dsfc="SELECT * FROM `employee` WHERE `ap_id`='$_GET[ap_id]';";
						$queryc=$con->query($dsfc);
						while($rfgc=mysqli_fetch_assoc($queryc))
						{
							$a++;
							?>
							<tr>
								<td><?php echo $a;?></td>
								<td><?php echo $rfgc[name]." (".$rfgc[ap_id].")";?></td>
								
								<td><?php echo $rfgc[state];?></td>
								<td><?php echo $rfgc[status];?></td>
								
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
            <div class="row">
            <div class="col-md-6 col-sm-6 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>DRA List<small></small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-wrench"></i></a>
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
                Their DRA List Are Shown
                    </p>
                    
                   <table id="datatable-fixed-header" class="table table-striped table-bordered">
                   	<thead>
                   		<tr>
                   			<th>#</th>
                   			<th>Name (ID)</th>
                  			<th>State</th>
                  			<th>Status</th>
                   		</tr>
                   	</thead>
                   	<tbody>
                <?php 
                
						$dsfc="SELECT * FROM `employee` WHERE `s_ap_id`='$_GET[ap_id]' AND `dra_status`='active';";
						$queryc=$con->query($dsfc);
						while($rfgc=mysqli_fetch_assoc($queryc))
						{
							$a++;
							?>
							<tr>
								<td><?php echo $a;?></td>
								<td><?php echo $rfgc[name]." (".$rfgc[ap_id].")";?></td>
								
								<td><?php echo $rfgc[state];?></td>
								<td><?php echo $rfgc[status];?></td>
								
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
