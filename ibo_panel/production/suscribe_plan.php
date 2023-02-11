<?php include "config.php";
if(isset($_POST[vc_code]))
  {
    $rgt="SELECT * FROM `voucher_codes` WHERE `v_code`='$_POST[vc_code]';";
   // echo $rgt;
    $de=$con->query($rgt)or die("Sorry Some Problem Occour");
    $fcm=mysqli_fetch_assoc($de);
    if($de->num_rows!=0)
    {
        if($fcm[bal]>0)
        {
        $v_a=1;
        $script="new PNotify({
                                  title: 'Voucher Code Applied !',
                                  text: 'your Voucher Code Applied Successfully',
                                  type: 'success',
                                  styling: 'bootstrap3'
                              });";
        }
        else{$script="new PNotify({
                                  title: 'Failed!',
                                  text: 'This Code Is Expired Please ask for Diffrent Code',
                                  type: 'eror',
                                  styling: 'bootstrap3'
                              });";
        }
    }else{$v_a=0;
        	$script="new PNotify({
                                  title: 'Failed!',
                                  text: 'Voucher Code not Founded',
                                  type: 'eror',
                                  styling: 'bootstrap3'
                              });";
    }
   // echo $fcm[ap_id]."asd".$_POST[vc_code];
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

    <title>Subscribe Plan | EIBO </title>

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
    <script>
	  function popular_pricing() {
		  var x = document.getElementById("po_month").value;
		  if(x == "1")
			{
				var price = 200;
				var total = 200;
				<?php if($v_a==1)
                              {
                                 $amtg1=200;
                                 
                                ?>
                                 document.getElementById("pod_total").innerHTML = 0;
                                document.getElementById("poda_total").innerHTML = 200;
                           <?php   }
                              ?>
				document.getElementById("po_price").innerHTML = price + "/-";
				document.getElementById("po_total").innerHTML = total;
			}
		  if(x == "3")
			{
				var price = 160;
				var total = 480;
				<?php if($v_a==1)
                              {
                                 $amtg2=480*$fcm['discount_percentage']/100;
                                 $amtgh2=480-$amtg2;
                                ?>
                                var d_amount = <?php echo $amtg2;?>;
                                var t_amount = <?php echo $amtgh2;?>;
                                document.getElementById("pod_total").innerHTML = d_amount;
                                document.getElementById("poda_total").innerHTML = t_amount;
                           <?php   }
                              ?>
				document.getElementById("po_price").innerHTML = price + "/-";
				document.getElementById("po_total").innerHTML = total;
			}
		  if(x == "6")
			{
				var price = 150;
				var total = 900;
				<?php if($v_a==1)
                              {
                                 $amtg3=900*$fcm['discount_percentage']/100;
                                 $amtgh3=900-$amtg3;
                                ?>
                                var d_amount = <?php echo $amtg3;?>;
                                var t_amount = <?php echo $amtgh3;?>;
                                document.getElementById("pod_total").innerHTML = d_amount;
                                document.getElementById("poda_total").innerHTML = t_amount;
                           <?php   }
                              ?>
				document.getElementById("po_price").innerHTML = price + "/-";
				document.getElementById("po_total").innerHTML = total;
			}
		  if(x == "12")
			{
				var price = 140;
				var total = 1680;
				<?php if($v_a==1)
                              {
                                 $amtg4=1680*$fcm['discount_percentage']/100;
                                 $amtgh4=1680-$amtg4;
                                ?>
                                var d_amount = <?php echo $amtg4;?>;
                                var t_amount = <?php echo $amtgh4;?>;
                                document.getElementById("pod_total").innerHTML = d_amount;
                                document.getElementById("poda_total").innerHTML = t_amount;
                           <?php   }
                              ?>
				document.getElementById("po_price").innerHTML = price + "/-";
				document.getElementById("po_total").innerHTML = total;
			}
	  }
		/////////////////////////for basic plan script
	  function basic_pricing() {
		  var x = document.getElementById("bp_month").value;
		  if(x == "1")
			{
				var price = 160;
				var total = 160;
				<?php if($v_a==1)
                              {
                                 
                                ?>
                                var d_amount = 160;
                                var t_amount = 160;
                                document.getElementById("bpod_total").innerHTML = d_amount;
                                document.getElementById("bpoda_total").innerHTML = t_amount;
                           <?php   }
                              ?>
				document.getElementById("bp_price").innerHTML = price + "/-";
				document.getElementById("bp_total").innerHTML = total;
			}
		  if(x == "3")
			{
				var price = 130;
				var total = 390;
				<?php if($v_a==1)
                              {
                                 $amtb1=390*$fcm['discount_percentage']/100;
                                 $amtgb1=390-$amtb1;
                                ?>
                                var d_amount = <?php echo $amtb1;?>;
                                var t_amount = <?php echo $amtgb1;?>;
                                document.getElementById("bpod_total").innerHTML = d_amount;
                                document.getElementById("bpoda_total").innerHTML = t_amount;
                           <?php   }
                              ?>
				document.getElementById("bp_price").innerHTML = price + "/-";
				document.getElementById("bp_total").innerHTML = total;
			}
		  if(x == "6")
			{
				var price = 125;
				var total = 750;
				<?php if($v_a==1)
                              {
                                 $amtb2=750*$fcm['discount_percentage']/100;
                                 $amtgb2=750-$amtb2;
                                ?>
                                var d_amount = <?php echo $amtb2;?>;
                                var t_amount = <?php echo $amtgb2;?>;
                                document.getElementById("bpod_total").innerHTML = d_amount;
                                document.getElementById("bpoda_total").innerHTML = t_amount;
                           <?php   }
                              ?>
				document.getElementById("bp_price").innerHTML = price + "/-";
				document.getElementById("bp_total").innerHTML = total;
			}
		  if(x == "12")
			{
				var price = 120;
				var total = 1440;
				<?php if($v_a==1)
                              {
                                 $amtb3=1440*$fcm['discount_percentage']/100;
                                 $amtgb3=1440-$amtb3;
                                ?>
                                var d_amount = <?php echo $amtb3;?>;
                                var t_amount = <?php echo $amtgb3;?>;
                                document.getElementById("bpod_total").innerHTML = d_amount;
                                document.getElementById("bpoda_total").innerHTML = t_amount;
                           <?php   }
                              ?>
				document.getElementById("bp_price").innerHTML = price + "/-";
				document.getElementById("bp_total").innerHTML = total;
			}
	  }
	
	</script>
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
                <h3>Subscribtion Plan</h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Subscription Plan</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                     
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post">

                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Apply Voucher Code <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="text" maxlength="10" id="first-name" required="required" class="form-control" name="vc_code">
                        </div>
                      </div>
                      
                      <div class="ln_solid"></div>
                      <div class="item form-group">
                        <div class="col-md-6 col-sm-6 offset-md-3">
                         
                          <input type="submit" name="submit_data" class="btn btn-success">
                          
                        </div>
                      </div>
                      </form>
                      

                        <!-- price element -->
                        <div class="col-md-6 col-sm-6  ">
                          <div class="pricing ui-ribbon-container">
                            <div class="ui-ribbon-wrapper">
                              <div class="ui-ribbon">
                                Popular
                              </div>
                            </div>
                            <div class="title">
                              <h2>Premium Plan</h2>
                              <h1 id="po_price">160/-</h1>
                              <span>Monthly</span>
                            </div>
                            <div class="x_content">
                              <div class="">
                                <div class="pricing_features">
                                  <ul class="list-unstyled text-left">
                                    <li><i class="fa fa-check text-success"></i> <strong>Unlimited</strong> Create Contact List</li>
                                    <li><i class="fa fa-check text-success"></i> See All contact List</li>
                                    <li><i class="fa fa-check text-success"></i> <strong>Unlimited</strong> Entring all contact List Activity</li>
                                    <li><i class="fa fa-check text-success"></i> <strong>Unlimited</strong> Working on 5 mlm Basic Point Activity</li>
                                    <li><i class="fa fa-check text-success"></i> Track All your Activity</li>
                                    <li><i class="fa fa-check text-success"></i> <strong>Unlimited</strong> Feed Target Daily / Monthly</li>
                                    <li><i class="fa fa-check text-success"></i> Allowed access to All your <strong>Team</strong></li>
                                    <li><i class="fa fa-check text-success"></i> Allowed access to All your <strong>Team Contact List</strong></li>
                                    <li><i class="fa fa-check text-success"></i> Allowed access to All your <strong>Team Activity</strong></li>
                                    <li><i class="fa fa-check text-success"></i> Allowed access to All your <strong>Team 5 mlm Basic Point</strong></li>
                                    <li><i class="fa fa-check text-success"></i> Allowed access to All your <strong>Team Target</strong></li>
                                    <li><i class="fa fa-check text-success"></i> Allowed access to All your <strong>Team Working Status</strong></li>
                                    <li><i class="fa fa-check text-success"></i> Allowed access to All your <strong>Team Status on Daily / weakly / monthly</strong></li>
                                  </ul>
                                </div>
                              </div>
                              <form action="confirm_billing_asked.php" method="post">
                              <div class="pricing_footer">
                                <select class="form-control" id="po_month" onchange="popular_pricing()" name="month">
                                	<option value="1">1 Month (200/- per month)</option>
                                	<option value="3" selected>3 Month (160/- per month) <strong>Popular</strong></option>
                                	<option value="6">6 Month (150/- per month)</option>
                                	<option value="12">12 Month (140/- per month)</option>
                                </select>
                              </div>
                             
                              <?php if($v_a==1)
                              {?>
                                <div class="pricing_footer">
                                <h4>Amount = <span id="po_total">480</span>/-</h4>
                              </div>
                              <div class="pricing_footer">
                                <h4>Discount = <span id="pod_total"><?php echo $amtg2;?></span>/-</h4>
                              </div>
                              <div class="pricing_footer">
                                <h4>Final Price = <span id="poda_total"><?php echo $amtgh2;?></span>/-</h4>
                              </div>
                              <?php }
                              else{
                              ?>
                              <div class="pricing_footer">
                                <h4>Total Amount = <span id="po_total">480</span>/-</h4>
                              </div>
                              <?php }?>
                              <div class="pricing_footer">
                                   <?php if(isset($_POST['vc_code']))
                            {?>
                                 <input type="hidden" name="vc_code" value="<?php echo $_POST['vc_code'];?>">
                                 <?php }?>
                               <input type="submit" name="pp_submit" class="btn btn-success btn-block" value="Subscribe Now!">
                                
                              </div>
								</form>
                            </div>
                          </div>
                        </div>
                        <!-- price element -->

                        <!-- price element -->
                        <div class="col-md-6 col-sm-6  ">
                          <div class="pricing">
                            <div class="title">
                              <h2>Basic Plan</h2>
                              <h1 id="bp_price">130/-</h1>
                              <span>Monthly</span>
                            </div>
                            <div class="x_content">
                              <div class="">
                                <div class="pricing_features">
                                  <ul class="list-unstyled text-left">
                                    <li><i class="fa fa-check text-success"></i> <strong>Max 50</strong> Create Contact List</li>
                                    <li><i class="fa fa-check text-success"></i> See All contact List</li>
                                    <li><i class="fa fa-check text-success"></i> <strong>Max 100</strong> Entering all contact List Activity</li>
                                    <li><i class="fa fa-check text-success"></i> <strong>Max 100</strong> Working on 5 mlm Basic Point Activity</li>
                                    <li><i class="fa fa-check text-success"></i> Track All your Activity</li>
                                    <li><i class="fa fa-times text-danger"></i> <strong>Unlimited</strong> Feed Target Daily / Monthly</li>
                                    <li><i class="fa fa-times text-danger"></i> Allowed access to All your <strong>Team</strong></li>
                                    <li><i class="fa fa-times text-danger"></i> Allowed access to All your <strong>Team Contact List</strong></li>
                                    <li><i class="fa fa-times text-danger"></i> Allowed access to All your <strong>Team Activity</strong></li>
                                    <li><i class="fa fa-times text-danger"></i> Allowed access to All your <strong>Team 5 mlm Basic Point</strong></li>
                                    <li><i class="fa fa-times text-danger"></i> Allowed access to All your <strong>Team Target</strong></li>
                                    <li><i class="fa fa-times text-danger"></i> Allowed access to All your <strong>Team Working Status</strong></li>
                                    <li><i class="fa fa-times text-danger"></i> Allowed access to All your <strong>Team Status on Daily / weakly / monthly</strong></li>
                                  </ul>
                                </div>
                              </div>
                               <form action="confirm_billing_asked.php" method="post">
                              <div class="pricing_footer">
                                <select class="form-control" id="bp_month" onchange="basic_pricing()" name="month">
                                	<option value="1">1 Month (160/- per month)</option>
                                	<option value="3" selected>3 Month (130/- per month)</option>
                                	<option value="6">6 Month (125/- per month)</option>
                                	<option value="12">12 Month (120/- per month)</option>
                                </select>
                              </div>
                              <?php if($v_a==1)
                              {?>
                                <div class="pricing_footer">
                                <h4>Amount = <span id="bp_total">480</span>/-</h4>
                              </div>
                              <div class="pricing_footer">
                                <h4>Discount = <span id="bpod_total"><?php echo $amtb1;?></span>/-</h4>
                              </div>
                              <div class="pricing_footer">
                                <h4>Final Price = <span id="bpoda_total"><?php echo $amtgb1;?></span>/-</h4>
                              </div>
                              <?php }
                              else{
                              ?>
                              <div class="pricing_footer">
                                <h4>Total Amount = <span id="bp_total">390</span>/-</h4>
                              </div>
                              <?php }?>
                              
                              <div class="pricing_footer">
                                <input type="submit" name="bp_submit" class="btn btn-primary btn-block" value="Subscribe Now!">
                              </div>
								</form>
                            </div>
                          </div>
                        </div>
                        <!-- price element -->

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
