<?php 

//include("config.php");

$d=$_SESSION[ap_id];

$n = $_GET['n'];

$script= notification_suscess_fail($n);

function notification_suscess_fail($n)

{
	//////////////////////password change///////////////////////

	if($n=="ps")

	{$script="new PNotify({
                                 title: 'Password changed Successfully!',
                                 type: 'success',
                                 styling: 'bootstrap3'
                          });";}

	if($n == "pf")
		{ $script="new PNotify({

                                 title: 'Failed to Change the password',
                                 type: 'eror',
                                 styling: 'bootstrap3'
                          });";}
	if($n == 'pm')
	{
		$script="new PNotify({
                                 title: 'Failed',
								 text: 'New password and Confirm password didnt matched, Please try again',
                                 styling: 'bootstrap3'
                          });";}
	if($n == "popm")
	{
		$script="new PNotify({
                                 title: 'Failed',
								 text: 'Old password wrong, Please try again',
                                 styling: 'bootstrap3'
                          });";

	}

	///////////////////////////////////******password******////////////////////////////
	////////////////////////////////////////////////for ap withdrawal requests

	if($n=="wr_s")
	{
	    $script="new PNotify({
                                 title: 'Withdrawal Requested Successfully',
                                 type: 'success',
                                 styling: 'bootstrap3'
                          });";
	}
	if($n == 'wr_a_r')
	{
		$script="new PNotify({
                                 title: 'Failed',
								 text: 'Wait First Your Old Request be Clear',
                                 styling: 'bootstrap3'
                          });";}
    if($n == 'wr_f')
	{
		$script="new PNotify({
                                 title: 'Failed',
								 text: 'Sorry Some Thing Went Wrong Please Try Again',
                                 styling: 'bootstrap3'
                          });";
	    
	}
	
    //////////////////////////////////////////////////////notification for kyc
    if($n=="adharsuccess")
    {
        $script="new PNotify({
             title: 'Adhar Card Submited Successfully!',
             type: 'success',
             styling: 'bootstrap3'
            });";
    }
    if($n=="adharquefail")
    {
        $script="new PNotify({
             title: 'Failed',
             text: 'Failed To Submit Please Try Again',
             styling: 'bootstrap3'
            });";
    }
    if($n=="banksuccess")
    {
        $script="new PNotify({
             title: 'Bank Detail Submited Successfully!',
             type: 'success',
             styling: 'bootstrap3'
            });";
    }
    if($n=="bankquefail")
    {
        $script="new PNotify({
             title: 'Failed',
             text: 'Failed To Submit Please Try Again',
             styling: 'bootstrap3'
            });";
    }
    if($n=="pansuccess")
    {
        $script="new PNotify({
             title: 'Pancard Detail Submited Successfully!',
             type: 'success',
             styling: 'bootstrap3'
            });";
    }
    if($n=="panquefail")
    {
        $script="new PNotify({
             title: 'Failed',
             text: 'Failed To Submit Please Try Again',
             styling: 'bootstrap3'
            });";
    }
    if($n=="photosuccess")
    {
        $script="new PNotify({
             title: 'Photo Submited Successfully!',
             type: 'success',
             styling: 'bootstrap3'
            });";
    }
    if($n=="photoquefail")
    {
        $script="new PNotify({
             title: 'Failed',
             text: 'Failed To Submit Please Try Again',
             styling: 'bootstrap3'
            });";
    }
    
    ////////////////////////////////for ap registration Process
    if($n=="ap_success")
    {
        $script="new PNotify({
             title: 'AP Successfully Registered',
             type: 'success',
             styling: 'bootstrap3'
            });";
    }
    if($n=="ap_fail")
    {
        $script="new PNotify({
             title: 'Failed',
             text: 'Failed To Submit Please Try Again',
             styling: 'bootstrap3'
            });";
    }
    
    ////////////////////////////////for payment Successfully
    if($n=="sp_ps")
    {
        $script="new PNotify({
             title: 'Payment Completed Successfully',
             type: 'success',
             styling: 'bootstrap3'
            });";
    }
    if($n=="sp_pf")
    {
        $script="new PNotify({
             title: 'Failed',
             text: 'Failed Please Try Again',
             styling: 'bootstrap3'
            });";
    }
    ////////////////////////////////////////for steps after registration
    if($n=="step_n")
    {
        $script="new PNotify({
             title: 'Complete Your Payment First',
             text: 'Step 1',
             styling: 'bootstrap3'
            });";
    }
    if($n=="step_p")
    {
        $script="new PNotify({
             title: 'KYC!',
             text: 'Send Your KYC And Wait For Confirmation',
             styling: 'bootstrap3'
            });";
    }
	//////////////////////////////return script data

	return($script);

}

