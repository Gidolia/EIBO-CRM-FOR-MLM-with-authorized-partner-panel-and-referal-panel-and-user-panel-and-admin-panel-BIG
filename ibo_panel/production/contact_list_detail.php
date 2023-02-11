<?php include "config.php";?>

<!DOCTYPE html>

<html lang="en">

  <head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <!-- Meta, title, CSS, favicons, etc. -->

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">



    <title>Contact List Detail | Success youth Network Team </title>



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

                <h3>Contact List Detail</h3>

				</div>

            </div>



            <div class="clearfix"></div>



            <div class="row">

              <div class="col-md-12 col-sm-12 ">

                <div class="x_panel">

                  <div class="x_title">

                    <h2>Contact List Detail <small> All Detail of this contact list is shown here</small></h2>

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

                    <p class="text-muted font-13 m-b-30">

                     All detail of this list are maintained here. Your working on this list also maintain here like, when you call, when you show the plan, when you gone for follow up, when he/she joined your business

                    </p>

               

                   <table id="datatable" class="table table-striped table-bordered">

                   <?php

					  $hut="SELECT * FROM `contact_list` WHERE `e_id`='$_SESSION[ibo_id]' AND `cl_id`='$_GET[cl_id]'";

					  $query=mysqli_query($con,$hut);

					  $a=0;

					  while($rot=mysqli_fetch_assoc($query))

					  {

						  /////////////////////////////////////////////////////////////////

						  ////////////////////////////////////////////steps finder

						  $step1="";$step2="";$step3="";$step4="";$step5="";

			/////////////////////////step 1 button

			$rgrhrff="SELECT * FROM `master_data_record_contact_list` WHERE `cl_id`='$rot[cl_id]' AND `type`='CALL'";

			$gfg=$con->query($rgrhrff);

			if($gfg->num_rows == 0)

			{

				$step1="<button class='btn btn-round btn-danger'>S- 1</button>";

			}else{$step1="<button class='btn btn-round btn-success'>S- 1</button>";}

			

			////////////////////////step 2 button

			$rgrhrff="SELECT * FROM `master_data_record_contact_list` WHERE `cl_id`='$rot[cl_id]' AND `type`='STP'";

			$gfg=$con->query($rgrhrff);

			if($gfg->num_rows == 0)

			{

				$step2="<button class='btn btn-round btn-danger'>S- 2</button>";

			}else{$step2="<button class='btn btn-round btn-success'>S- 2</button>";}

			////////////////////////step 3 button

			$rgrhrff="SELECT * FROM `master_data_record_contact_list` WHERE `cl_id`='$rot[cl_id]' AND `type`='b_id'";

			$gfg=$con->query($rgrhrff);

			if($gfg->num_rows == 0)

			{

				$step3="<button class='btn btn-round btn-danger'>S- 3</button>";

			}else{$step3="<button class='btn btn-round btn-success'>S- 3</button>";}

			////////////////////////step 4 button

			$rgrhrff="SELECT * FROM `master_data_record_contact_list` WHERE `cl_id`='$rot[cl_id]' AND `type`='F_UP'";

			$gfg=$con->query($rgrhrff);

			if($gfg->num_rows == 0)

			{

				$step4="<button class='btn btn-round btn-danger'>S- 4</button>";

			}else{$step4="<button class='btn btn-round btn-success'>S- 4</button>";}

			////////////////////////step 5 button

			$rgrhrff="SELECT * FROM `master_data_record_contact_list` WHERE `cl_id`='$rot[cl_id]' AND `type`='JND'";

			$gfg=$con->query($rgrhrff);

			if($gfg->num_rows == 0)

			{

				$step5="<button class='btn btn-round btn-danger'>S- 5</button>";

			}else{

				$step1="<button class='btn btn-round btn-success'>S- 1</button>";

				$step2="<button class='btn btn-round btn-success'>S- 2</button>";

				$step3="<button class='btn btn-round btn-success'>S- 3</button>";

				$step4="<button class='btn btn-round btn-success'>S- 4</button>";

				$step5="<button class='btn btn-round btn-success'>S- 5</button>";

			$joined=1;}

					  /////////////////////////////////////////////////////////////////

						  ////////////////////////////////////////////*******steps finder*********/////////

					$name=$rot[name];

					$mobile=$rot[mobile];

					$cl_idd=$rot[cl_id];

					$business_id=$rot[red_id];

						?>

                  	<tr><th>CL No.</th><td><?php echo $rot[cl_id]; ?></td></tr>

                   	<tr><th>Name</th><td><?php echo $rot[name]; ?></td></tr>

                   	<tr><th>Mobile</th><td><a href="tel:<?php echo $rot[mobile]; ?>"><?php echo $rot[mobile]; ?></a></td></tr>

                   	<tr><th>Alternative Mobile</th><td><a href="tel:<?php echo $rot[a_mobile]; ?>"><?php echo $rot[a_mobile]; ?></a></td></tr>

                   	<tr><th>Sex</th><td><?php echo $rot[sex];?></td></tr>

                   	<tr><th>Addreass</th><td><?php echo $rot[addreass];?></td></tr>

                   	<tr><th>City</th><td><?php echo $rot[city];?></td></tr>

                   	<tr><th>State</th><td><?php echo $rot[state];?></td></tr>

                   	<tr><th>Work</th><td><?php echo $rot[work];?></td></tr>

                   	<tr><th>MLM Experience</th><td><?php echo $rot[mlm_experience];?></td></tr>

                   	<tr><th>Past/current MLM Company</th><td><?php echo $rot[past_mlm_company];?></td></tr>

                   	<tr><th>Status</th><td><?php echo $step1.$step2.$step3.$step4.$step5;?></td></tr>
                   	<?php 
                   	/////////////////////////////////////////////find last contact date
			$rgrhrffc="SELECT * FROM `master_data_record_contact_list` WHERE `cl_id`='$rot[cl_id]' ORDER BY `mdrcl_id` DESC;";
			$gfgc=$con->query($rgrhrffc);
			$sdsdsdsx=mysqli_fetch_assoc($gfgc);?>
                   	<tr><th>Last Contact Date</th><td><?php echo $sdsdsdsx['date'];?></td></tr>

                   	<tr><th>Work Sheets For This List</th><td><a href="contact_list_detail.php?cl_id=<?php echo $_GET[cl_id];?>&step=0" class="btn btn-info form-control">Work Sheet</a></td></tr>

                  

                   </table>

                   <?php }?>

                  

					  </div>

                  

                  </div>

                </div>

              </div>

            </div>

            <div class="row">

              <div class="col-md-12 col-sm-12 ">

                <div class="x_panel">

                  <div class="x_title">

                    <h2>Steps <small>Progress recorded here</small></h2>

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

                  <a href="contact_list_detail.php?cl_id=<?php echo $_GET[cl_id];?>&step=1" class="btn btn-info">Step 1 (Call/invite)</a>

                  <a href="contact_list_detail.php?cl_id=<?php echo $_GET[cl_id];?>&step=2" class="btn btn-info">Step 2 (Show the plan, STP)</a>

                  <a href="contact_list_detail.php?cl_id=<?php echo $_GET[cl_id];?>&step=3" class="btn btn-info">Step 3 (Red ID Created)</a>

                  <a href="contact_list_detail.php?cl_id=<?php echo $_GET[cl_id];?>&step=4" class="btn btn-info">Step 4 (Follow Up)</a>

                  <a href="contact_list_detail.php?cl_id=<?php echo $_GET[cl_id];?>&step=5" class="btn btn-info">Step 5 (Joined / Complete)</a>

                  

     <!-----------------------------------------------------------------

                 -----------------------------------------------------

                 --------------------------------------------------

                 --------------------------------------------------------------------------------

                 selected step connected here through get method --> 

                 

                             

                                         

                  <?php 

					  if($_GET[step]== 0)

					  {?>

					  &nbsp;<br>&nbsp;<br>

					  <h3>Work Sheet For This list</h3>

					  <div class="card-box table-responsive">

	<table id="datatable" class="table table-striped table-bordered" style="width:100%">

		<thead>

			<tr>

				<th>Sr. No.</th>

				<th>Type</th>

				<th>Date / Time</th>

				<th>Name (CL ID)</th>
				
				<th>Message</th>

				<th>Response Meter</th>

			</tr>

		</thead>

		<tbody>

			<?php 

	$dvvgf="SELECT * FROM `master_data_record_contact_list` WHERE `e_id`='$_SESSION[ibo_id]' AND `cl_id`='$_GET[cl_id]' ORDER BY `date` DESC";

	

	$rfsdbn=$con->query($dvvgf);

	while($fghv=mysqli_fetch_assoc($rfsdbn))

	{ $cont++;

	 $per=$fghv[joining_opinion_level]*20;

			?>

		

		<tr>

			<td><?php echo $cont;?></td>

			<td><?php echo $fghv[type];?></td>

			<td><?php echo $fghv[date];?></td>

			<td><?php echo $name;?></td>
			
			<td><?php echo $fghv[message];?></td>

			<td><div class="progress">

                    <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: <?php echo $per;?>%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"><?php echo $per;?>%</div>

                  </div></td>

		</tr>

		

		<?php 

	}

	?>

		</tbody>

	</table>

</div>

						  

<?php		  }			 

					  if($_GET[step]== 1){ ?>              

                  <h3>Open The List / Call And invited for Plan  Shown</h3>

                  <p>Here you start this contact in process when you call for first time then put the entry here.</p>

                  <?php if($joined !=1){?>

                   <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Call / invite entry</button>

<?php }?>

                  <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">

                    <div class="modal-dialog modal-lg">

                      <div class="modal-content">



                        <div class="modal-header">

                          <h4 class="modal-title" id="myModalLabel">First time call Entry</h4>

                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>

                          </button>

                        </div>

                        <div class="modal-body">

                          <h4>if you call first time for appointment then put your entry here.</h4>

                          

                          

                  <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action="process_call_entry.php">

    

                      <div class="item form-group">

                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">CL No.

                        </label>

                        <div class="col-md-6 col-sm-6 ">

                          <input type="text" class="form-control" name="cl_idd" value="<?php echo $cl_idd;?>" readonly>

                        </div>

                      </div>

                      <div class="item form-group">

                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Name

                        </label>

                        <div class="col-md-6 col-sm-6 ">

                          <input type="text" class="form-control" value="<?php echo $name;?>" readonly>

                        </div>

                      </div>

                       <div class="item form-group">

                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Upline Name<span class="required">(optional)</span>

                        </label>

                        <div class="col-md-6 col-sm-6 ">

                          <input type="text" class="form-control" name="upline_name">

                        </div>

                      </div>

                      <div class="item form-group">

                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Next Meeting Date<span class="required">(optional)</span>

                        </label>

                        <div class="col-md-6 col-sm-6 ">

                          <input type="date" class="form-control date" name="next_date">

                        </div>

                      </div>

                      <div class="item form-group">

                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Message<span class="required">(Optional)</span>

                        </label>

                        <div class="col-md-6 col-sm-6 ">

                          <textarea name="message" class="form-control"></textarea>

                        </div>

                      </div>

                        </div>

                        <div class="modal-footer">

                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                          <input type="submit" name="submit_data" class="btn btn-success">

                        </div>

</form>

                      </div>

                    </div>

                  </div>

                  <div class="card-box table-responsive">

                   <table id="datatable" class="table table-striped">

                   <thead>

                   <tr>

                   	<th>Sr No.</th>

                   	<th>Date/Time</th>

                   	<th>Upline Help</th>

                   	<th>Message</th>

                   	<th>Next Meeting Date</th>

                   	

                   </tr>

                   </thead>

                   <tbody>

                    <?php

					  $huut="SELECT * FROM `master_data_record_contact_list` WHERE `type`='CALL' AND `cl_id`='$_GET[cl_id]' ORDER BY `mdrcl_id` DESC";

					  $queryu=mysqli_query($con,$huut);

					  $a=0;

					  while($rotu=mysqli_fetch_assoc($queryu))

					  {

					  $a++;

					?>

						  <tr>

						  	<td><?php echo $a;?></td>

							<td><?php echo $rotu[date]."/".$rotu[time];?></td>

						  	

						  	<td><?php echo $rotu[upline_name];?></td>

						  	<td><?php echo $rotu[message];?></td>

						  	<td><?php echo $rotu[next_follow_date];?></td>

						  	

						  	

						  </tr>

						  

						<?php  

					  }

						?>

					   </tbody>

                  

					  </table>

					  </div>

 <?php }                                               

  

                 

                   if($_GET[step]== 2){ ?>              

                  <h3>Show the plan</h3>

                  <?php if($joined !=1){?>

                   <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Enter new stp entry</button>

<?php }?>

                  <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">

                    <div class="modal-dialog modal-lg">

                      <div class="modal-content">



                        <div class="modal-header">

                          <h4 class="modal-title" id="myModalLabel">Plan Shown Detail Entry</h4>

                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>

                          </button>

                        </div>

                        <div class="modal-body">

                          <h4>If you Show the plan then keep entry here</h4>

                          

                          

                  <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action="process_stp_entry.php">

    

                      <div class="item form-group">

                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">CL No.

                        </label>

                        <div class="col-md-6 col-sm-6 ">

                          <input type="text" class="form-control" name="cl_idd" value="<?php echo $cl_idd;?>" readonly>

                        </div>

                      </div>

                      <div class="item form-group">

                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Name

                        </label>

                        <div class="col-md-6 col-sm-6 ">

                          <input type="text" class="form-control" value="<?php echo $name;?>" readonly>

                        </div>

                      </div>

                      <div class="item form-group">

                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Place Type<span class="required">*</span>

                        </label>

                        <div class="col-md-6 col-sm-6 ">

                          <select name="place_type" class="form-control">

                          	<option value="Their Home">Their Home</option>

                          	<option value="Own Home">Own Home</option>

                          	<option value="office">office</option>

                          	<option value="Public Place">Public Place</option>

                          	<option value="Home Meeting">Home Meeting</option>

                          	<option value="seminar"> Seminar</option>

             

                          </select>

                        </div>

                      </div>

                      <div class="item form-group">

                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Addreass<span class="required">(optional)</span>

                        </label>

                        <div class="col-md-6 col-sm-6 ">

                          <input type="text" class="form-control" name="addreass">

                        </div>

                      </div>

                      <div class="item form-group">

                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">City<span class="required">(optional)</span>

                        </label>

                        <div class="col-md-6 col-sm-6 ">

                          <input type="text" class="form-control" name="city">

                        </div>

                      </div>

                       <div class="item form-group">

                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">State<span class="required">(optional)</span>

                        </label>

                        <div class="col-md-6 col-sm-6 ">

                          <input type="text" class="form-control" name="state">

                        </div>

                      </div>

                       <div class="item form-group">

                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Upline Name<span class="required">(optional)</span>

                        </label>

                        <div class="col-md-6 col-sm-6 ">

                          <input type="text" class="form-control" name="upline_name">

                        </div>

                      </div>

                      <div class="item form-group">

                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Joining opinion<span class="required">Select their joining level</span>

                        </label>

                        <div class="col-md-6 col-sm-6 ">

                          <select name="joining_opinion_level" class="form-control">

                          	<option value="5">Very High</option>

                          	<option value="4">High</option>

                          	<option value="3" selected>Moderate</option>

                          	<option value="2">Low</option>

                          	<option value="1">Very Low</option>

                          	

             

                          </select>

                        </div>

                      </div>

                      <div class="item form-group">

                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Message<span class="required">(Optional)</span>

                        </label>

                        <div class="col-md-6 col-sm-6 ">

                          <textarea name="message" class="form-control"></textarea>

                        </div>

                      </div>

                      

                     



                    

                        </div>

                        <div class="modal-footer">

                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                          <input type="submit" name="submit_data" class="btn btn-success">

                        </div>

</form>

                      </div>

                    </div>

                  </div>

                  <div class="card-box table-responsive">

                   <table id="datatable" class="table table-striped">

                   <thead>

                   <tr>

                   	<th>Sr No.</th>

                   	<th>Date/Time</th>

                   	<th>opini</th>

                   	<th>Full Addreass</th>

                   	<th>Plan Showned by</th>

                   	<th>Message</th>

                   	

                   </tr>

                   </thead>

                   <tbody>

                    <?php

					  $huut="SELECT * FROM `master_data_record_contact_list` WHERE `type`='STP' AND `cl_id`='$_GET[cl_id]' ORDER BY `mdrcl_id` DESC";

					  $queryu=mysqli_query($con,$huut);

					  $a=0;

					  while($rotu=mysqli_fetch_assoc($queryu))

					  {

					  $a++;

					?>

						  <tr>

						  	<td><?php echo $a;?></td>

						  	<td><?php echo $rotu[date]."/".$rotu[time];?></td>

						  	<td><?php switch ($rotu[joining_opinion_level]) {

    case "1":

        echo "<button class='btn-round btn-danger'>Very Low</button>";

        break;

    case "2":

        echo "<button class='btn-round btn-warning'>Low</button>";

        break;

    case "3":

        echo "<button class='btn-round btn-primary'>Moderate</button>";

        break;

	case "4":

        echo "<button class='btn-round btn-info'>High</button>";

        break;

	case "5":

        echo "<button class='btn-round btn-success'>Very High</button>";

        break;

}?></td></td>

						  	

						  	<td><?php echo $rotu[addreass].", ".$rotu[city].", ".$rotu[state];?></td>

						  	<td><?php echo $rotu[upline_name];?></td>

						  	<td><?php echo $rotu[message];?></td>

						  	

						  	

						  </tr>

						  

						<?php  

					  }

						?>

					   </tbody>

                  

					  </table>

					  </div>

 <?php }

		elseif($_GET[step]== 3 ){ ?>

                 <h3>Business ID</h3>

                 <p>Here you make their business id free. you can activate their id later</p>

                 <?php if($joined !=1){?>

                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Enter Business ID / change Business ID</button>

<?php }?>

                  <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">

                    <div class="modal-dialog modal-lg">

                      <div class="modal-content">



                        <div class="modal-header">

                          <h4 class="modal-title" id="myModalLabel">Enter / Change / Update new Business ID</h4>

                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>

                          </button>

                        </div>

                        <div class="modal-body">

                          

                          <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action="process_business_id.php">

    

                      <div class="item form-group">

                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">CL No.

                        </label>

                        <div class="col-md-6 col-sm-6 ">

                          <input type="text" class="form-control" name="cl_idd" value="<?php echo $cl_idd;?>" readonly>

                        </div>

                      </div>

                       <div class="item form-group">

                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Name

                        </label>

                        <div class="col-md-6 col-sm-6 ">

                          <input type="text" class="form-control" value="<?php echo $name;?>" readonly>

                        </div>

                      </div>

                      <div class="item form-group">

                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Business ID<span class="required">*</span>

                        </label>

                        <div class="col-md-6 col-sm-6 ">

                          <input type="text" class="form-control" name="business_id">

                        </div>

                      </div>

                       <div class="item form-group">

                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Business ID Name<span class="required">*</span>

                        </label>

                        <div class="col-md-6 col-sm-6 ">

                          <input type="text" class="form-control" name="business_id_name">

                        </div>

                      </div>

                      <p>give the detail where you placed that id in your business tree.</p>

                       <div class="item form-group">

                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Sponser id<span class="required">*</span>

                        </label>

                        <div class="col-md-6 col-sm-6 ">

                          <input type="text" class="form-control" name="sponser_id">

                        </div>

                      </div>

                       <div class="item form-group">

                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Sponser name<span class="required">*</span>

                        </label>

                        <div class="col-md-6 col-sm-6 ">

                          <input type="text" class="form-control" name="sponser_name">

                        </div>

                      </div>

                       <div class="item form-group">

                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Mobile No. on registration<span class="required">*</span>

                        </label>

                        <div class="col-md-6 col-sm-6 ">

                          <input type="text" class="form-control" name="mobile">

                        </div>

                      </div>

                       <div class="item form-group">

                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Password<span class="required"> optional</span>

                        </label>

                        <div class="col-md-6 col-sm-6 ">

                          <input type="text" class="form-control" name="password">

                        </div>

                      </div>

                       <div class="item form-group">

                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Next Meeting Date<span class="required"> optional</span>

                        </label>

                        <div class="col-md-6 col-sm-6 ">

                          <input type="date" class="form-control date" name="next_date">

                        </div>

                      </div>

                        </div>

                        <div class="modal-footer">

                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                          <input type="submit" name="submit_business_id" class="btn btn-success">

                        </div>

							</form>

                      </div>

                    </div>

                  </div>

                  <div class="card-box table-responsive">

                  <table id="datatable" class="table table-striped table-bordered">

                   <thead>

                   <tr>

                   	<th>Sr No.</th>

                   	<th>Business ID</th>

                   	<th>B. Name</th>

                   	<th>S. ID(name)</th>

                   	<th>Mobile</th>

                   	<th>Password</th>

                   </tr>

					  </thead>

                 <tbody>

                 	<?php

					  $huute="SELECT * FROM `master_data_record_contact_list` WHERE `cl_id`='$_GET[cl_id]' AND `type`='b_id'";

					  $queryue=mysqli_query($con,$huute);

					  $ab=0;

					  while($rotue=mysqli_fetch_assoc($queryue))

					  {

					  $ab++;

					?>

                	<tr>

                		<td><?php echo $ab;?></td>

                		<td><?php echo $rotue[business_id];?></td>

                		<td><?php echo $rotue[b_id_name];?></td>

                		<td><?php echo $rotue[sponser_id]."(".$rotue[sponser_name].")";?></td>

                		<td><?php echo $rotue[mobile];?></td>

                		<td><?php echo $rotue[password];?></td>

                	</tr>

                	<?php }?>

                 </tbody>

					  </table>

					  </div>

                  

         <?php }

					  elseif($_GET[step]== 4 ){ ?>

                <h3>Follow UP</h3>

                 <p>Here you Keep your follow up record</p>

                 <?php if($joined !=1){?>

                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Enter New Follow up Record</button>

					<?php }?>

                  <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">

                    <div class="modal-dialog modal-lg">

                      <div class="modal-content">



                        <div class="modal-header">

                          <h4 class="modal-title" id="myModalLabel">Enter New Follow Up Record</h4>

                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>

                          </button>

                        </div>

                        <div class="modal-body">

                          

                          <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action="process_follow_up_record.php">

    

                      <div class="item form-group">

                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">CL No.

                        </label>

                        <div class="col-md-6 col-sm-6 ">

                          <input type="text" class="form-control" name="cl_idd" value="<?php echo $cl_idd;?>" readonly>

                        </div>

                      </div>

                      <div class="item form-group">

                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Name

                        </label>

                        <div class="col-md-6 col-sm-6 ">

                          <input type="text" class="form-control" value="<?php echo $name;?>" readonly>

                        </div>

                      </div>

                      <div class="item form-group">

                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Place Type<span class="required">*</span>

                        </label>

                        <div class="col-md-6 col-sm-6 ">

                          <select name="place_type" class="form-control">

                          	<option value="Their Home">Their Home</option>

                          	<option value="Own Home">Own Home</option>

                          	<option value="office">office</option>

                          	<option value="Public Place">Public Place</option>

                          	<option value="Home Meeting">Home Meeting</option>

                          	<option value="seminar"> Seminar</option>

             

                          </select>

                        </div>

                      </div>

                      <div class="item form-group">

                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Addreass<span class="required">(optional)</span>

                        </label>

                        <div class="col-md-6 col-sm-6 ">

                          <input type="text" class="form-control" name="addreass">

                        </div>

                      </div>

                      <div class="item form-group">

                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">City<span class="required">(optional)</span>

                        </label>

                        <div class="col-md-6 col-sm-6 ">

                          <input type="text" class="form-control" name="city">

                        </div>

                      </div>

                       <div class="item form-group">

                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">State<span class="required">(optional)</span>

                        </label>

                        <div class="col-md-6 col-sm-6 ">

                          <input type="text" class="form-control" name="state">

                        </div>

                      </div>

                      <div class="item form-group">

                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Follow By Call

                        </label>

                        <div class="col-md-6 col-sm-6 ">

                          <input type="checkbox" class="form-control" name="call">

                          

                        </div>

                      </div>

                      

                       <div class="item form-group">

                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Upline Name<span class="required">(optional)</span>

                        </label>

                        <div class="col-md-6 col-sm-6 ">

                          <input type="text" class="form-control" name="upline_name">

                        </div>

                      </div>

                      <div class="item form-group">

                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Progress Report<span class="required">Select their joining level</span>

                        </label>

                        <div class="col-md-6 col-sm-6 ">

                          <select name="joining_opinion_level" class="form-control">

                          

                          	<option value="5">Very High</option>

                          	<option value="4">High</option>

                          	<option value="3" selected>Moderate</option>

                          	<option value="2">Low</option>

                          	<option value="1">Very Low</option>

                          	

             

                          </select>

                        </div>

                      </div>

                      <div class="item form-group">

                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Next Follow Date

                        </label>

                        <div class="col-md-6 col-sm-6 ">

                          <input type="date" class="form-control" name="next_follow_date">

                          

                        </div>

                      </div>

                      <div class="item form-group">

                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Message<span class="required">(Optional)</span>

                        </label>

                        <div class="col-md-6 col-sm-6 ">

                          <textarea name="message" class="form-control"></textarea>

                        </div>

                      </div>

                      

                     



                    

                        </div>

                        <div class="modal-footer">

                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                          <input type="submit" name="submit_follow_data" class="btn btn-success">

                        </div>

</form>

                      </div>

                    </div>

                  </div>

       <div class="card-box table-responsive">

                  <table id="datatable" class="table table-striped table-bordered">

                   <thead>

                   <tr>

                   	<th>Sr No.</th>

                   	<th>date/time</th>

                   	<th>Follow Oncall</th>

                   	<th>progress</th>

                   	<th>Place type</th>

                   	<th>Addreass</th>

                   	<th>Message</th>

                   	<th>Upline help</th>

                   </tr>

					  </thead>

                 <tbody>

                 	<?php

					  $huute="SELECT * FROM `master_data_record_contact_list` WHERE `cl_id`='$_GET[cl_id]' AND `type`='F_UP'";

					  $queryue=mysqli_query($con,$huute);

					  $abc=0;

					  while($rotue=mysqli_fetch_assoc($queryue))

					  {

					  $abc++;

					?>

               

                	<tr>

                		<td><?php echo $abc;?></td>

                		<td><?php echo $rotue[date]." / ".$rotue[time];?></td>

                		<td><?php if($rotue[call]== "on"){$sadsdasa="<button class='btn-round btn-info'>On Call</button>";}else{$sadsdasa="<button class='btn-round btn-info'>Face Meeting</button>";	}

						  echo $sadsdasa;?></td>

                		<td><?php switch ($rotue[joining_opinion_level]) {

    case "1":

        echo "<button class='btn-round btn-danger'>Very Low</button>";

        break;

    case "2":

        echo "<button class='btn-round btn-warning'>Low</button>";

        break;

    case "3":

        echo "<button class='btn-round btn-primary'>Moderate</button>";

        break;

	case "4":

        echo "<button class='btn-round btn-info'>High</button>";

        break;

	case "5":

        echo "<button class='btn-round btn-success'>Very High</button>";

        break;

}?></td>

               		<td><?php echo $rotue[place_type];?></td>

                		<td><?php echo $rotue[addreass].", ".$rotu[city].", ".$rotu[state];?></td>

						<td><?php echo $rotue[message];?></td>

               			<td><?php echo $rotue[upline_name];?></td>

                	</tr>

                	<?php }?>

                 </tbody>

					  </table>

					  </div>

         <?php } elseif($_GET[step]== 5 ){ ?>    

                  

                  <h3>Joined</h3>

                  <?php if($joined !=1){?>

                 <p>If person then submit their report here. then you closed this list also</p>

                  <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action="process_completed.php">

    

                      <div class="item form-group">

                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">CL No.

                        </label>

                        <div class="col-md-6 col-sm-6 ">

                          <input type="text" class="form-control" name="cl_idd" value="<?php echo $cl_idd;?>" readonly>

                        </div>

                      </div>

                      <div class="item form-group">

                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Name

                        </label>

                        <div class="col-md-6 col-sm-6 ">

                          <input type="text" class="form-control" value="<?php echo $name;?>" readonly>

                        </div>

                      </div>

                       <div class="item form-group">

                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Business ID<span class="required">*</span>

                        </label>

                        <div class="col-md-6 col-sm-6 ">

                          <input type="text" class="form-control" name="business_id" value="<?php echo $business_id;?>" required>

                        </div>

                      </div>

                      <div class="item form-group">

                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Amount<span class="required">*</span>

                        </label>

                        <div class="col-md-6 col-sm-6 ">

                          <input type="text" class="form-control" name="amount" required>

                        </div>

                      </div>

                      <div class="item form-group">

                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">BV<span class="required">*</span>

                        </label>

                        <div class="col-md-6 col-sm-6 ">

                          <input type="text" class="form-control" name="bv" required>

                        </div>

                      </div>

                      

                     

                      <div class="item form-group">

                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Billing Date<span class="required">*</span>

                        </label>

                        <div class="col-md-6 col-sm-6 ">

                          <input type="date" class="form-control" name="date" value="<?php echo $date;?>" required>

                        </div>

                      </div>

                      <div class="item form-group">

                       <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">&nbsp;

                        </label>

                        <div class="col-md-6 col-sm-6 ">

                          <input type="submit" class="btn btn-success" name="submit_complete">

                        </div>

                      </div>

				   </form>

                  

          <?php } ?>

                 <div class="card-box table-responsive">

                  <table id="datatable" class="table table-striped table-bordered">

                   <thead>

                   <tr>

                   	<th>Sr No.</th>

                   	<th>date/time</th>

                   	<th>Amount</th>

                   	<th>BV</th>

                   	<th>Business ID (Name)</th>

                   	<th>ID Mobile No.</th>	

                   	<th>ID Password</th>

                   	<th>Sponser ID (Name)</th>

                   </tr>

					  </thead>

                 <tbody>

                 	<?php

					  $huute="SELECT * FROM `master_data_record_contact_list` WHERE `cl_id`='$_GET[cl_id]' AND `type`='JND'";

					  $queryue=mysqli_query($con,$huute);

					  $abc=0;

					  while($rotue=mysqli_fetch_assoc($queryue))

					  {

					  $abc++;

					?>

               

                	<tr>

                		<td><?php echo $abc;?></td>

                		<td><?php echo $rotue[date]." / ".$rotue[time];?></td>

                		<td><?php echo $rotue[amount];?></td>

                		<td><?php echo $rotue[bv];?></td>

               			<td><?php echo $rotue[business_id]."(".$rotue[business_name].")";?></td>

                		<td><?php echo $rotue[id_mobile_no];?></td>

						<td><?php echo $rotue[id_password];?></td>

               			<td><?php echo $rotue[sponser_id]."(".$rotue[sponser_name].")";?></td>

                	</tr>

                	<?php }?>

                 </tbody>

					  </table>

					  </div>

                 

                 

                 

                 <?php }?>        

                  

                  

                  

                  

                  

                  

                  

                  

                  

               

                  

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

