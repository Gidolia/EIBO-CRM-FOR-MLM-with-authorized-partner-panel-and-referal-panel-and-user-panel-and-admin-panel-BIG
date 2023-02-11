<?php include "config.php";

///////////////////////////////////// to delete contact list
if(isset($_POST[confirm_del]))
{
$hust="SELECT * FROM `contact_list` WHERE `cl_id`='$_POST[cl_id]' AND `e_id`='$_SESSION[ibo_id]'";
$queryw=$con->query($hust);
if($queryw->num_rows == 1)
{
	$dsdvvmkl=mysqli_fetch_assoc($queryw);
	$rgrhrffs="SELECT * FROM `master_data_record_contact_list` WHERE `cl_id`='$dsdvvmkl[cl_id]'";
	$gfgs=$con->query($rgrhrffs);
	if($gfgs->num_rows < 1)
	{
		
		$sdfmj="INSERT INTO `deleted_contact_list` (`dcl_id`, `cl_id`, `e_id`, `name`, `mobile`, `a_mobile`, `sex`, `addreass`, `city`, `state`, `work`, `past_mlm_company`, `business_id`) VALUES (NULL, '$dsdvvmkl[cl_id]', '$dsdvvmkl[e_id]', '$dsdvvmkl[name]', '$dsdvvmkl[mobile]', '$dsdvvmkl[a_mobile]', '$dsdvvmkl[sex]', '$dsdvvmkl[addreass]', '$dsdvvmkl[city]', '$dsdvvmkl[state]', '$dsdvvmkl[work]', '$dsdvvmkl[past_mlm_company]', '$dsdvvmkl[business_id]');";
		
		$sdfmj .="DELETE FROM `contact_list` WHERE `contact_list`.`cl_id` = '$_POST[cl_id]'";
		
		if($con->multi_query($sdfmj) === TRUE)
		{
			echo "<script>location.href='contact_list.php?n=cl_del_s';</script>";
		}
		else{
			echo "<script>location.href='contact_list.php?n=cl_del_f_q';</script>";
		}
	}
	else{echo "<script>location.href='contact_list.php?n=cl_del_f_cn';</script>";}
	
}
	else{echo "<script>location.href='contact_list.php?n=cl_del_f_nm';</script>";}
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

    <title>Contact List || Success youth Network Team </title>
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

  <body class="nav-md" onLoad="<?php echo $script;?>">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <!-- sidebar menu -->
            <?php include "include/sidebar.php";?>
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
                <h3>Contact List</h3>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Contact List <small>make your list here</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                   
                   <div class="card-box table-responsive">
                    <p class="text-muted font-13 m-b-30">
                     Your contact list is displayed here. You can keep their progress data here so it get easier to manage to you, so that you can focus on your business.
                    </p>
                   <table id="datatable" class="table table-striped table-bordered">
                   	<thead>
                   		<tr>
                   			<th>Sr. No.</th>
                   			<th>Name</th>
                   			<th>status</th>
                   			<th>Last Contact</th>
                   			<th>Progress Meter</th>
                   			<th></th>
                   		</tr>
                   	</thead>
                   	<tbody>
                   	 <?php
					  $hut="SELECT * FROM `contact_list` WHERE e_id='$_SESSION[ibo_id]'";
					  $query=mysqli_query($con,$hut);
					  $a=0;
					  while($rot=mysqli_fetch_assoc($query))
					  {
						  $step1="";$step2="";$step3="";$step4="";$step5="";$meterr=0;
			/////////////////////////step 1 button
			$rgrhrff="SELECT * FROM `master_data_record_contact_list` WHERE `cl_id`='$rot[cl_id]' AND `type`='CALL'";
			$gfg=$con->query($rgrhrff);
			if($gfg->num_rows == 0)
			{
				$step1="<button class='btn btn-round btn-danger'>S- 1</button>"; 
			}else{$step1="<button class='btn btn-round btn-success'>S- 1</button>";$meterr=20;}
			
			////////////////////////step 2 button
			$rgrhrff="SELECT * FROM `master_data_record_contact_list` WHERE `cl_id`='$rot[cl_id]' AND `type`='STP'";
			$gfg=$con->query($rgrhrff);
			if($gfg->num_rows == 0)
			{
				$step2="<button class='btn btn-round btn-danger'>S- 2</button>"; 
			}else{$step2="<button class='btn btn-round btn-success'>S- 2</button>";$meterr=40;}
			////////////////////////step 3 button
			$rgrhrff="SELECT * FROM `master_data_record_contact_list` WHERE `cl_id`='$rot[cl_id]' AND `type`='b_id'";
			$gfg=$con->query($rgrhrff);
			if($gfg->num_rows == 0)
			{
				$step3="<button class='btn btn-round btn-danger'>S- 3</button>"; 
			}else{$step3="<button class='btn btn-round btn-success'>S- 3</button>";$meterr=60;}
			////////////////////////step 4 button
			$rgrhrff="SELECT * FROM `master_data_record_contact_list` WHERE `cl_id`='$rot[cl_id]' AND `type`='F_UP'";
			$gfg=$con->query($rgrhrff);
			if($gfg->num_rows == 0)
			{
				$step4="<button class='btn btn-round btn-danger'>S- 4</button>"; 
			}else{$step4="<button class='btn btn-round btn-success'>S- 4</button>";$meterr=80;}
			////////////////////////step 5 button
			$rgrhrff="SELECT * FROM `master_data_record_contact_list` WHERE `cl_id`='$rot[cl_id]' AND `type`='JND'";
			$gfg=$con->query($rgrhrff);
			if($gfg->num_rows == 0)
			{
				$step5="<button class='btn btn-round btn-danger'>S- 5</button>"; 
			}else{$step5="<button class='btn btn-round btn-success'>S- 5</button>";$meterr=100;}
						$a++;
						/////////////////////////////////////////////find last contact date
			$rgrhrffc="SELECT * FROM `master_data_record_contact_list` WHERE `cl_id`='$rot[cl_id]' ORDER BY `mdrcl_id` DESC;";
			$gfgc=$con->query($rgrhrffc);
			$sdsdsdsx=mysqli_fetch_assoc($gfgc);
						?>
					  <tr>
					    <td><?php echo $a;?></td>
					  	<td><a href="contact_list_detail.php?cl_id=<?php echo $rot[cl_id];?>"><?php echo $rot[name];?></a></td>
					  	
					  	<td>
                    <?php if($meterr==0){ ?><div class="btn-group"><button class="btn btn-danger" >Not Opened </button><?php }?>
                    <?php if($meterr > 0 AND $meterr < 100){ ?><div class="btn-group"><button class="btn btn-warning" >Opened </button><?php }?>
                    <?php if($meterr == 100){ ?><div class="btn-group"><button class="btn btn-success" >Joined </button><?php }?>
                    
                  </div>
					  	</td>
					  	<td><?php echo $sdsdsdsx['date'];?></td>
					  	 <td class="project_progress">
                            <div class="progress progress_sm">
                              <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="<?php echo $meterr;?>"></div>
                            </div>
                            <small><?php echo $meterr;?>% Complete</small>
                          </td>
                        
                          <td>
                            <a href="contact_list_detail.php?cl_id=<?php echo $rot[cl_id];?>" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>
                            <?php if($meterr == 0){ ?><form method="post"><input type="hidden" name="cl_id" value="<?php echo $rot[cl_id];?>"><button type="submit" name="confirm_del" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </button></form>
                            <?php }?>
                            
                          </td>
					  </tr>
						  
					  
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
