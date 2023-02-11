<?php include "config.php";?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>AP Profiles | EIBO </title>

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
                <h3>Referal Status</h3>
			  </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-6 col-sm-6 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>AP Profiles <small></small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                   
                   <?php 
                   $dsf="SELECT * FROM `ap` WHERE `ap_id`='$_GET[ap_id]';";
                   echo $dsf;
				    $query=$con->query($dsf);
				    $ap=mysqli_fetch_assoc($query)or die("query Fail");
				    ?>
                   
                   <div class="card-box table-responsive">
                    
                   <table class="table table-striped table-bordered">
                   	<tr><th>Name</th><td><?php echo $ap[name];?></td></tr>
                   	<tr><th>Mobile</th><td><?php echo $ap[mobile];?></td></tr>
                   	<tr><th>A Mobile</th><td><?php echo $ap[a_mobile];?></td></tr>
                   	<tr><th>City</th><td><?php echo $ap[city];?></td></tr>
                   	<tr><th>state</th><td><?php echo $ap[state];?></td></tr>
                   	<tr><th>Addreass</th><td><?php echo $ap[addreass];?></td></tr>
                   	<tr><th>D.O.B</th><td><?php echo $ap[dob];?></td></tr>
                   	<tr><th>Date of Joinning</th><td><?php echo $ap[date_of_joining];?></td></tr>
                   	<tr><th>Email ID</th><td><?php echo $ap[email_id];?></td></tr>
                   	
                   </table>
                   
					  </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-sm-6 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>AP KYC Detail <small></small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                   <h2>Adhar Card Detail</h2>
                   <?php 
                   $sx="SELECT * FROM `ap_kyc` WHERE `ap_id`='$_GET[ap_id]' AND `kyc_for`='adhar' AND `status`='C';";
                   $ad_que=$con->query($sx);
                   $adhar=mysqli_fetch_assoc($ad_que);
                   ?>
                   Adhar Card No. <?php echo $adhar[adhar_no];?>
                   <br>
                   Adhar Front Img <a class="btn btn-success" target="_blank" href="../../ap/production/adhar_card_img/<?php echo $adhar[unique_id];?>f.jpg">Front Img</a>
                   <br>
                   Adhar Back Img <a class="btn btn-success" target="_blank" href="../../ap/production/adhar_card_img/<?php echo $adhar[unique_id];?>b.jpg">Back Img</a>
                   
                   
                   
                   
                   
                   
                                       <br />
                                       &nbsp;<br>
                   <h2>PanCard Detail</h2>
                   <?php 
                   $sxw="SELECT * FROM `ap_kyc` WHERE `ap_id`='$_GET[ap_id]' AND `kyc_for`='pan' AND `status`='C';";
                   $pan_que=$con->query($sxw);
                   $pancard=mysqli_fetch_assoc($pan_que);
                   ?>
                   Pan Card No. <?php echo $pancard[pan_no];?>
                   <br>
                   Pan Card Img <a class="btn btn-success" target="_blank" href="../../ap/production/pan_card_img/<?php echo $pancard[unique_id];?>.jpg">Pan Card Img</a>
                   
                 
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
