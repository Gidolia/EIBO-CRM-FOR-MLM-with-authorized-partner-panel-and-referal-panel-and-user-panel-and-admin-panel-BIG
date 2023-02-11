<?php include "config.php";?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Support Msg | EIBO </title>

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
                <h3>Team Management</h3>
			  </div>
            </div>

            <div class="clearfix"></div>

           
                    
                    <div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Send Message <small>Having Problem?</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <p>We Love to Help You </p>
                    <br />
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post">

                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Answer Question<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <textarea required="required" class="form-control " name="message"></textarea>
                            <input type="hidden" name="ibo_id" value="<?php echo $_GET[ibo_id];?>">
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="item form-group">
                        <div class="col-md-6 col-sm-6 offset-md-3">
						  <button class="btn btn-primary" type="reset">Reset</button>
                          <input type="submit" name="submit_send_m_data" class="btn btn-success">
                        </div>
                      </div>
                    </form>
                    <?php
                    if(isset($_POST[submit_send_m_data])){
                        $sql="INSERT INTO `ibo_support` (`ibo_s_id`, `ibo_id`, `date`, `time`, `type`, `suggestion`, `problem`, `from`, `read`, `read_date`, `read_time`, `admin_w_id`) VALUES (NULL, '$_POST[ibo_id]', '$date', '$time', 'support', '', '$_POST[message]', 'admin', 'N', '', '', '$_POST[w_id]');";
                        if($con->query($sql)===TRUE){
                            echo "<script>location.href='support_msg.php?ibo_id=$_POST[ibo_id]';</script>";
                        }
                        else{
                            echo "<script>location.href='support_msg.php?ibo_id=$_POST[ibo_id]';</script>";
                        }
                    }
                    ?>
                  </div>
                </div>
              </div>
              
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Conservation <small>Your Query</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                     <div class="card-box table-responsive">
                    <!-- start recent activity -->
                            <ul class="messages">
                                <?php 
                    $sxd="SELECT * FROM `employee` WHERE `e_id`='$_GET[ibo_id]'";
                    $der=$con->query($sxd);
                    $skm=mysqli_fetch_assoc($der);
                                
                    $sqls="SELECT * FROM `ibo_support` WHERE `ibo_id`='$_GET[ibo_id]' AND `type`='support' ORDER BY `ibo_support`.`ibo_s_id` DESC;";
                    $fd=$con->query($sqls);
                    while($cov=$fd->fetch_assoc())
                    {
                    if($cov[read]=="N" && $cov[from]==$_GET[ibo_id])
                    {
                        $ss="UPDATE `ibo_support` SET `read` = 'Y' WHERE `ibo_support`.`ibo_s_id` = $cov[ibo_s_id];";
                        $con->query($ss);
                        $ssd="UPDATE `ibo_support` SET `read_date` = '$date' WHERE `ibo_support`.`ibo_s_id` = $cov[ibo_s_id];";
                        $con->query($ssd);
                        $ssd="UPDATE `ibo_support` SET `read_time` = '$time' WHERE `ibo_support`.`ibo_s_id` = $cov[ibo_s_id];";
                        $con->query($ssd);
                    }
                        if($cov[from]==$_GET[ibo_id])
                        {
                            $nameeee=$_GET[ibo_id]." (".$skm[name].")";
                            $img_src="profile_photos/default_profile.png";
                        }else{
                            $nameeee="Admin";
                            $img_src="../../title_logo.png";
                        }
                                ?>
                              <li>
                                <img src="<?php echo $img_src;?>" class="avatar" alt="Avatar">
                                <div class="message_date">
                                  <h3 class="date text-info"><?php echo $cov[date];?></h3>
                                  <p class="month"><?php echo $cov[time];?></p>
                                </div>
                                <div class="message_wrapper">
                                  <h4 class="heading"><?php echo $nameeee;?></h4>
                                  <blockquote class="message"><?php echo $cov[problem];?></blockquote>
                                  <br />
                                
                                  <p class="url">
                                 
                                    <a href="#"> &nbsp;</a>
                                  </p>
                                </div>
                              </li>
                    <?php 
                    }
                    
                    ?>
                            </ul>
                            <!-- end recent activity -->
                   
					  </div>
                   
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
            
            