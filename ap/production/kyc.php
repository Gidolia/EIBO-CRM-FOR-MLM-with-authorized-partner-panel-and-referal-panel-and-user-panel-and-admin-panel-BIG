<?php include "config1.php";?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>KYC || EIBO </title>

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
     <!-- bootstrap-wysiwyg -->
    <link href="../vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
    <!-- Select2 -->
    <link href="../vendors/select2/dist/css/select2.min.css" rel="stylesheet">
    <!-- PNotify -->
    <link href="../vendors/pnotify/dist/pnotify.css" rel="stylesheet">
    <link href="../vendors/pnotify/dist/pnotify.buttons.css" rel="stylesheet">
    <link href="../vendors/pnotify/dist/pnotify.nonblock.css" rel="stylesheet">
    <!-- starrr -->
    <link href="../vendors/starrr/dist/starrr.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
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
                <h3>KYC</h3>
              </div>

            </div>

            <div class="clearfix"></div>

                        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Submit Your Photo</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <?php
                  
$zx="SELECT * FROM `ap_kyc` WHERE `ap_id`='$_SESSION[ap_id]' AND `status`='C' AND `kyc_for`='photo'";
                  $xz=$con->query($zx);
	if($xz->num_rows!=0)
	{ ?>
                  <br>&nbsp;<br>
             <div class="alert alert-success"><b>SUCCESS !</b> Pan Card Detail Submited Successfully</div>
<?php
} else{
$x="SELECT * FROM `ap_kyc` WHERE `ap_id`='$_SESSION[ap_id]' AND `status`='N' AND `kyc_for`='photo'";
                  $z=$con->query($x);
	if($z->num_rows!=0)
	{ ?>
                  <br>&nbsp;<br>
             <div class="alert alert-danger"><b>sorry !</b> you have not provided actual information try again or photo is not clear</div>
<?php
}
                  $s="SELECT * FROM `ap_kyc` WHERE `ap_id`='$_SESSION[ap_id]' AND `status`='P' AND `kyc_for`='photo'";
                  $k=$con->query($s);
	if($k->num_rows!=0)
	{ ?>
                  <br>&nbsp;<br>
             <div class="alert alert-info"><b>submited!</b> this photo may take some hour for verification</div>
<?php
}
else{ ?> 
                    <form class="form-horizontal form-label-left" method="post" enctype="multipart/form-data">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Your Photo</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="file" class="form-control" name="photo" required>
                          <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                        </div>
                      </div>
                      <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-3">&nbsp;</label>
                        <div class="col-md-9 col-md-offset-3">
                          
                          <input type="submit" class="btn btn-success" value="Submit Photo" name="photo_submit">
                        </div>
                      </div>
                     </form>
<?php } } ?>
                    </div>
                  </div>
                </div>
            </div>
    


            <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Submit Adhar Card</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <?php
                  
$zx="SELECT * FROM `ap_kyc` WHERE `ap_id`='$_SESSION[ap_id]' AND `status`='C' AND `kyc_for`='adhar'";
                  $xz=$con->query($zx);
	if($xz->num_rows !=0)
	{ ?>
                  <br>&nbsp;<br>
             <div class="alert alert-success"><b>SUCCESS !</b> Adhar Card Detail Submited Successfully</div>
<?php
} else{
$x="SELECT * FROM `ap_kyc` WHERE `ap_id`='$_SESSION[ap_id]' AND `status`='N' AND `kyc_for`='adhar'";
                  $z=$con->query($x);
	if($z->num_rows !=0)
	{ ?>
                  <br>&nbsp;<br>
             <div class="alert alert-danger"><b>Sorry !</b> you have not provided actual information try again</div>
<?php
}
                  $s="SELECT * FROM `ap_kyc` WHERE `ap_id`='$_SESSION[ap_id]' AND `status`='P' AND `kyc_for`='adhar'";
                  $k=$con->query($s);
	if($k->num_rows !=0)
	{ ?>
                  <br>&nbsp;<br>
             <div class="alert alert-info"><b>submited!</b> this photo may take some hour for verification</div>
<?php
}
else{ ?> 
                    <form class="form-horizontal form-label-left" method="post" enctype="multipart/form-data">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Adhar Card Front</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="file" class="form-control" name="adharf" required>
                          <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Adhar Card Back</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="file" class="form-control" name="adharb" required>
                          <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Adhar Card Number</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="number" class="form-control" name="adhar_no" required>
                          <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                        </div>
                      </div>
                      <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-3">&nbsp;</label>
                        <div class="col-md-9 col-md-offset-3">
                          
                          <input type="submit" class="btn btn-success" value="Submit Adharcard" name="submit_adhar">
                        </div>
                      </div>
                     </form>
<?php } }?>
                    </div>
                  </div>
                </div>
            </div>
            </div>
            <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Submit Bank Detail</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <?php
                  
