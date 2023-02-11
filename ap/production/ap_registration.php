<?php include "config.php";?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>AP Registration| EIBO </title>

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
    <!-- PNotify -->
    <link href="../vendors/pnotify/dist/pnotify.css" rel="stylesheet">
    <link href="../vendors/pnotify/dist/pnotify.buttons.css" rel="stylesheet">
    <link href="../vendors/pnotify/dist/pnotify.nonblock.css" rel="stylesheet">
    
    
     <script>
function validateForm() {
 	var state = document.forms["myForm"]["state"].value;
	var mobile_no = document.forms["myForm"]["mobile_ck"].value;
	var pan_no = document.forms["myForm"]["pancard_ck"].value;
	var email_id = document.forms["myForm"]["email_ck"].value;
	if(mobile_no=="This Mobile Number is Already Register")
	{
	    document.getElementById("text_mob").innerHTML = " This Mobile Number is Already Register ";
    return false;
	}
	if(mobile_no=="Please Check Your Mobile Number")
	{
	    document.getElementById("text_mob").innerHTML = " Please Check Your Mobile Number ";
    return false;
	}
	
	if(pan_no=="This Pancard Number is Already Register")
	{
	    document.getElementById("text_pan").innerHTML = " This Pancard Number is Already Register ";
    return false;
	}
	if(pan_no=="Please Check Pancard Number")
	{
	    document.getElementById("text_pan").innerHTML = " Please Check Pancard Number ";
    return false;
	}
	
	if(email_id=="This Email ID is Already Register")
	{
	    document.getElementById("text_email").innerHTML = " This Email ID is Already Register ";
    return false;
	}
	if(email_id=="Please Check Email ID")
	{
	    document.getElementById("text_email").innerHTML = " Please Check Email ID ";
    return false;
	}
	
	if ( state == "select")
		  {
    document.getElementById("state_msg").innerHTML = " State Must be selected ";
    return false;
		  }
	  
		  
	
}
     
     
function showHint_mob(str) {
  
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHint_mob").value = this.responseText;
        if(this.responseText != "Correct")
				{
					document.getElementById("text_mob").innerHTML = this.responseText;
				}
		else{ document.getElementById("text_mob").innerHTML = "";
		}
        
      }
    };
    xmlhttp.open("GET", "get_hint_mob.php?q=" + str, true);
    xmlhttp.send();
  
}

