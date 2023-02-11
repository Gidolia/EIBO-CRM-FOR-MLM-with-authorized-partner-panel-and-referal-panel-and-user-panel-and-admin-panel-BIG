<?php include "config.php";
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



    <title>Create Dra | Network Asia</title>



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
    var hash = '<?php echo $hash ?>';
    function submitPayuForm() {
      if(hash == '') {
        return;
      }
      var payuForm = document.forms.payuForm;
      payuForm.submit();
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

                <h3>Create Dra Final Ask</h3>

              </div>

            </div>



            <div class="clearfix"></div>



            <div class="row">

            <div class="col-md-12 col-sm-12 col-xs-12">

                <div class="x_panel">

                  <div class="x_title">

                    <h2>Create Dra</h2>

                    <div class="clearfix"></div>

                  </div>

                  <div class="x_content">

                     <p> Every Dra you create it charge <b>150/- </b><br>
                     create Dra If Needed<br>
                     if you create dra then they will also get 5% of their sales<br>
                     you will still get 15% of their sales<br>
                     ask 150/- from dra to pay in your wallet</p>

                    <form class="form-horizontal form-label-left" action="<?php echo $action; ?>" method="post" name="payuForm">
<input type="hidden" name="key" value="<?php echo $MERCHANT_KEY ?>" />
      <input type="hidden" name="hash" value="<?php echo $hash ?>"/>
      <input type="hidden" name="txnid" value="<?php echo $txnid ?>" />
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="text" required="required" class="form-control " name="firstname" id="firstname" value="<?php echo (empty($posted['firstname'])) ? '31' : $posted['firstname']; ?>">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Mobile No.
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="number" required="required" class="form-control" name="phone" value="<?php echo (empty($posted['phone'])) ? '7869470412' : $posted['phone']; ?>">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Email ID
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="text" required="required" class="form-control" name="email" value="<?php echo (empty($posted['email'])) ? 'gidolia7@gmail.com' : $posted['email']; ?>">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Plan Type
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="text" class="form-control" name="productinfo" value="<?php echo (empty($posted['productinfo'])) ? 'dra_activation' : $posted['productinfo'] ?>">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">IBO ID
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="text" class="form-control" name="e_id" value="<?php echo (empty($posted['e_id'])) ? '25' : $posted['e_id'] ?>">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Subscription Days
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="text" class="form-control" name="udf1" value="<?php echo (empty($posted['udf1'])) ? '' : $posted['udf1']; ?>">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Per Month Amount
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="text" class="form-control" name="state">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Total Amount To pay
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="text" required class="form-control" name="amount" value="<?php echo (empty($posted['amount'])) ? '480' : $posted['amount'] ?>">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Current MLM Company<span class="required">(optional)</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="text" class="form-control" name="c_company">
                        </div>
                      </div>
                      <input type="hidden" name="service_provider" value="payu_paisa" size="64" />
                      <div class="ln_solid"></div>
                      <div class="item form-group">
                        <div class="col-md-6 col-sm-6 offset-md-3">
                          <input type="hidden" name="surl" value="<?php echo (empty($posted['surl'])) ? 'http://cardinil.com/ap/production/process_create_dra.php' : $posted['surl'] ?>" size="64" />
                          <input type="hidden" name="furl" value="<?php echo (empty($posted['furl'])) ? 'http://cardinil.com/ap/production/process_create_dra.php' : $posted['furl'] ?>" size="64" />
						  
						  <?php if(!$hash) { ?>
                          <input type="submit" name="submit_data" class="btn btn-success">
                          <?php } ?>
                        </div>
                      </div>

                    </form>



                    </div>

                  </div>

                </div>

            </div>

          </div>

        </div>

        <!-- /page content -->



      <?php

            if(isset($_POST[submit_pass]))

            {

				

                pass_change($_POST[old_pass],$_POST[n_pass],$_POST[c_pass]);

            }

            ?>

       

       

       

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