$zx="SELECT * FROM `ap_kyc` WHERE `ap_id`='$_SESSION[ap_id]' AND `status`='C' AND `kyc_for`='bank'";
                  $xz=$con->query($zx);
	if($xz->num_rows!=0)
	{ ?>
                  <br>&nbsp;<br>
             <div class="alert alert-success"><b>SUCCESS !</b> Bank Detail Submited Successfully</div>
<?php
} else{
$x="SELECT * FROM `ap_kyc` WHERE `ap_id`='$_SESSION[ap_id]' AND `status`='N' AND `kyc_for`='bank'";
                  $z=$con->query($x);
	if($z->num_rows!=0)
	{ ?>
                  <br>&nbsp;<br>
             <div class="alert alert-danger"><b>sorry !</b> you have not provided actual information try again or photo is not clear</div>
<?php
}
                  $s="SELECT * FROM `ap_kyc` WHERE `ap_id`='$_SESSION[ap_id]' AND `status`='P' AND `kyc_for`='bank'";
                  $k=$con->query($s);
	if($k->num_rows!=0)
	{ ?>
                  <br>&nbsp;<br>
             <div class="alert alert-info"><b>submited!</b> this photo may take some hour for verification</div>
<?php
}
else{ ?> 
                    <form class="form-horizontal form-label-left" method="post" enctype="multipart/form-data">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Bank Passbook photo</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="file" class="form-control" name="bank_pass" required>
                          <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Bank Name</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text" class="form-control" name="bank_name" required>
                          <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                        </div>
                      </div>
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Bank ACC No.</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="number" class="form-control" name="acc_no" required>
                          <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">IFSC Code.</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text" class="form-control" name="ifsc" required>
                          <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                        </div>
                      </div>
                      <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-3">&nbsp;</label>
                        <div class="col-md-9 col-md-offset-3">
                          
                          <input type="submit" class="btn btn-success" value="Submit Bank Detail" name="bank_submit">
                        </div>
                      </div>
                     </form>
<?php } } ?>
                    </div>
                  </div>
                </div>
            </div>
            
            
            <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Submit Pan Card Detail</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <?php
                  
