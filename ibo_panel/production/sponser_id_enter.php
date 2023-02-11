<?php include "config.php";?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Enter Sponser ID | Success youth Network Team </title>

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
		function validateForm() {
		var s_id = document.forms["myForm"]["s_id"].value;
	    var s_name = document.forms["myForm"]["u_name"].value;
		var password = document.forms["myForm"]["password"].value;
			if(password == "")
				{
					document.getElementById("password_msg").innerHTML = "Enter your ID password";
    				return false;
				}
			if(s_id == "")
				{
					document.getElementById("s_id_msg").innerHTML = "Please enter your upline no. to update";
    				return false;
				}
			if(s_name == "")
				{
					document.getElementById("upline_msg").innerHTML = " Please Check Upline no. ";
    				return false;
				}
			if(s_name == "Please check your upline number")
				{
					document.getElementById("upline_msg").innerHTML = " Please Check Upline no. ";
    				return false;
				}
		}
		
	  function showHint(str) {
  
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHint").value = this.responseText;
      }
    };
    xmlhttp.open("GET", "get_hint.php?q=" + str, true);
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
                <h3>Enter / Change Sponser ID</h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Enter / Change Sponser ID</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <?php
						$a=0;
						$sqlcvb="SELECT * FROM `upline_changing_history` WHERE `e_id`='$_SESSION[ibo_id]' ORDER BY `date` DESC";
						$quercvb=$con->query($sqlcvb);
						$dcvvcvb=mysqli_fetch_assoc($quercvb);
					  $s_sqlcvb="SELECT name FROM `employee` WHERE `e_id`='$ibo_detail[s_id]'";
						 $s_quercvb=$con->query($s_sqlcvb);
						 $dfgvcvb=mysqli_fetch_assoc($s_quercvb);
					  ?>
                     <p>you can connect your ID from Your business Upline if needed so that they can guide you in your business.<br> note : They can see your activity information. </p>
                     <table class="table table-striped">
                    
                     	 <tr><th>Current upline name (ID)</th><td><?php echo $dfgvcvb[name]."(".$ibo_detail[s_id].")";?></td></tr>
                     	 <tr><th>Updated Date </th><td><?php echo $dcvvcvb[date]." / ".$dcvvcvb[time];?></td></tr>
                     	 <tr><th> Change </th><td><button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Change Upline</button></td></tr>
                     </table>
                     
                     
                     
                    
                     <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title" id="myModalLabel">Detail View</h4>
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                          </button>
                        </div>
                        <div class="modal-body">                        
                           <form class="form-horizontal form-label-left" name="myForm" onsubmit="return validateForm()" method="post" >
                      
                     
                      <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Enter Upline User ID</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text" class="form-control" name="s_id" onKeyUp="showHint(this.value)">
                          <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                        </div>
                        &nbsp;&nbsp;&nbsp;&nbsp;<span id="s_id_msg" style="color: red"></span>
                      </div>
                      <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Upline Name</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text" class="form-control" name="u_name" id="txtHint">
                          <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                        </div>
                        &nbsp;&nbsp;&nbsp;&nbsp;<span id="upline_msg" style="color: red"></span>
                      </div>
                      <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Your ID Password</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="password" class="form-control" name="password">
                          <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                        </div>
                        &nbsp;&nbsp;&nbsp;&nbsp;<span id="password_msg" style="color: red"></span>
                      </div>
                     
                      <div class="form-group">
                        <div class="col-md-9 col-md-offset-3">
                          <input type="submit" class="btn btn-success" value="Update Upline" name="submit_upline">
                        </div>
                      </div>
                     </form>
                          
                      </div>
                    </div>
                  </div>
						</div>
                     
					</div>
				</div>
				
                    <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>History</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">   
                     
                     
                   
					
                   <table class="table table-striped" id="table">
                   	<thead>
                   		<tr>
                   			<th>#</th>
                   			<th>Date/time</th>
                   			<th>upline ID / Name</th>
                   		</tr>
                   	</thead>
                   	<tbody>
                   		<?php
						$a=0;
						$sql="SELECT * FROM `upline_changing_history` WHERE `e_id`='$_SESSION[ibo_id]' ORDER BY `date` DESC";
						$quer=$con->query($sql);
						while($dcvv=mysqli_fetch_assoc($quer))
						{ $a++;
							$s_sql="SELECT name FROM `employee` WHERE `e_id`='$dcvv[s_id]'";
						 $s_quer=$con->query($s_sql);
						 $dfgv=mysqli_fetch_assoc($s_quer);
						 
						?>
							<tr><td><?php echo $a;?></td><td><?php echo $dcvv[date]." / ".$dcvv[time];?></td><td><?php echo $dfgv[name]." (".$dcvv[s_id].")";?></td></tr>

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
        <!-- /page content -->

      <?php
            if(isset($_POST[submit_upline]))
            {
				if($_POST[password]==$_SESSION[ibo_password])
				{
					$sql_s_id="SELECT * FROM `employee` WHERE `e_id`='$_POST[s_id]'";
					$query_s_id=$con->query($sql_s_id);
					if($query_s_id->num_rows > 0)
					{
						$s_id_detail=mysqli_fetch_assoc($query_s_id);
						
						$axd="INSERT INTO `upline_changing_history` (`uch_id`, `e_id`, `s_id`, `before_s_id`, `date`, `time`) VALUES (NULL, '$_SESSION[ibo_id]', '$_POST[s_id]', '$ibo_detail[s_id]', '$date', '$time');";
						
						$axd .="UPDATE `employee` SET `s_id` = '$_POST[s_id]' WHERE `employee`.`e_id` = $_SESSION[ibo_id];";
						
						if($ibo_detail[dra_id]==""){$axd .="UPDATE `employee` SET `dra_id` = '$s_id_detail[dra_id]' WHERE `employee`.`e_id` = $_SESSION[ibo_id];"; echo "empty dra";}
						
						
						if($ibo_detail[ap_id]==""){$axd .="UPDATE `employee` SET `ap_id` = '$s_id_detail[ap_id]' WHERE `employee`.`e_id` = $_SESSION[ibo_id];";}
						
						
						
						if($con->multi_query($axd) === TRUE)
						{echo "<script>location.href='sponser_id_enter.php?n=uu_s';</script>";}
						else{echo "<script>location.href='sponser_id_enter.php?n=uu_f_q';</script>";}
					}
					else{echo "<script>location.href='sponser_id_enter.php?n=uu_f_id';</script>";}
				}
				else{
					 echo "<script>location.href='sponser_id_enter.php?n=uup_f';</script>";
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