///////////////////////////////////////////////////function for password changing

function pass_change($old,$new,$new_confirm)
{
	global $con, $d, $date, $time;
    if($old==$_SESSION[ap_password])
    {
        if($new==$new_confirm)
        {
            $enter_query="INSERT INTO `ap_password_change_history` (`appch_id`, `ap_id`, `old_pass`, `new_pass`, `date`, `time`) VALUES (NULL, '$_SESSION[ap_id]', '$old', '$new', '$date', '$time');";
			if($con->query($enter_query) === TRUE)
			{ 	$update_query="UPDATE `ap` SET `password` = '$new' WHERE `ap`.`ap_id` = $_SESSION[ap_id];";
				if($con->query($update_query) === TRUE)
				{
				    $_SESSION['ap_password']=$new;
					echo "<script>location.href='password_change.php?n=ps';</script>";
				}
			 	else
				{
				 	echo "<script>location.href='password_change.php?n=pf';</script>";
			 	}
			}
			else{ echo "<script>location.href='password_change.php?n=pf';</script>";}
        }else{echo "<script>location.href='password_change.php?n=pm';</script>";}
    }
    else{echo "<script>location.href='password_change.php?n=popm';</script>";
    }
}

///////////////////////////////////////////////////////////////////////////////////

///////////////////////////////////////////////////////////////////////////////////

////////////////////////////////





///////////////////////////////////////// function for finding total costumer count



function count_total_costumer($ap_id)

{

	global $con;

	$sqlq="SELECT * FROM `employee` WHERE `ap_id`='$ap_id'";

	$queryt=$con->query($sqlq);

	$count=mysqli_num_rows($queryt);

	return($count);

}



///////////////////////////////////////// function for finding your AP team Count



function count_ap_count($ap_id)

{

	global $con;

	$sqlq="SELECT * FROM `ap` WHERE `s_ap_id`='$ap_id'";

	$queryt=$con->query($sqlq);

	$count=mysqli_num_rows($queryt);

	return($count);

}



///////////////////////////////////////// function for finding your dra team Count



function count_own_dra_team($ap_id)

{

	global $con;

	$sqlq="SELECT * FROM `employee` WHERE `s_ap_id`='$ap_id' AND `dra_status`='active'";

	$queryt=$con->query($sqlq);

	$count=mysqli_num_rows($queryt);

	return($count);

}

///////////////////////////////////////// function for finding your AP team Costumer Count

function count_ap_team_costumer($ap_id)

{
	global $con;
	$fer=0;
	$sqlq="SELECT ap_id FROM `ap` WHERE `s_ap_id`='$ap_id'";
	$queryt=$con->query($sqlq);
	while($ref=mysqli_fetch_assoc($queryt))
	{
		$fer=$fer+count_total_costumer($ref[ap_id]);
	}
	return($fer);

}