$zx="SELECT * FROM `ap_kyc` WHERE `ap_id`='$_SESSION[ap_id]' AND `status`='C' AND `kyc_for`='pancard'";
                  $xz=$con->query($zx);
	if($xz->num_rows!=0)
	{ ?>
                  <br>&nbsp;<br>
             <div class="alert alert-success"><b>SUCCESS !</b> Pan Card Detail Submited Successfully</div>
<?php
} else{
$x="SELECT * FROM `ap_kyc` WHERE `ap_id`='$_SESSION[ap_id]' AND `status`='N' AND `kyc_for`='pancard'";
                  $z=$con->query($x);
	if($z->num_rows!=0)
	{ ?>
                  <br>&nbsp;<br>
             <div class="alert alert-danger"><b>sorry !</b> you have not provided actual information try again or photo is not clear</div>
<?php
}
                  $s="SELECT * FROM `ap_kyc` WHERE `ap_id`='$_SESSION[ap_id]' AND `status`='P' AND `kyc_for`='pancard'";
                  $k=$con->query($s);
	if($k->num_rows!=0)
	{ ?>
                  <br>&nbsp;<br>
             <div class="alert alert-info"><b>submited!</b> this photo may take some hour for verification</div>
<?php
}
else{ ?> 
                    <form class="form-horizontal form-label-left" method="post" enctype="multipart/form-data">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Pan Card photo</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="file" class="form-control" name="pan" required>
                          <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                        </div>
                      </div>
                      
                       
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">PAN Card Number</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text" class="form-control" name="pan_no" required>
                          <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                        </div>
                      </div>
                      <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-3">&nbsp;</label>
                        <div class="col-md-9 col-md-offset-3">
                          
                          <input type="submit" class="btn btn-success" value="Submit Pan Detail" name="pan_submit">
                        </div>
                      </div>
                     </form>
<?php } } ?>
                    </div>
                  </div>
                </div>
            </div>
            
            
            </div>
                   <?php 
            
            
   ////////////////////////////////////////////////////////////////
   //////////////////////////////////////////////////////////////////////////////
            if(isset($_POST[submit_adhar]))
            {
            ////////////////for create unique id
function password_generate($chars) 
{
  $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
  return substr(str_shuffle($data), 0, $chars);
}
for($x=0; $x<100; $x++)
{
    //echo $x;
    $pas=password_generate(17);
    $sqsqqs="SELECT * FROM `ap_kyc` WHERE `unique_id`='$pas'";
    $qur=$con->query($sqsqqs);
    if(mysqli_num_rows($qur)==0)
    {
        break;
    }
}
            	if (file_exists("adhar_card_img/" .$pas."f.jpg"))
        {
        unlink("adhar_card_img/" .$pas."f.jpg");
          echo $pas."f.jpg" . " already exists. ";
        }
        if (file_exists("adhar_card_img/" .$pas."b.jpg"))
        {
        unlink("adhar_card_img/" .$pas."b.jpg");
          echo $pas."b.jpg" . " already exists. ";
        }
        
        if(move_uploaded_file($_FILES["adharf"]["tmp_name"], "adhar_card_img/".$pas."f.jpg"))
		{
		if(move_uploaded_file($_FILES["adharb"]["tmp_name"], "adhar_card_img/".$pas."b.jpg"))
		{
            //echo "Stored in: " . "adhar_card_img/".$pas;
            $que="INSERT INTO `ap_kyc` (`apka_id`, `ap_id`, `date`, `time`, `kyc_for`, `adhar_front_img`, `adhar_back_img`, `adhar_no`, `pancard_img`, `pan_no`, `bank_name`, `bank_acc_no`, `bank_ifsc`, `bank_img`, `status`, `unique_id`) VALUES (NULL, '$_SESSION[ap_id]', '$date', '$time', 'adhar', '$pas', '$pas', '$_POST[adhar_no]', '', '', '', '', '', '', 'P', '$pas');";
            
            if($con->query($que)===TRUE)
            {
            echo "<script>location.href='kyc.php?n=adhar_success';</script>";
            }
            else{ echo "<script>location.href='kyc.php?n=adhar_quefail';</script>";}
            }
            }
            }
  ///////////////////////////////////////////////
  /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
         if(isset($_POST[bank_submit]))
            {
            function password_generate($chars) 
            {
            $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
              return substr(str_shuffle($data), 0, $chars);
            }
            for($x=0; $x<100; $x++)
            {
                //echo $x;
                $pas=password_generate(17);
                $sqsqqs="SELECT * FROM `ap_kyc` WHERE `unique_id`='$pas'";
                $qur=$con->query($sqsqqs);
                if(mysqli_num_rows($qur)==0)
                {
                    break;
                }
            }
        if (file_exists("bank_img/" .$pas.".jpg"))
        {
        unlink("bank_img/" .$pas.".jpg");
          echo $pas.".jpg" . " already exists. ";
        }
        if(move_uploaded_file($_FILES["bank_pass"]["tmp_name"], "bank_img/".$pas.".jpg"))
		{
            //echo "Stored in: " . "bank_img/".$pas;
            $que1="INSERT INTO `ap_kyc` (`apka_id`, `ap_id`, `date`, `time`, `kyc_for`, `adhar_front_img`, `adhar_back_img`, `adhar_no`, `pancard_img`, `pan_no`, `bank_name`, `bank_acc_no`, `bank_ifsc`, `bank_img`, `status`, `unique_id`) VALUES (NULL, '$_SESSION[ap_id]', '$date', '$time', 'bank', '', '', '', '', '', '$_POST[bank_name]', '$_POST[acc_no]', '$_POST[ifsc]', '$pas', 'P', '$pas');";
            if($con->query($que1)==TRUE)
            {
                echo "<script>;
		location.href='kyc.php?n=banksuccess';</script>";
            }
            else{ echo "<script>location.href='kyc.php?n=bankquefail';</script>";}
            }
            }
            
            ///////Pan Card Details
            if(isset($_POST[pan_submit]))
            {
            function password_generate($chars) 
            {
            $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
              return substr(str_shuffle($data), 0, $chars);
            }
            for($x=0; $x<100; $x++)
            {
                //echo $x;
                $pas=password_generate(17);
                $sqsqqs="SELECT * FROM `ap_kyc` WHERE `unique_id`='$pas'";
                $qur=$con->query($sqsqqs);
                if(mysqli_num_rows($qur)==0)
                {
                    break;
                }
            }
            	if (file_exists("pan_card_img/" .$pas.".jpg"))
        {
        unlink("pan_card_img/" .$pas.".jpg");
          echo $pas.".jpg" . " already exists. ";
        }
        if(move_uploaded_file($_FILES["pan"]["tmp_name"], "pan_card_img/".$pas.".jpg"))
		{
            //echo "Stored in: " . "pan_card_img/".$pas;
            $que1="INSERT INTO `ap_kyc` (`apka_id`, `ap_id`, `date`, `time`, `kyc_for`, `adhar_front_img`, `adhar_back_img`, `adhar_no`, `pancard_img`, `pan_no`, `bank_name`, `bank_acc_no`, `bank_ifsc`, `bank_img`, `status`, `unique_id`) VALUES (NULL, '$_SESSION[ap_id]', '$date', '$time', 'pancard', '', '', '', '$pas', '$_POST[pan_no]', '', '', '', '', 'P', '$pas');";
            if($con->query($que1)==TRUE)
            {
                echo "<script>location.href='kyc.php?n=pansuccess';</script>";
            }
            else{ echo "<script>location.href='kyc.php?n=panquefail';</script>";}
            }
            }
            
            
            ///////YOUR PHOTO SUBMIT
            if(isset($_POST[photo_submit]))
            {
            function password_generate($chars) 
            {
            $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
              return substr(str_shuffle($data), 0, $chars);
            }
            for($x=0; $x<100; $x++)
            {
                //echo $x;
                $pas=password_generate(17);
                $sqsqqs="SELECT * FROM `ap_kyc` WHERE `unique_id`='$pas'";
                $qur=$con->query($sqsqqs);
                if(mysqli_num_rows($qur)==0)
                {
                    break;
                }
            }
            	if (file_exists("photo/" .$pas.".jpg"))
        {
        unlink("photo/" .$pas.".jpg");
          echo $pas.".jpg" . " already exists. ";
        }
        if(move_uploaded_file($_FILES["photo"]["tmp_name"], "photo/".$pas.".jpg"))
		{
            //echo "Stored in: " . "photo/".$pas;
            $que1="INSERT INTO `ap_kyc` (`apka_id`, `ap_id`, `date`, `time`, `kyc_for`, `adhar_front_img`, `adhar_back_img`, `adhar_no`, `pancard_img`, `pan_no`, `bank_name`, `bank_acc_no`, `bank_ifsc`, `bank_img`, `status`, `unique_id`, `photo`) VALUES (NULL, '$_SESSION[ap_id]', '$date', '$time', 'photo', '', '', '', '', '', '', '', '', '', 'P', '$pas', '$pas');";
            if($con->query($que1)==TRUE)
            {
                echo "<script>location.href='kyc.php?n=photosuccess';</script>";
            }
            else{ echo "<script>location.href='kyc.php?n=photoquefail';</script>";}
            }
            }
            ?>     
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