function showHint_pan(str) {
  
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHint_pan").value = this.responseText;
        if(this.responseText != "Correct")
				{
					document.getElementById("text_pan").innerHTML = this.responseText;
				}
		else{ document.getElementById("text_pan").innerHTML = "";
		}
        
      }
    };
    xmlhttp.open("GET", "get_hint_pancard.php?q=" + str, true);
    xmlhttp.send();
  
}
function showHint_email(str) {
  
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHint_email").value = this.responseText;
        if(this.responseText != "Correct")
				{
					document.getElementById("text_email").innerHTML = this.responseText;
				}
		else{ document.getElementById("text_email").innerHTML = "";
		}
        
      }
    };
    xmlhttp.open("GET", "get_hint_email.php?q=" + str, true);
    xmlhttp.send();
  
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
                <h3>AP Registration Form</h3>
              </div>
            </div>
       
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Register New AP <small></small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" name="myForm" onsubmit="return validateForm()">

                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Full Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="text" required="required" class="form-control " name="name">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">D.O.B <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="date" required="required" class="form-control " name="dob">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Addreass <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="text" required="required" class="form-control " name="addreass">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">City <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="text" required="required" class="form-control " name="city">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">State <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <select name="state" class="form-control ">
                                <option value="select">Select State</option>
							    <option value="Andra Pradesh">Andra Pradesh</option>
							    <option value="Arunachal Pradesh">Arunachal Pradesh</option>
							    <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
							    <option value="Assam">Assam</option>
							    <option value="Bihar">Bihar</option>
							    <option value="Chhattisgarh">Chhattisgarh</option>
							    <option value="Chandigarh">Chandigarh</option>
							    <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
							    <option value="Daman and Diu">Daman and Diu</option>
							    <option value="Delhi">Delhi</option>
							    <option value="Goa">Goa</option>
							    <option value="Gujarat">Gujarat</option>
							    <option value="Haryana">Haryana</option>
							    <option value="Himachal Pradesh">Himachal Pradesh</option>
							    <option value="Jammu and Kashmir">Jammu and Kashmir</option>
							    <option value="Jharkhand">Jharkhand</option>
							    <option value="Karnataka">Karnataka</option>
							    <option value="Kerala">Kerala</option>
							    <option value="Lakshadeep">Lakshadeep</option>
							    
							    <option value="Madya Pradesh">Madya Pradesh</option>
							    <option value="Maharashtra">Maharashtra</option>
							    <option value="Manipur">Manipur</option>
							    <option value="Meghalaya">Meghalaya</option>
							    <option value="Mizoram">Mizoram</option>
							    <option value="Nagaland">Nagaland</option>
							    <option value="Orissa">Orissa</option>
							    <option value="Punjab">Punjab</option>
							    <option value="Pondicherry">Pondicherry</option>
							    <option value="Rajasthan">Rajasthan</option>
							    <option value="Sikkim">Sikkim</option>
							    <option value="Tamil Nadu">Tamil Nadu</option>
							    <option value="Telagana">Telagana</option>
							    <option value="Tripura">Tripura</option>
							    <option value="Uttaranchal">Uttaranchal</option>
							    <option value="Uttar Pradesh">Uttar Pradesh</option>
							    <option value="West Bengal">West Bengal</option>
                            </select>
                            <span id="state_msg" style="color: red"></span>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Email ID<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="email" required="required" class="form-control " name="email" onKeyUp="showHint_email(this.value)">
                          <span id="text_email" style="color: red"></span>
								<span id="text_emailw" style="color: red"></span>
								<input type="hidden" name="email_ck" value="Please Check Email ID" id="txtHint_email" readonly />
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Mobile <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="number" required="required" class="form-control " name="mobile" onKeyUp="showHint_mob(this.value)">
                          <span id="text_mob" style="color: red"></span>
								<span id="text_mobw" style="color: red"></span>
								<input type="hidden" name="mobile_ck" value="Please Check Your Mobile Number" id="txtHint_mob" readonly />
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Alternate Mobile
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="number" class="form-control " name="a_mobile">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Pancard No
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="text" required="required" class="form-control " name="pancard" onKeyUp="showHint_pan(this.value)">
                          <span id="text_pan" style="color: red"></span>
								<span id="text_panw" style="color: red"></span>
								<input type="hidden" name="pancard_ck" value="Please Check Pancard Number" id="txtHint_pan" readonly />
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group row">
                        <div class="col-md-9 col-sm-9  offset-md-3">
						   <button class="btn btn-primary" type="reset">Reset</button>
                          <input type="submit" class="btn btn-success" name="ap_reg_submit" value="Register AP">
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
if(isset($_POST[ap_reg_submit]))
{
    function password_generate($chars) 
    {
      $data = '1234567890abcefghijklmnopqrstuvwxyz';
      return substr(str_shuffle($data), 0, $chars);
    }
    $password=password_generate(5);
    for($x=0; $x<100; $x++)
    {
        //echo $x;
        $ap_idd=rand(10000,99999);
        $sqsqqs="SELECT ap_id FROM `ap` WHERE `ap_id`='$ap_idd'";
        $qur=$con->query($sqsqqs);
        if(mysqli_num_rows($qur)==0)
        {
            break;
        }
    }
    $sdc="INSERT INTO `ap` (`ap_id`, `s_ap_id`, `name`, `dob`, `addreass`, `city`, `state`, `country`, `email_id`, `password`, `pancard_no`, `adhar_card_no`, `date_of_joining`, `wallet`, `hold_wallet`, `acc_no`, `ifsc_code`, `bank_name`, `mobile`, `a_mobile`, `own_commission`, `lv1`, `lv2`, `lv3`, `status`, `entry_fees`) VALUES ( '$ap_idd', '$_SESSION[ap_id]', '$_POST[name]', '$_POST[dob]', '$_POST[addreass]', '$_POST[city]', '$_POST[state]', 'India', '$_POST[email]', '$password', '$_POST[pancard]', '', '$date', '0', '0', '', '', '', '$_POST[mobile]', '$_POST[a_mobile]', '', '', '', '', 'N', '1000');";
    if($con->query($sdc)===TRUE)
    {
        echo "<script>location.href='ap_registered_success.php?n=ap_success&ap_id=$ap_idd&name=$_POST[name]';</script>";
    }
    else{
        echo "<script>location.href='ap_registration.php?n=ap_fail';</script>";
    }
    
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
     <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap-datetimepicker -->    
    <script src="../vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
    
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- PNotify -->
    <script src="../vendors/pnotify/dist/pnotify.js"></script>
    <script src="../vendors/pnotify/dist/pnotify.buttons.js"></script>
    <script src="../vendors/pnotify/dist/pnotify.nonblock.js"></script>
    
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
  </body>
</html>
