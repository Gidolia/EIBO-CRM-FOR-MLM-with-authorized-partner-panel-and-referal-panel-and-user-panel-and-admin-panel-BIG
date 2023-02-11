<?php include "config.php";?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Withdrawal Wallet Ledger | EIBO </title>

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
                <h3>Withdrawl Wallet Details</h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Withdrawl Request</h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
        <table class="table table-striped table-bordered">
            <thead><tr><th>Your Balance</th><th><?php echo $dra_detail[dra_wallet]+0;?>/-</th></tr></thead>
            <tr>
                <td>Withdrawl Wallet</td>
                <td><form method="post"><input type="number" class="form-control" name="amount" min="0" max="<?php echo $dra_detail[dra_wallet]+0;?>" required><input type="submit" class="btn btn-success" value="Request Withdrawl" name="amount_submit"></form> Withdrawal Request History</td>
            </tr>
            </table>
            
            </div>
            </div>
            </div>
            </div>
            <?php
            if(isset($_POST[amount_submit]))
            {
                $ss="SELECT * FROM `dra_withdrawal_request` WHERE `dra_id`='$_SESSION[dra_id]' AND `status`='p'";
                $sx=$con->query($ss);
                $left=$dra_detail[dra_wallet]-$_POST[amount];
                if($sx->num_rows==0)
                {
                    if($left>=0)
                    {
                        $tds=$_POST[amount]*5/100;
                        $admin_charge=0;
                        $net_pay=$_POST[amount]-$tds-$admin_charge;
                        $sqldcdc="INSERT INTO `dra_withdrawal_request` (`dra_wr_id`, `dra_id`, `amount`, `date`, `time`, `status`, `admin_charge`, `tds`, `net_pay_amt`, `clear_date`, `acc_no`, `ifsc`, `bank_name`, `txn_id`, `receipt_img`) VALUES (NULL, '$_SESSION[dra_id]', '$_POST[amount]', '$date', '$time', 'p', '$admin_charge', '$tds', '$net_pay', '', '', '', '', '', '');";
                        if($con->query($sqldcdc)===TRUE)
                        {
                            echo "<script>location.href='withdrawal_request.php?n=wr_s';</script>";
                        }
                        else{
                            echo "<script>location.href='withdrawal_request.php?n=wr_f';</script>";
                        }
                    }
                    else{
                        echo "<script>location.href='withdrawal_request.php?n=wr_f';</script>";
                    }
                }
                else{
                        echo "<script>location.href='withdrawal_request.php?n=wr_a_r';</script>";
                    }
            }
            ?>
            
            
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Withdrawal Wallet Ledger</h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
            <br>
             <div class="card-box table-responsive">
        <table class="table table-striped table-bordered" id="datatable">
            <thead><tr><th>Sr. no.</th><th>Date / Time</th><th>Type</th><th>Amount</th><th>TXN Detail</th></tr></thead>
            <tbody>
            <?php
            $a=0;
            $g="SELECT * FROM `dra_withdrawal_wallet_ledger` WHERE `dra_id`='$_SESSION[dra_id]'";
            $dc=$con->query($g);
            while($d=$dc->fetch_assoc())
            { $a++; ?>
            <tr>
                <td><?php echo $a;?></td>
                <td><?php echo $d[date]." / ".$d[time];?></td>
               <?php if($d['type']=="+"){ ?>
                <td><font style="color:green;">Credited</font></td>
                <td><font style="color:green;"><?php echo $d[amount];?></font></td>
                <?php }
                elseif($d['type']=="-"){ ?>
                <td><font style="color:red;">Debited</font></td>
                <td><font style="color:red;"><?php echo $d[amount];?></font></td>
                <?php } ?>
                <td><?php echo $d[txn_detail];?></td>
            </tr>
            <?php
            }?>
            </tbody>
        </table>
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
