<?php include "config1.php";
////////////////for create unique id
function password_generate($chars) 
{
  $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
  return substr(str_shuffle($data), 0, $chars);
}
for($x=0; $x<100; $x++)
{
    //echo $x;
    $pas=password_generate(10);
    $sqsqqs="SELECT * FROM `ap_registration_txn_id` WHERE `unique_id`='$pas'";
    $qur=$con->query($sqsqqs);
    if(mysqli_num_rows($qur)==0)
    {
        break;
    }
}


////////////////////////////////////////////////
//////////////////////////////////////////////
/////////////////////////////////////////////////////for pay u money code
// Merchant key here as provided by Payu
$MERCHANT_KEY = "laLgRl6c";

// Merchant Salt as provided by Payu
$SALT = "4Kbw0hmna9";

// End point - change to https://secure.payu.in for LIVE mode
$PAYU_BASE_URL = "https://secure.payu.in";

$action = '';

$posted = array();
if(!empty($_POST)) {
    //print_r($_POST);
  foreach($_POST as $key => $value) {    
    $posted[$key] = $value; 
	
  }
}

$formError = 0;

if(empty($posted['txnid'])) {
  // Generate random transaction id
  $txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
} else {
  $txnid = $posted['txnid'];
}
$hash = '';
// Hash Sequence
$hashSequence = "key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5|udf6|udf7|udf8|udf9|udf10";
if(empty($posted['hash']) && sizeof($posted) > 0) {
  if(
          empty($posted['key'])
          || empty($posted['txnid'])
          || empty($posted['amount'])
          || empty($posted['firstname'])
          || empty($posted['email'])
          || empty($posted['phone'])
          || empty($posted['productinfo'])
          || empty($posted['surl'])
          || empty($posted['furl'])
		  || empty($posted['service_provider'])
		  
  ) {
    $formError = 1;
  } else {
    //$posted['productinfo'] = json_encode(json_decode('[{"name":"tutionfee","description":"","value":"500","isRequired":"false"},{"name":"developmentfee","description":"monthly tution fee","value":"1500","isRequired":"false"}]'));
	$hashVarsSeq = explode('|', $hashSequence);
    $hash_string = '';	
	foreach($hashVarsSeq as $hash_var) {
      $hash_string .= isset($posted[$hash_var]) ? $posted[$hash_var] : '';
      $hash_string .= '|';
    }

    $hash_string .= $SALT;


    $hash = strtolower(hash('sha512', $hash_string));
    $action = $PAYU_BASE_URL . '/_payment';
  }
} elseif(!empty($posted['hash'])) {
  $hash = $posted['hash'];
  $action = $PAYU_BASE_URL . '/_payment';
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

    <title>Confirm Billing Detail | EIBO </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- PNotify -->
    <link href="../vendors/pnotify/dist/pnotify.css" rel="stylesheet">
    <link href="../vendors/pnotify/dist/pnotify.buttons.css" rel="stylesheet">
    <link href="../vendors/pnotify/dist/pnotify.nonblock.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
    <script>
    var hash = '<?php echo $hash ?>';
    function submitPayuForm() {
      if(hash == '') {
        return;
      }
      var payuForm = document.forms.payuForm;
      payuForm.submit();
    }
    function validateForm(str) {
        var xmlhttp = new XMLHttpRequest();
    xmlhttp.open("GET", "get_hint.php?q=" + str, true);
    xmlhttp.send();
    }
  </script>
  </head>

  <body class="nav-md" onload="submitPayuForm()">
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
                <h3>Billing Detail</h3>
              </div>
            </div>

            <div class="clearfix"></div>
<?php
            
                $total_price=$ap_detail[entry_fees];
                $tot=($total_price*100)/118;
                $tax=$tot*18/100;
                   ?>
            <div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Confirm Your Billing Detail</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <section class="content invoice">
                      <!-- title row -->
                      <div class="row">
                        <div class="  invoice-header">
                          <h1>
                                          <i class="fa fa-globe"></i> Invoice.
                                          <small class="pull-right">Date: <?php echo $date;?> &nbsp;</small>
                                          <small class="pull-right">Payment Pending &nbsp;</small>
                                      </h1>
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- info row -->
                      <div class="row invoice-info">
                        <div class="col-sm-4 invoice-col">
                          From
                          <address>
                                          <strong>Eibo Services Pvt Ltd.</strong>
                                          <br>D-551 New Suresh Nagar Thatipur
                                          <br>Gwalior (M.P), 474011
                                          <br>Phone: +91 7869470415
                                          <br>Email: eibo.imp@gmail.com
                                      </address>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-4 invoice-col">
                          To
                          <address>
                                          <strong><?php echo $ap_detail['name'];?></strong>
                                          
                                          <br><?php echo $ap_detail['addreass']." <br>".$ap_detail['city'].", ".$ap_detail['state'];?>
                                          <br>Phone: +91 <?php echo $ap_detail['mobile'];?>
                                          <br>Email: <?php echo $ap_detail['email'];?>
                                      </address>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-4 invoice-col">
                          <b>Invoice</b>
                          <br>
                          <br>
                          <b>Order ID:</b> <?php echo $pas;?>
                          <br>
                          <b>Payment Date:</b> <?php echo $date;?>
                          <br>
                          <b>Account:</b> 968-34567
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->

                      <!-- Table row -->
                      <div class="row">
                        <div class="  table">
                          <table class="table table-striped">
                            <thead>
                              <tr>
                                <th>Qty</th>
                                <th>Product</th>
                                <th style="width: 50%">Subscription Days</th>
                                <th>Subtotal</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>1</td>
                                <td>Plan <?php echo $plan;?></td>
                                <td><?php echo $day;?>
                                </td>
                                <td><?php echo $tot;?> Rs</td>
                              </tr>
                              
                            </tbody>
                          </table>
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->

                      <div class="row">
                        <!-- accepted payments column -->
                        <div class="col-md-6">
                          <p class="lead">Payment Methods:</p>
                          <img src="images/visa.png" alt="Visa">
                          <img src="images/mastercard.png" alt="Mastercard">
                          <img src="images/american-express.png" alt="American Express">
                          <img src="images/paypal.png"  alt="upi">
                          <img src="https://www.ixambee.com/blog/wp-content/uploads/2019/02/UPI-2-300x169.png" height="30px" width="35px" alt="Paypal">
                          
                          <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
                            Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya handango imeem plugg dopplr jibjab, movity jajah plickers sifteo edmodo ifttt zimbra.
                          </p>
                        </div>
                        <!-- /.col -->
                        <div class="col-md-6">
                            <?php if(isset($_POST['vc_code']))
                            {?>
                          <p class="lead">Voucher Code Applied = <?php echo $_POST['vc_code'];?></p>
                          <?php }?>
                          <div class="table-responsive">
                            <table class="table">
                              <tbody>
                                <tr>
                                  <th style="width:50%">Subtotal:</th>
                                  <td><?php echo $tot;?> Rs</td>
                                </tr>
                                <tr>
                                  <th>Tax (18%)</th>
                                  <td><?php echo $tax;?>Rs</td>
                                </tr>
                                <tr>
                                  <th>Total:</th>
                                  <th><?php echo $total_price;?> Rs</th>
                                </tr>
                                <tr>
                                  <th></th>
                                  <th><form class="form-horizontal form-label-left" action="<?php echo $action; ?>" method="post" name="payuForm">
<input type="hidden" name="key" value="<?php echo $MERCHANT_KEY ?>" />
      <input type="hidden" name="hash" value="<?php echo $hash ?>"/>
      <input type="hidden" name="txnid" value="<?php echo $txnid ?>" />
      <input type="hidden" class="form-control" name="productinfo" value="<?php echo (empty($posted['productinfo'])) ? $pas : $posted['productinfo'] ?>">
      
                      
                          <input type="hidden" required="required" class="form-control " name="firstname" id="firstname" value="<?php echo (empty($posted['firstname'])) ? $ap_detail['name'] : $posted['firstname']; ?>">
                        
                          <input type="hidden" required="required" class="form-control" name="phone" value="<?php echo (empty($posted['phone'])) ? $ap_detail['mobile'] : $posted['phone']; ?>">
                          <input type="hidden" required="required" class="form-control" name="email" value="<?php echo (empty($posted['email'])) ? $ap_detail['email_id'] : $posted['email']; ?>">
                          <input type="hidden" class="form-control" name="productinfo" value="<?php echo (empty($posted['productinfo'])) ? $pas : $posted['productinfo'] ?>">
                          <input type="hidden" class="form-control" name="e_id" value="<?php echo (empty($posted['e_id'])) ? $_SESSION['ap_id'] : $posted['e_id'] ?>">
                          <input type="hidden" class="form-control" name="udf1" value="<?php echo (empty($posted['udf1'])) ? '' : $posted['udf1']; ?>">
                          <input type="hidden" required class="form-control" name="amount" value="<?php echo (empty($posted['amount'])) ? $total_price : $posted['amount'] ?>">
                        
                        
                        
                      <input type="hidden" name="service_provider" value="payu_paisa" size="64" />
                      
                          <input type="hidden" name="surl" value="<?php echo (empty($posted['surl'])) ? 'http://eibo.in/ap/production/process_registration_charge.php?statusd=s' : $posted['surl'] ?>" size="64" />
                          <input type="hidden" name="furl" value="<?php echo (empty($posted['furl'])) ? 'http://eibo.in/ap/production/process_registration_charge.php?statusd=f' : $posted['furl'] ?>" size="64" />
                          <?php
      $cvbnm="SELECT * FROM `ap_registration_txn_id` WHERE `txn_id`='$txnid'";
      $dcvbnm=$con->query($cvbnm);
      if($dcvbnm->num_rows==0)
      {
      $dscsvsvvv="INSERT INTO `ap_registration_txn_id` (`aprtxn_id`, `ap_id`, `date`, `time`, `amount`, `txn_id`, `unique_id`, `manual_status`, `software_status`) VALUES (NULL, '$_SESSION[ap_id]', '$date', '$time', '$total_price', '$txnid', '$pas', 'open', 'o');";
      if($con->query($dscsvsvvv)===TRUE)
      {
						   if(!$hash) { ?>
                          <input type="submit" name="submit_data" class="btn btn-success">
                          <?php } }
                          }?></th>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->
                    </section>

                    
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
    <!-- PNotify -->
    <script src="../vendors/pnotify/dist/pnotify.js"></script>
    <script src="../vendors/pnotify/dist/pnotify.buttons.js"></script>
    <script src="../vendors/pnotify/dist/pnotify.nonblock.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
  </body>
</html>
