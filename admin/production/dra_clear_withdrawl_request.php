<?php include "config.php";?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Pending Withdrawl Request | EIBO </title>

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
                <h3>Withdrawl Request</h3>
			  </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Pending Withdrawl Request </h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a class="dropdown-item" href="#">Settings 1</a>
                          </li>
                          <li><a class="dropdown-item" href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                   
                   
                   
                   
                   <div class="card-box table-responsive">
                    <?php
                    $dsf="SELECT * FROM `dra_withdrawal_request` WHERE `dra_id`='$_GET[dra_id]' AND `status`='P'";
					$query=$con->query($dsf);
					$dsf1="SELECT * FROM `employee` WHERE `dra_id`='$_GET[dra_id]'";
					$query1=$con->query($dsf1);
					$rfg1=mysqli_fetch_assoc($query1);
					while($rfg=mysqli_fetch_assoc($query))
					{
					    ?>
                   <table id="datatable" class="table table-striped table-bordered">
                   	
                   		<tr>
                   			<th>#</th><td><?php echo $rfg[dra_wr_id];?></td></tr>
                   		<tr><th>Name(ID)</th><td><?php echo $rfg1[name]." (".$rfg[ap_id].")";?></td></tr>
                   		<tr><th>Wallet Balance</th><td><?php echo $rfg1[wallet];?></td>
						<tr><th>Net Pay Amount</th><td><?php echo $rfg[net_pay_amt];?></td>
                   		<tr><th>Bank Name</th><td><?php echo $rfg[bank_name];?></td>
                   		<tr><th>IFSC</th><td><?php echo $rfg[ifsc];?></td>
                  		<tr><th>Account Number</th><td><?php echo $rfg[acc_no];?></td>
                  		<form method="post">
                   		<tr><th>Transaction ID</th>
                   		<td><input type="text" class="form-control" name="txn_id" required></td>
                   		    <input type="hidden" name="ap_wr_id" value="<?php echo $rfg['ap_wr_id']; ?>">
                                <input type="hidden" name="ap_id" value="<?php echo $rfg['ap_id']; ?>">
                                <input type="hidden" name="amount" value="<?php echo $rfg['amount']; ?>"></tr>
                                
                   		
                   		
                   		<tr><th>Action</th><td><input type="submit" name="clear_submit" value="Approve" class="btn btn-success"><input type="submit" name="clear_reject" value="Reject" class="btn btn-danger"></td>
                   			
                   			
                   			
                   		</tr>
                   		</form>
                   	
                   	<tbody>
                    
						
						
			
							<?php
						
						
                   		
                   	 
                     if(isset($_POST[clear_submit]))
                     {
                         clear_ap_withdrawl_request($_POST[ap_id], $_POST[amount], $_POST[ap_wr_id],$_POST[txn_id],'C');
                        
                     }
                     if(isset($_POST[clear_reject]))
                     {
                          clear_ap_withdrawl_request($_POST[ap_id], $_POST[amount], $_POST[ap_wr_id],$_POST[txn_id],'R');
                         
                     }
					
                   	?>
                   </table>
                   <?php } ?>
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