//////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////// Team profile data
function daily_work_sheet_display($e_id){
	global $con;
	$cont=0;
	
	?>
	<h2>Daily Activity Sheet</h2>
	<p>Their Daily Working Report are Shown Here.</p>
	<div class="card-box table-responsive">
	<table id="datatable" class="table table-striped table-bordered" style="width:100%">
		<thead>
			<tr>
				<th>Sr. No.</th>
				<th>Type</th>
				<th>Date / Time</th>
				<th>Name (CL ID)</th>
				<th>Response Meter</th>
			</tr>
		</thead>
		<tbody>
			<?php 
	$dvvgf="SELECT * FROM `master_data_record_contact_list` WHERE `e_id`='$e_id' ORDER BY `date` DESC";
	
	$rfsdbn=$con->query($dvvgf);
	while($fghv=mysqli_fetch_assoc($rfsdbn))
	{ $cont++;
			$dsadasd="SELECT * FROM `contact_list` WHERE `cl_id`='$fghv[cl_id]'";
	 		$dcvvfffg=$con->query($dsadasd);
	 	while($waawer=mysqli_fetch_assoc($dcvvfffg))
		{ $e_name=$waawer[name];}
	 $per=$fghv[joining_opinion_level]*20;
			?>
		
		<tr>
			<td><?php echo $cont;?></td>
			<td><?php echo $fghv[type];?></td>
			<td><?php echo $fghv[date];?></td>
			<td><?php echo $e_name." (".$fghv[cl_id].")";?></td>
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
	<?php
}

///////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////// for seeing costumer contact list
function team_contact_list($e_id){
	global $con;
	$cont=0;
	
	?>
	<div class="card-box table-responsive">
	<table id="datatable" class="table table-striped table-bordered" style="width:100%">
		<thead>
			<tr>
				<th>Sr. No.</th>
				<th>Name</th>
				<th>Step</th>
				<th>Last Contact</th>
			</tr>
		</thead>
		<tbody>
			<?php 
	
			$dsadasd="SELECT * FROM `contact_list` WHERE `e_id`='$_GET[e_id]'";
	 		$dcvvfffg=$con->query($dsadasd);
	 	while($waawer=mysqli_fetch_assoc($dcvvfffg))
		{ 
			$step1="";$step2="";$step3="";$step4="";$step5="";
			/////////////////////////step 1 button
			$rgrhrff="SELECT * FROM `master_data_record_contact_list` WHERE `cl_id`='$waawer[cl_id]' AND `type`='CALL'";
			$gfg=$con->query($rgrhrff);
			if($gfg->num_rows == 0)
			{
				$step1="<button class='btn btn-round btn-danger'>S- 1</button>";
			}else{$step1="<button class='btn btn-round btn-success'>S- 1</button>";}
			
			////////////////////////step 2 button
			$rgrhrff="SELECT * FROM `master_data_record_contact_list` WHERE `cl_id`='$waawer[cl_id]' AND `type`='STP'";
			$gfg=$con->query($rgrhrff);
			if($gfg->num_rows == 0)
			{
				$step2="<button class='btn btn-round btn-danger'>S- 2</button>";
			}else{$step2="<button class='btn btn-round btn-success'>S- 2</button>";}
			////////////////////////step 3 button
			$rgrhrff="SELECT * FROM `master_data_record_contact_list` WHERE `cl_id`='$waawer[cl_id]' AND `type`='b_id'";
			$gfg=$con->query($rgrhrff);
			if($gfg->num_rows == 0)
			{
				$step3="<button class='btn btn-round btn-danger'>S- 3</button>";
			}else{$step3="<button class='btn btn-round btn-success'>S- 3</button>";}
			////////////////////////step 4 button
			$rgrhrff="SELECT * FROM `master_data_record_contact_list` WHERE `cl_id`='$waawer[cl_id]' AND `type`='F_UP'";
			$gfg=$con->query($rgrhrff);
			if($gfg->num_rows == 0)
			{
				$step4="<button class='btn btn-round btn-danger'>S- 4</button>";
			}else{$step4="<button class='btn btn-round btn-success'>S- 4</button>";}
			////////////////////////step 5 button
			$rgrhrff="SELECT * FROM `master_data_record_contact_list` WHERE `cl_id`='$waawer[cl_id]' AND `type`='JND'";
			$gfg=$con->query($rgrhrff);
			if($gfg->num_rows == 0)
			{
				$step5="<button class='btn btn-round btn-danger'>S - 5</button>";
			}else{$step5="<button class='btn btn-round btn-success'>S - 5</button>";}
			/////////////////////////////////////////////find last contact date
			$rgrhrffc="SELECT * FROM `master_data_record_contact_list` WHERE `cl_id`='$waawer[cl_id]' ORDER BY `mdrcl_id` DESC;";
			$gfgc=$con->query($rgrhrffc);
			$sdsdsdsx=mysqli_fetch_assoc($gfgc);
			
	 $per=$fghv[joining_opinion_level]*20;
		 $cont++;
			?>
		<tr>
			<td><?php echo $cont;?></td>
			<td><?php echo $waawer[name].$waawer[cl_id];?></td>
			<td><?php echo $step1.$step2.$step3.$step4.$step5;?></td>
			<td><?php echo $sdsdsdsx['date'];?></td>
		</tr>
		<?php 
	}
	?>
		</tbody>
	</table>
</div>
	<?php
}
////////////////////////////function find this month business
function this_month_business($ap_id)
{
    global $con, $date, $time;
    $bus=0;
    $s_date=date('Y-m-01', strtotime($date));
    $e_date=date('Y-m-t', strtotime($date));
    $sql="SELECT * FROM `ap_commission` WHERE `ap_id`='$ap_id'";
    $sq=$con->query($sql);
    while($s=$sq->fetch_assoc())
    {
        //echo $s_date."start date   ".$e_date."end Date   ".$s['date']."<br>";
        if(strtotime($s_date)<= strtotime($s['date']))
        {
           // echo "s";
            if(strtotime($e_date) >= strtotime($s['date'])){
                //echo "e";
                $bus=$bus+$s['amount'];
            }
        }
    }
    return $bus;
}
/////////////////////////////////////////////////////////////////// function for finding this month commission
function this_month_commission($ap_id)
{
    global $con, $date, $time;
    $bus=0;
    $s_date=date('Y-m-01', strtotime($date));
    $e_date=date('Y-m-t', strtotime($date));
    $sql="SELECT * FROM `ap_commission` WHERE `ap_id`='$ap_id'";
    $sq=$con->query($sql);
    while($s=$sq->fetch_assoc())
    {
        if(strtotime($s_date)<= strtotime($s['date']))
        {
            if(strtotime($e_date) >= strtotime($s['date'])){
                $bus=$bus+$s['c_amount'];
            }
        }
    }
    return $bus;
}
//////////////////////////////
////////////////////////////////function for finding Business on date
function own_business_on_date($ap_id, $datee)
{
    global $con;
    $bus=0;
    $sql="SELECT amount FROM `ap_commission` WHERE `ap_id`='$ap_id' AND `date`='$datee'";
    $sq=$con->query($sql);
    while($s=$sq->fetch_assoc())
    {
        $bus=$bus+$s['amount'];
    }
    return $bus;
}


/////////////////////////////////
///////////////////////////////////////////
///////////////////////function for new ap Appointment Commission
function new_ap_commission_distribution($txn_id)
{
    global $con,$date,$time;
    $sax="SELECT * FROM `ap_registration_txn_id` WHERE `txn_id`='$txn_id'";
    $qu=$con->query($sax);
    $detail=mysqli_fetch_assoc($qu);
    echo $detail[ap_id]." ap_id<br>";
    $sqly="SELECT * FROM `ap` WHERE `ap_id`='$detail[ap_id]'";
    $que=$con->query($sqly);
    $ap_id=$detail[ap_id];
    $amount=$detail[amount];
    
    if($que->num_rows != 0)
    {
        $ap_d=mysqli_fetch_assoc($que);
        $sql="UPDATE `ap` SET `status` = 'P' WHERE `ap`.`ap_id` = '$ap_id';";
	    $sql .="UPDATE `ap_registration_txn_id` SET `software_status` = 'c' WHERE `ap_registration_txn_id`.`aprtxn_id` = '$detail[aprtxn_id]';";
        ////////////////////////for 1 level commission
        if($ap_d['s_ap_id']!="")
        {
            $sqly1="SELECT * FROM `ap` WHERE `ap_id`='$ap_d[s_ap_id]'";
            $que1=$con->query($sqly1);
            if($que1->num_rows != 0)
            {
                $ap_d1=mysqli_fetch_assoc($que1);
                $c_amount1=$amount*$ap_d1[new_ap_lv1]/100;
                $sql .="INSERT INTO `ap_commission` (`apc_id`, `ap_id`, `from_id`, `lv`, `amount`, `c_amount`, `percentage`, `txn_id`, `s_e_id`, `date`, `time`, `new_ap_id`) VALUES (NULL, '$ap_d1[ap_id]', '$ap_id', '1', '$amount', '$c_amount1', '$ap_d1[new_ap_lv1]', '$txn_id', '', '$date', '$time', 'Y');";
                $sql .="INSERT INTO `ap_hold_wallet_ledger` (`aphw_id`, `ap_id`, `amount`, `type`, `date`, `time`, `txn_detail`) VALUES (NULL, '$ap_d1[ap_id]', '$c_amount1', '+', '$date', '$time', 'New AP Commission');";
                $ap_hw1=$ap_d1['hold_wallet']+$c_amount1;
                $sql .="UPDATE `ap` SET `hold_wallet` = '$ap_hw1' WHERE `ap`.`ap_id` = '$ap_d1[ap_id]';";
                
                //////////////////////////for 2 level commission
                if($ap_d1['s_ap_id']!="")
                {
                    $sqly2="SELECT * FROM `ap` WHERE `ap_id`='$ap_d1[s_ap_id]'";
                    $que2=$con->query($sqly2);
                    if($que2->num_rows != 0)
                    {
                        $ap_d2=mysqli_fetch_assoc($que2);
                        $c_amount2=$amount*$ap_d2[new_ap_lv2]/100;
                        $sql .="INSERT INTO `ap_commission` (`apc_id`, `ap_id`, `from_id`, `lv`, `amount`, `c_amount`, `percentage`, `txn_id`, `s_e_id`, `date`, `time`, `new_ap_id`) VALUES (NULL, '$ap_d2[ap_id]', '$ap_id', '2', '$amount', '$c_amount2', '$ap_d2[new_ap_lv2]', '$txn_id', '', '$date', '$time' , 'Y');";
                        $sql .="INSERT INTO `ap_hold_wallet_ledger` (`aphw_id`, `ap_id`, `amount`, `type`, `date`, `time`, `txn_detail`) VALUES (NULL, '$ap_d2[ap_id]', '$c_amount2', '+', '$date', '$time', 'New AP Commission');";
                        $ap_hw2=$ap_d2['hold_wallet']+$c_amount2;
                        $sql .="UPDATE `ap` SET `hold_wallet` = '$ap_hw2' WHERE `ap`.`ap_id` = '$ap_d2[ap_id]';";
                    }
                }
            }
        }
        while ($con->next_result()) {;}
        if($con->multi_query($sql)===TRUE)
        {
            
            while ($con->next_result()) {;}
            echo "<script>location.href='kyc.php?n=sp_ps';</script>";
        }
        else{
            echo "<script>location.href='complete_payment.php?n=sp_pf';</script>";
        }
    }
    
}
//echo new_ap_commission_distribution('2586873d74bbde366ef1');
//echo own_business_on_date('33', '2020-08-19');
?>

