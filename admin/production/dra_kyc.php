<?php include "config.php";?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>DRA KYC | EIBO </title>

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
                <h3>KYC</h3>
			  </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>DRA KYC Status </h2>
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
                   
                   <div class="card-box table-responsive">
                   <table id="datatable" class="table table-striped table-bordered">
                   	<thead>
                   		<tr>
                   			<th>#</th>
                   			<th>Name</th>
							<th>KYC For</th>
                  			<th>IMG</th>
                   			<th>Detail</th>
                   			<th>Costumer Detail</th>
                   			<th>Action</th>
                   		</tr>
                   	</thead>
                   	<tbody>
                <?php 
						$a=0;
						$dsf="SELECT * FROM `dra_kyc` WHERE `status`='P'";
						$query=$con->query($dsf);
						while($rfg=mysqli_fetch_assoc($query))
						{
						    $ss="SELECT * FROM `employee` WHERE `dra_id`='$rfg[dra_id]' AND `dra_status`='active';";
						    $que=$con->query($ss);
						    $dc=mysqli_fetch_assoc($que);
							$a++;
							?>
							<tr>
								<td><?php echo $a;?></td>
								<td><a href="dra_profile.php?ap_id=<?php echo $rfg[dra_id];?>"><?php echo $dc[name]." (".$rfg[dra_id].")";?></a></td>
								<td><?php echo $rfg[kyc_for];?></td>
								<td>
								    <?php 
								    if($rfg[kyc_for]=="adhar")
								    {?>
								    <a href="../../dra/production/adhar_card_img/<?php echo $rfg[unique_id];?>f.jpg" target="_blank">Front adhar Img</a><br>
								    <a href="../../dra/production/adhar_card_img/<?php echo $rfg[unique_id];?>b.jpg" target="_blank">Back adhar Img</a>
							 <?php  }
							     elseif($rfg[kyc_for]=="bank")
								    {?>
								    <a href="../../dra/production/bank_img/<?php echo $rfg[unique_id];?>.jpg" target="_blank">Bank Img</a><br>
								    
							 <?php  }
							    elseif($rfg[kyc_for]=="pancard")
								    {?>
								    <a href="../../dra/production/pan_card_img/<?php echo $rfg[unique_id];?>.jpg" target="_blank">PANCARD Img</a><br>
								    
							 <?php  }
							 elseif($rfg[kyc_for]=="photo")
								    {?>
								    <a href="../../dra/production/photo/<?php echo $rfg[unique_id];?>.jpg" target="_blank">PHOTO Img</a><br>
							 <?php  }
								    ?>
								</td>
								<td>
								    <?php 
								    if($rfg[kyc_for]=="adhar")
								    {?>
								    Adhar Card NO. = <?php echo $rfg[adhar_no];?>
							 <?php  }
								     
								    elseif($rfg[kyc_for]=="pancard")
								    {?>
								    Pan Card NO. = <?php echo $rfg[pan_no];?>
							 <?php  }
								     
								    elseif($rfg[kyc_for]=="bank")
								    {?>
								    Bank Account NO. = <?php echo $rfg[bank_acc_no];?><br>
								    Bank Name = <?php echo $rfg[bank_name];?><br>
								    IFSC = <?php echo $rfg[bank_ifsc];?>
							 <?php  }
								     
								    elseif($rfg[kyc_for]=="photo")
								    { }
								    ?>
								</td>
								<td>Date of Birth: <?php echo $dc[dob]; ?><br>Address: <?php echo $dc[addreass]; ?><br> City: <?php echo $dc[city];?><br> State: <?php echo $dc[state]; ?><br>Mobile: <?php echo $dc[mobile];?></td>
								
								    <form method="post">
                                
                                <td>
                                    <input type="hidden" name="dra_kyc_id" value="<?php echo $rfg['dra_kyc_id']; ?>">
                                <input type="hidden" name="dra_id" value="<?php echo $rfg['dra_id']; ?>">
                                
                                
                                <input type="submit" name="clear_submit" value="Approve" class="btn btn-success">
                                <input type="submit" name="clear_reject" value="Reject" class="btn btn-danger">
                                
                                </td>
                                </form>
								    
								
							</tr>
							<?php
						}
						?>
                   	</tbody>
                   </table>
                   <?php 
                     if(isset($_POST[clear_submit]))
                     {
                         $csc="SELECT * FROM `dra_kyc` WHERE `dra_kyc_id`='$_POST[dra_kyc_id]'";
                         $dscsdf=$con->query($csc);
                         $cdcdc=mysqli_fetch_assoc($dscsdf);
                         // $amt=$cdcdc[withdrawal_wallet]-$_POST[amount];
                         
                         
                       $sql="UPDATE `dra_kyc` SET `status` = 'C' WHERE `dra_kyc`.`dra_kyc_id` = '$_POST[dra_kyc_id]';";
                       
                       $sql .="UPDATE `dra_kyc` SET `action_date` = '$date' WHERE `dra_kyc`.`dra_kyc_id` = '$_POST[dra_kyc_id]';";
                       $sql .="UPDATE `dra_kyc` SET `action_time` = '$time' WHERE `dra_kyc`.`dra_kyc_id` = '$_POST[dra_kyc_id]';";
                       //$sql .="UPDATE `employee` SET `status` = 'C' WHERE `employee`.`dra_id` = '$_POST[dra_id]';";
                       
                       if ($con->multi_query($sql) === TRUE) {
                          echo "<script>alert('$cdcdc[kyc_for] Card Approved successfully');
                          location.href='dra_kyc.php'</script>";
                        } else {
                          echo "<script>alert('Query Failed, Please try again');
                          location.href='dra_kyc.php'</script>";
                        }
                     }
                     if(isset($_POST[clear_reject]))
                     {
                         $csc="SELECT * FROM `dra_kyc` WHERE `dra_kyc_id`='$_POST[dra_kyc_id]'";
                         $dscsdf=$con->query($csc);
                         $cdcdc=mysqli_fetch_assoc($dscsdf);
                         // $amt=$cdcdc[withdrawal_wallet]-$_POST[amount];
                         
                         
                       $sql="UPDATE `dra_kyc` SET `status` = 'N' WHERE `dra_kyc`.`dra_kyc_id` = '$_POST[dra_kyc_id]';";
                       
                       $sql .="UPDATE `dra_kyc` SET `action_date` = '$date' WHERE `dra_kyc`.`dra_kyc_id` = '$_POST[dra_kyc_id]';";
                       $sql .="UPDATE `dra_kyc` SET `action_time` = '$time' WHERE `dra_kyc`.`dra_kyc_id` = '$_POST[dra_kyc_id]';";
                       //$sql .="UPDATE `employee` SET `status` = 'C' WHERE `employee`.`dra_id` = '$_POST[dra_id]';";
                       
                       if ($con->multi_query($sql) === TRUE) {
                          echo "<script>alert(' $cdcdc[kyc_for] Card Rejected successfully');
                          location.href='dra_kyc.php'</script>";
                        } else {
                          echo "<script>alert('Query Failed, Please try again');
                          location.href='dra_kyc.php'</script>";
                        }
                     }
                     
                     ?>
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
