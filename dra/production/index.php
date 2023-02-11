<?php include "config.php";
$total_costumer=count_total_dra_costumer($_SESSION[dra_id]);
$active_costumer=count_active_dra_costumer($_SESSION[dra_id]);
$deactive_costumer=count_deactive_dra_costumer($_SESSION[dra_id]);
$never_active_costumer=count_nactive_dra_costumer($_SESSION[dra_id]);
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
    <title>Dashboard | EIBO</title>
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
        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
          <div class="row">
          
        <div class="row tile_count">
            <div class="animated flipInY col-lg-4 col-md-4 col-sm-6 col-xs-6">
                <a href="withdrawl_wallet.php"><div class="tile-stats">
                  <div class="icon"><i class="fa fa-money"></i></div>
                  <div class="count"><i class="fa fa-inr"></i> <?php echo $dra_detail['dra_wallet'];?></div>
                  <h3>Withdrawal Wallet</h3>
                </div></a>
            </div>
            <div class="animated flipInY col-lg-4 col-md-4 col-sm-6 col-xs-6">
                <a href="withdrawl_wallet.php"><div class="tile-stats">
                  <div class="icon"><i class="fa fa-money"></i></div>
                  <div class="count"><i class="fa fa-inr"></i> <?php echo $dra_detail['dra_hold_wallet'];?></div>
                  <h3>Hold Wallet</h3>
                </div></a>
            </div>
            <div class="animated flipInY col-lg-4 col-md-4 col-sm-6 col-xs-6">
                <a href="withdrawl_wallet.php"><div class="tile-stats">
                  <div class="icon"><i class="fa fa-money"></i></div>
                  <div class="count"><i class="fa fa-user"></i> <?php echo $total_costumer;?></div>
                  <h3>My Total Costumer</h3>
                </div></a>
            </div>
            <div class="animated flipInY col-lg-4 col-md-4 col-sm-6 col-xs-6">
                <a href="withdrawl_wallet.php"><div class="tile-stats">
                  <div class="icon"><i class="fa fa-money"></i></div>
                  <div class="count"><i class="fa fa-user"></i> <?php echo $active_costumer;?></div>
                  <h3>My Active Costumer</h3>
                </div></a>
            </div>
            <div class="animated flipInY col-lg-4 col-md-4 col-sm-6 col-xs-6">
                <a href="withdrawl_wallet.php"><div class="tile-stats">
                  <div class="icon"><i class="fa fa-money"></i></div>
                  <div class="count"><i class="fa fa-user"></i> <?php echo $deactive_costumer;?></div>
                  <h3>My Deactive Costumer</h3>
                </div></a>
            </div>
            <div class="animated flipInY col-lg-4 col-md-4 col-sm-6 col-xs-6">
                <a href="withdrawl_wallet.php"><div class="tile-stats">
                  <div class="icon"><i class="fa fa-money"></i></div>
                  <div class="count"><i class="fa fa-user"></i> <?php echo $never_active_costumer;?></div>
                  <h3>Never Activate Costumer</h3>
                </div></a>
            </div>
            <div class="animated flipInY col-lg-4 col-md-4 col-sm-6 col-xs-6">
                <a href="withdrawl_wallet.php"><div class="tile-stats">
                  <div class="icon"><i class="fa fa-money"></i></div>
                  <div class="count"><i class="fa fa-user"></i> <?php echo this_month_business($_SESSION[dra_id]);?></div>
                  <h3>This Month Business</h3>
                </div></a>
            </div>
        </div>
        </div>
          <!-- /top tiles -->
          <br />
          <div class="row">
            <div class="col-md-4 col-sm-4 ">
              <div class="x_panel tile">
                <div class="x_title">
                  <h2>Link For Costumer </h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <h4>
                    http://eibo.in/ibo_panel/production/signup/index.php?dra_id=<?php echo $_SESSION[dra_id];?>
                  </h4>
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