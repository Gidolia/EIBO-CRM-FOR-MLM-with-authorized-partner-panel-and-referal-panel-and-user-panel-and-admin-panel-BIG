<?php 
//include("config.php");
$d=$_SESSION['ibo_id'];
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
	///////////////////////////////////password////////////////////////////
	
	
	////////////////////////////////////////////////////////////for steps
	
	if($n=="step_stp_s"){$script="new PNotify({
                                  title: 'Entered Successfully!',
                                  text: 'Stp entered successfully',
                                  type: 'success',
                                  styling: 'bootstrap3'
                              });";}
	elseif($n=="step_stp_f"){$script="new PNotify({
                                  title: 'Failed',
                                  text: 'Sorry Query fail Please try again',
                                  type: 'eror',
                                  styling: 'bootstrap3'
                              });";}
	elseif($n=="followup_entry_s"){$script="new PNotify({
                                  title: 'Entered Successfully!',
                                  text: 'Follow up record entered successfully',
                                  type: 'success',
                                  styling: 'bootstrap3'
                              });";}
	elseif($n=="followup_entry_f"){$script="new PNotify({
                                  title: 'Failed entry',
                                  text: 'Sorry query failed please try again',
                                  type: 'eror',
                                  styling: 'bootstrap3'
                              });";}
	elseif($n=="red_id_s"){$script="new PNotify({
                                  title: 'Entered Successfully!',
                                  text: 'Business ID record entered successfully',
                                  type: 'success',
                                  styling: 'bootstrap3'
                              });";}
	elseif($n=="red_id_f"){$script="new PNotify({
                                  title: 'Failed entry',
                                  text: 'Sorry query failed please try again',
                                  type: 'eror',
                                  styling: 'bootstrap3'
                              });";}
	elseif($n=="jnd_s"){$script="new PNotify({
                                  title: 'Congratulations!',
                                  text: 'This list Member joined successfully and recorded',
                                  type: 'success',
                                  styling: 'bootstrap3'
                              });";}
	elseif($n=="jnd_f"){$script="new PNotify({
                                  title: 'Failed entry',
                                  text: 'Sorry query failed please try again',
                                  type: 'eror',
                                  styling: 'bootstrap3'
                              });";}
	/////////////////////////////////////////////////
	/////////////////////////////////////////////////////for entring contact list notification
	if($n=="cl_ent_s")
	{
		$script="new PNotify({
                                  title: 'Entered Successfully!',
                                  text: 'Contact list entered successfully',
                                  type: 'success',
                                  styling: 'bootstrap3'
                              });";
		
	}
	if($n=="cl_ent_f")
	{
		$script="new PNotify({
                                  title: 'Failed!',
                                  text: 'failed to enter please try again',
                                  type: 'eror',
                                  styling: 'bootstrap3'
                              });";
		
	}
	///////////////////////////////////////////////////////////////////
	///////////////////////////////////////////////////////////////////profile update notification
	if($n=="pu_s")
	{
		$script="new PNotify({
                                  title: 'Updated Successfully!',
                                  text: 'Changes Applied Successfully',
                                  type: 'success',
                                  styling: 'bootstrap3'
                              });";
		
	}
	
	///////////////////////////////////////////////
	///////////////////////////////////////////////////////////delete contact list member contact_list.php
	if($n=="cl_del_s")
	{
		$script="new PNotify({
                                  title: 'Deleted Successfully!',
                                  text: 'stored in trash file',
                                  type: 'success',
                                  styling: 'bootstrap3'
                              });";
		
	}
	if($n=="cl_del_f_q")
	{
		$script="new PNotify({
                                  title: 'Failed!',
                                  text: 'Query failed please try again',
                                  type: 'eror',
                                  styling: 'bootstrap3'
                              });";
		
	}
	if($n=="cl_del_f_nm")
	{
		$script="new PNotify({
                                  title: 'Failed!',
                                  text: 'Detail doesnt matched please try again',
                                  type: 'eror',
                                  styling: 'bootstrap3'
                              });";
		
	}
	if($n=="cl_del_f_cn")
	{
		$script="new PNotify({
                                  title: 'Failed!',
                                  text: 'This list cannot be deleted',
                                  type: 'eror',
                                  styling: 'bootstrap3'
                              });";
		
	}
	///////////////////////////////////////////////////////////
	//////////////////////////////////////////////////////////////////change Profile Photo notification
	if($n=="cpp_s")
	{
		$script="new PNotify({
                                  title: 'Updated Successfully',
                                  text: 'Profile Photo changed Successfully',
                                  type: 'success',
                                  styling: 'bootstrap3'
                              });";
		
	}
	if($n=="cpp_f")
	{
		$script="new PNotify({
                                  title: 'Failed!',
                                  text: 'Query failed please try again',
                                  type: 'eror',
                                  styling: 'bootstrap3'
                              });";
		
	}
	///////////////////////////////////////////////////////////
	//////////////////////////////////////////////////////////////////change Daily targets notification daily_target.php
	if($n=="dt_s")
	{
		$script="new PNotify({
                                  title: 'Successfuly updated',
                                  text: 'Daily targets get updated',
                                  type: 'success',
                                  styling: 'bootstrap3'
                              });";
		
	}
	if($n=="dt_f")
	{
		$script="new PNotify({
                                  title: 'Failed!',
                                  text: 'Query failed please try again',
                                  type: 'eror',
                                  styling: 'bootstrap3'
                              });";
		
	}
	
	///////////////////////////////////////////////////////////
	//////////////////////////////////////////////////////////////////update or change upline notification sponser_id_enter.php
	if($n=="uu_s")
	{
		$script="new PNotify({
                                  title: 'Successfuly updated',
                                  text: 'your Upline Updated Successfully',
                                  type: 'success',
                                  styling: 'bootstrap3'
                              });";
		
	}
	if($n=="uup_f")
	{
		$script="new PNotify({
                                  title: 'Failed!',
                                  text: 'You enter wrong password',
                                  type: 'eror',
                                  styling: 'bootstrap3'
                              });";
		
	}
	if($n=="uu_f_id")
	{
		$script="new PNotify({
                                  title: 'Failed!',
                                  text: 'upline id not found please check upline ID',
                                  type: 'eror',
                                  styling: 'bootstrap3'
                              });";
		
	}
	if($n=="uu_f_q")
	{
		$script="new PNotify({
                                  title: 'Failed!',
                                  text: 'Query Failed Please Try Again',
                                  type: 'eror',
                                  styling: 'bootstrap3'
                              });";
		
	}
	
	//////////////////////////////////////////////////////////////////
	//////////////////////////////////////////////////////////////////////Subscription plan update notification billing.php
	if($n=="sp_s")
	{
		$script="new PNotify({
                                  title: 'Successfuly Subscribed !',
                                  text: 'Yor plan updated successfully',
                                  type: 'success',
                                  styling: 'bootstrap3'
                              });";
		
	}
	if($n=="sp_f")
	{
		$script="new PNotify({
                                  title: 'Failed!',
                                  text: 'sorry query failed please try again or contact admin',
                                  type: 'eror',
                                  styling: 'bootstrap3'
                              });";
		
	}
	if($n=="sp_pf")
	{
		$script="new PNotify({
                                  title: 'Failed!',
                                  text: 'Payment Failed please try again',
                                  type: 'eror',
                                  styling: 'bootstrap3'
                              });";
		
	}
	
	/////////////////////////////////////////////////////////////////
	//////////////////////////////////////////////////////////////////////Sugestion Box suggestion_box.php
 	if($n=="suggestion_s")
	{
		$script="new PNotify({
                                  title: 'Successfully Sended !',
                                  text: 'Your suggestion Recorded',
                                  type: 'success',
                                  styling: 'bootstrap3'
                              });";
		
	}
	if($n=="suggestion_f")
	{
		$script="new PNotify({
                                  title: 'Failed!',
                                  text: 'sorry query failed please try again',
                                  type: 'eror',
                                  styling: 'bootstrap3'
                              });";
		
	}
	
	//////////////////////////////return script data
	return($script);
}

function pass_change($old,$new,$new_confirm)
{
	global $con, $d, $date, $time;
	
                if($old==$_SESSION[ibo_password])
                {
                    if($new==$new_confirm)
                    {
						//echo $con;
					$enter_query="INSERT INTO `password_change_history` (`pch_id`, `e_id`, `date`, `time`, `old_pass`, `new_pass`) VALUES (NULL, '$_SESSION[ibo_id]', '$date', '$time', '$old', '$new');";
						if($con->query($enter_query) === TRUE)
						{ $update_query="UPDATE `employee` SET `password` = '$new' WHERE `employee`.`e_id` = $_SESSION[ibo_id];";
							if($con->query($update_query) === TRUE)
							{
								$_SESSION[ibo_password]=$new;
								$message="Your Password Changed Successfully";
	                            $sql="INSERT INTO `notification` (`n_id`, `e_id`, `dra_id`, `ap_id`, `notification`, `date`, `time`, `n_type`) VALUES (NULL, '$_SESSION[ibo_id]', '', '', '$message', '$date', '$time', 'Subscription');";
	                            $con->query($sql);
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




////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
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
///////////////////////////////////////////////////////////////////////////////
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
				<th>meter</th>
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
				$step5="<button class='btn btn-round btn-danger'>S- 5</button>";
			}else{$step5="<button class='btn btn-round btn-success'>S- 5</button>";}
			/////////////////////////////////////////////find last contact date
			$rgrhrffc="SELECT MAX(mdrcl_id) FROM `master_data_record_contact_list` WHERE `cl_id`='$waawer[cl_id]'";
			$gfgc=$con->query($rgrhrffc);
			$sdsdsdsx=mysqli_fetch_assoc($gfgc);
			
	 $per=$fghv[joining_opinion_level]*20;
		 $cont++;
			 
			?>
		
		<tr>
			<td><?php echo $cont;?></td>
			<td><?php echo $waawer[name]." (".$waawer[cl_id].")";?></td>
			<td><?php echo $step1.$step2.$step3.$step4.$step5;?></td>
			<td><?php echo $sdsdsdsx[date];?></td>
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
////////////////////////////////////////////////
///////////////////////////////////////////////
///////////////////////////////////////////////////////functions for finding their downline activity count
///////////note for using this function give $date or keep it value all
function find_own_activity($ibo_id,$date,$type)
{
	global $con;
	switch ($type)
	{
		case "STP":
			if($date== 1){$scrvedr="SELECT * FROM `master_data_record_contact_list` WHERE `e_id`='$ibo_id' AND `type`='STP'";}
			else{$scrvedr="SELECT * FROM `master_data_record_contact_list` WHERE `e_id`='$ibo_id' AND `date`='$date' AND `type`='STP'";}
			break;
		case "F_UP":
			if($date== 1){$scrvedr="SELECT * FROM `master_data_record_contact_list` WHERE `e_id`='$ibo_id' AND `type`='F_UP'";}
			else{$scrvedr="SELECT * FROM `master_data_record_contact_list` WHERE `e_id`='$ibo_id' AND `date`='$date' AND `type`='F_UP'";}
			break;
		case "b_id":
			if($date== 1){$scrvedr="SELECT * FROM `master_data_record_contact_list` WHERE `e_id`='$ibo_id' AND `type`='b_id'";}
			else{$scrvedr="SELECT * FROM `master_data_record_contact_list` WHERE `e_id`='$ibo_id' AND `date`='$date' AND `type`='b_id'";}
			break;
		case "CALL":
			if($date== 1){$scrvedr="SELECT * FROM `master_data_record_contact_list` WHERE `e_id`='$ibo_id' AND `type`='CALL'";}
			else{$scrvedr="SELECT * FROM `master_data_record_contact_list` WHERE `e_id`='$ibo_id' AND `date`='$date' AND `type`='CALL'";}
			break;
		case "JND":
			if($date== 1){$scrvedr="SELECT * FROM `master_data_record_contact_list` WHERE `e_id`='$ibo_id' AND `type`='JND'";}
			else{$scrvedr="SELECT * FROM `master_data_record_contact_list` WHERE `e_id`='$ibo_id' AND `date`='$date' AND `type`='JND'";}
			break;
		default :
			if($date== 1){$scrvedr="SELECT * FROM `master_data_record_contact_list` WHERE `e_id`='$ibo_id'";}
			else{$scrvedr="SELECT * FROM `master_data_record_contact_list` WHERE `e_id`='$ibo_id' AND `date`='$date'";}
			break;
			
	}
	$queeery=$con->query($scrvedr);
	$dfbhzl=mysqli_num_rows($queeery);
	return($dfbhzl);
}
/////////////////////////////////////////////
///////////////////////////////////////////////////functions for finding their downline activity total count
function find_downline_activity($ibo_id,$date,$type)
{
	global $con;
	$temp=array();
	$temp1=array();
	$grand_total=0;
	
	$sel1="SELECT * FROM `employee` WHERE `s_id`='$ibo_id'";
	$query1=$con->query($sel1)or die("sel1 query Failed");
	while($df1=mysqli_fetch_assoc($query1))
	{
		$temp[]=$df1[e_id];
		$grand_total=$grand_total+find_own_activity($df1[e_id],$date,$type);
	}
	
	///////////////////////////////////////////
	///////////////////////////////////////////////
	
	for($x=0; $x<count($temp); $x++)
	{
		$sel2="SELECT * FROM `employee` WHERE `s_id`='$temp[$x]'";
		$query2=$con->query($sel2)or die("sel1 query Failed");
		while($df2=mysqli_fetch_assoc($query2))
		{
			$temp1[]=$df2[e_id];
			$grand_total=$grand_total+find_own_activity($df2['e_id'],$date,$type);
		}
	}
	unset($temp);
	$temp=array();
	////////////////////////////////////////////////////////////////
	//////////////////////////////////////////////
	for($x=0; $x<count($temp1); $x++)
	{
		$sel3="SELECT * FROM `employee` WHERE `s_id`='$temp1[$x]'";
		$query3=$con->query($sel3)or die("sel1 query Failed");
		while($df3=mysqli_fetch_assoc($query3))
		{
			$temp[]=$df3['e_id'];
			$grand_total=$grand_total+find_own_activity($df3['e_id'],$date,$type);
		}
	}
	unset($temp1);
	$temp1=array();
	/////////////////////////////////
	////////////////////////////////////////
	for ($rff = 0; $rff <= 150; $rff++)
	{
		for($x=0; $x<count($temp); $x++)
		{
			$sel2="SELECT * FROM `employee` WHERE `s_id`='$temp[$x]'";
			$query2=$con->query($sel2)or die("sel1 query Failed");
			while($df2=mysqli_fetch_assoc($query2))
			{
				$temp1[]=$df2[e_id];
				$grand_total=$grand_total+find_own_activity($df2[e_id],$date,$type);
			}
		}
		unset($temp);
		$temp=array();
		////////////////////////////////////////////////////////////////
		//////////////////////////////////////////////
		for($x=0; $x<count($temp1); $x++)
		{
			$sel3="SELECT * FROM `employee` WHERE `s_id`='$temp1[$x]'";
			$query3=$con->query($sel3)or die("sel1 query Failed");
			while($df3=mysqli_fetch_assoc($query3))
			{
				$temp[]=$df3[e_id];
				$grand_total=$grand_total+find_own_activity($df3[e_id],$date,$type);
			}
		}
		unset($temp1);
		$temp1=array();
	}
	unset($temp);
	unset($temp1);
	return($grand_total);
}
////////////////////////////////////////////////
//////////////////////////////////////////////////////////function to count team member

	$sdfdsdsdsdsdsddsds=0;
function team_counter($sponsor_no)
{
	global $con, $sdfdsdsdsdsdsddsds;
	if($sponsor_no==0)
	{$tr=$_SESSION['ibo_id'];}else{$tr=$sponsor_no;}
	$sqlw="SELECT e_id FROM `employee` WHERE `s_id`='$tr';";
$sel1=$con->query($sqlw);
if($sel1->num_rows > 0){
while($fet1=mysqli_fetch_assoc($sel1))
{
	$sdfdsdsdsdsdsddsds++;
			team_counter($fet1[e_id]);
	
}
}
	return($sdfdsdsdsdsdsddsds);
}

//////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////function for updating daily target achivment history
function daily_targets_update($ibo_id)
{
	global $con, $date, $time;
	  $huut="SELECT * FROM `target_per_day` WHERE `e_id`='$_SESSION[ibo_id]' ORDER BY `tpd_id` DESC";
	  $queryu=mysqli_query($con,$huut);
	  $rotu=mysqli_fetch_assoc($queryu);
	  $date_of_starting=$rotu[date];
		
	                    ////////////////////////////// for finding last update date of target per day history table
	  $huuth="SELECT * FROM `target_per_day_history` WHERE `e_id`='$_SESSION[ibo_id]' AND `tpd_id`='$rotu[tpd_id]' ORDER BY `tpdh_id` DESC";
	  $queryuh=mysqli_query($con,$huuth);
	  $rotuh=mysqli_fetch_assoc($queryuh);
	  if(mysqli_num_rows($queryuh)== 0){$last_updated_date = $date_of_starting;}
	  else{$last_date = $rotuh[date];
		   $last_updated_date=date ("Y-m-d", strtotime("+1 day", strtotime($last_date)));
		  }
	if($last_updated_date!=$date)
	{
		//echo $last_updated_date.", <br>";
		$fdcvb=$last_updated_date;
		$date1=date_create($last_updated_date);
		$date2=date_create($date);
		$diff=date_diff($date1,$date2);
		$cdfvg=$diff->format("%R%a");
		//echo $cdfvg.", <br>";
		for($x=0; $x<=$cdfvg-1; $x++)
		{

			if($fdcvb!=$date){
				$c_stp=find_downline_activity($_SESSION[ibo_id],$fdcvb,"STP")+find_own_activity($_SESSION[ibo_id],$fdcvb,"STP");
				$c_f_up=find_downline_activity($_SESSION[ibo_id],$fdcvb,"F_UP")+find_own_activity($_SESSION[ibo_id],$fdcvb,"F_UP");
				$c_jnd=find_downline_activity($_SESSION[ibo_id],$fdcvb,"JND")+find_own_activity($_SESSION[ibo_id],$fdcvb,"JND");
				$stp_per=$c_stp*100/$rotu[stp_target];
				$f_up_per=$c_f_up*100/$rotu[follow_up_target];
				$jnd_per=$c_jnd*100/$rotu[joining_target];
				$average_percentage=$stp_per+$f_up_per+$jnd_per;
				$average_percentage1=$average_percentage/3;
				$ins_sql="INSERT INTO `target_per_day_history` (`tpdh_id`, `tpd_id`, `e_id`, `c_stp`, `c_follow_up`, `c_joined`, `t_stp`, `t_f_up`, `t_joining`, `data_date`, `date`, `time`, `average_completed_percentage`) VALUES (NULL, '$rotu[tpd_id]', '$_SESSION[ibo_id]', '$c_stp', '$c_f_up', '$c_jnd', '$rotu[stp_target]', '$rotu[follow_up_target]', '$rotu[joining_target]', '$fdcvb', '$date', '$time', '$average_percentage1');";
				mysqli_query($con,$ins_sql);
			}
			$fdcvb=date ("Y-m-d", strtotime("+1 day", strtotime($fdcvb)));
			//echo $fdcvb.", <br>";
		}
	}
	
}
///////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////function for graph fatching or last days index.php

function network_activity_graph($days)
{
	global $con, $date;
	if($days==15)
	{
		$date_1=date ("Y-m-d", strtotime("-1 day", strtotime($date)));
	  	$date_2=date ("Y-m-d", strtotime("-2 day", strtotime($date)));
		$date_3=date ("Y-m-d", strtotime("-3 day", strtotime($date)));
		$date_4=date ("Y-m-d", strtotime("-4 day", strtotime($date)));
		$date_5=date ("Y-m-d", strtotime("-5 day", strtotime($date)));
		$date_6=date ("Y-m-d", strtotime("-6 day", strtotime($date)));
		$date_7=date ("Y-m-d", strtotime("-7 day", strtotime($date)));
		$date_8=date ("Y-m-d", strtotime("-8 day", strtotime($date)));
		$date_9=date ("Y-m-d", strtotime("-9 day", strtotime($date)));
		$date_10=date ("Y-m-d", strtotime("-10 day", strtotime($date)));
		$date_11=date ("Y-m-d", strtotime("-11 day", strtotime($date)));
		$date_12=date ("Y-m-d", strtotime("-12 day", strtotime($date)));
		$date_13=date ("Y-m-d", strtotime("-12 day", strtotime($date)));
		$date_14=date ("Y-m-d", strtotime("-12 day", strtotime($date)));
		
		$date_activity_array=array(
		  array($date,find_downline_activity($_SESSION['ibo_id'],$date,1)+find_own_activity($_SESSION['ibo_id'],$date,1)),
		  array($date_1,find_downline_activity($_SESSION['ibo_id'],$date_1,1)+find_own_activity($_SESSION['ibo_id'],$date_1,1)),
		  array($date_2,find_downline_activity($_SESSION['ibo_id'],$date_2,1)+find_own_activity($_SESSION['ibo_id'],$date_2,1)),
		  array($date_3,find_downline_activity($_SESSION['ibo_id'],$date_3,1)+find_own_activity($_SESSION['ibo_id'],$date_3,1)),
		  array($date_4,find_downline_activity($_SESSION['ibo_id'],$date_4,1)+find_own_activity($_SESSION['ibo_id'],$date_4,1)),
		  array($date_5,find_downline_activity($_SESSION['ibo_id'],$date_5,1)+find_own_activity($_SESSION['ibo_id'],$date_5,1)),
		  array($date_6,find_downline_activity($_SESSION['ibo_id'],$date_6,1)+find_own_activity($_SESSION['ibo_id'],$date_6,1)),	
		  array($date_7,find_downline_activity($_SESSION['ibo_id'],$date_7,1)+find_own_activity($_SESSION['ibo_id'],$date_7,1)),
		  array($date_8,find_downline_activity($_SESSION['ibo_id'],$date_8,1)+find_own_activity($_SESSION['ibo_id'],$date_8,1)),
		  array($date_9,find_downline_activity($_SESSION['ibo_id'],$date_9,1)+find_own_activity($_SESSION['ibo_id'],$date_9,1)),
		  array($date_10,find_downline_activity($_SESSION['ibo_id'],$date_10,1)+find_own_activity($_SESSION['ibo_id'],$date_10,1)),
		 array($date_11,find_downline_activity($_SESSION['ibo_id'],$date_11,1)+find_own_activity($_SESSION['ibo_id'],$date_11,1)),
			array($date_12,find_downline_activity($_SESSION['ibo_id'],$date_12,1)+find_own_activity($_SESSION['ibo_id'],$date_12,1)),
			array($date_13,find_downline_activity($_SESSION['ibo_id'],$date_13,1)+find_own_activity($_SESSION['ibo_id'],$date_13,1)),
			array($date_14,find_downline_activity($_SESSION['ibo_id'],$date_14,1)+find_own_activity($_SESSION['ibo_id'],$date_14,1)),
			
	  );?>
		
		<script>
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,  
	title:{
		text: "Last 15 Day Activity"
	},
	axisY: {
		title: "Activity",
		valueFormatString: "#0.",
		suffix: "",
		stripLines: [{
			value: 100,
			label: "Average"
		}]
	},
	data: [{
		yValueFormatString: "### Activity",
		xValueFormatString: "DD-MM-YYYY",
		type: "splineArea",
		dataPoints: [
			
			{ x: new Date(20<?php echo date("y",strtotime($date_activity_array[0][0]));?>, <?php echo date("m",strtotime($date_activity_array[0][0]));?>, <?php echo date("d",strtotime($date_activity_array[0][0]));?>), y: <?php echo $date_activity_array[0][1];?> },
			 
			{ x: new Date(20<?php echo date("y",strtotime($date_activity_array[1][0]));?>, <?php echo date("m",strtotime($date_activity_array[1][0]));?>, <?php echo date("d",strtotime($date_activity_array[1][0]));?>), y: <?php echo $date_activity_array[1][1];?> },
			
			{ x: new Date(20<?php echo date("y",strtotime($date_activity_array[2][0]));?>, <?php echo date("m",strtotime($date_activity_array[2][0]));?>, <?php echo date("d",strtotime($date_activity_array[2][0]));?>), y: <?php echo $date_activity_array[2][1];?> },
			 
			{ x: new Date(20<?php echo date("y",strtotime($date_activity_array[3][0]));?>, <?php echo date("m",strtotime($date_activity_array[3][0]));?>, <?php echo date("d",strtotime($date_activity_array[3][0]));?>), y: <?php echo $date_activity_array[3][1];?> },
			
			{ x: new Date(20<?php echo date("y",strtotime($date_activity_array[4][0]));?>, <?php echo date("m",strtotime($date_activity_array[4][0]));?>, <?php echo date("d",strtotime($date_activity_array[4][0]));?>), y: <?php echo $date_activity_array[4][1];?> },
			 
			{ x: new Date(20<?php echo date("y",strtotime($date_activity_array[5][0]));?>, <?php echo date("m",strtotime($date_activity_array[5][0]));?>, <?php echo date("d",strtotime($date_activity_array[5][0]));?>), y: <?php echo $date_activity_array[5][1];?> },
			
			{ x: new Date(20<?php echo date("y",strtotime($date_activity_array[6][0]));?>, <?php echo date("m",strtotime($date_activity_array[6][0]));?>, <?php echo date("d",strtotime($date_activity_array[6][0]));?>), y: <?php echo $date_activity_array[6][1];?> },
			 
			 { x: new Date(20<?php echo date("y",strtotime($date_activity_array[7][0]));?>, <?php echo date("m",strtotime($date_activity_array[7][0]));?>, <?php echo date("d",strtotime($date_activity_array[7][0]));?>), y: <?php echo $date_activity_array[7][1];?> },
			
			{ x: new Date(20<?php echo date("y",strtotime($date_activity_array[8][0]));?>, <?php echo date("m",strtotime($date_activity_array[8][0]));?>, <?php echo date("d",strtotime($date_activity_array[8][0]));?>), y: <?php echo $date_activity_array[8][1];?> },
			 
			 { x: new Date(20<?php echo date("y",strtotime($date_activity_array[9][0]));?>, <?php echo date("m",strtotime($date_activity_array[9][0]));?>, <?php echo date("d",strtotime($date_activity_array[9][0]));?>), y: <?php echo $date_activity_array[9][1];?> },
			
			{ x: new Date(20<?php echo date("y",strtotime($date_activity_array[10][0]));?>, <?php echo date("m",strtotime($date_activity_array[10][0]));?>, <?php echo date("d",strtotime($date_activity_array[10][0]));?>), y: <?php echo $date_activity_array[10][1];?> },
			 
			 { x: new Date(20<?php echo date("y",strtotime($date_activity_array[11][0]));?>, <?php echo date("m",strtotime($date_activity_array[11][0]));?>, <?php echo date("d",strtotime($date_activity_array[11][0]));?>), y: <?php echo $date_activity_array[11][1];?> },
			
			{ x: new Date(20<?php echo date("y",strtotime($date_activity_array[12][0]));?>, <?php echo date("m",strtotime($date_activity_array[12][0]));?>, <?php echo date("d",strtotime($date_activity_array[12][0]));?>), y: <?php echo $date_activity_array[12][1];?> },
			 
			 { x: new Date(20<?php echo date("y",strtotime($date_activity_array[13][0]));?>, <?php echo date("m",strtotime($date_activity_array[13][0]));?>, <?php echo date("d",strtotime($date_activity_array[13][0]));?>), y: <?php echo $date_activity_array[13][1];?> },
			
			{ x: new Date(20<?php echo date("y",strtotime($date_activity_array[14][0]));?>, <?php echo date("m",strtotime($date_activity_array[14][0]));?>, <?php echo date("d",strtotime($date_activity_array[14][0]));?>), y: <?php echo $date_activity_array[14][1];?> },
					 
			
			
			
		]
	}]
});
chart.render();

}
</script>
<?php		
		/////////////////////////////////////for 30 days
	}
	
	if($days==30)
	{
		$date_1=date ("Y-m-d", strtotime("-1 day", strtotime($date)));
	  	$date_2=date ("Y-m-d", strtotime("-2 day", strtotime($date)));
		$date_3=date ("Y-m-d", strtotime("-3 day", strtotime($date)));
		$date_4=date ("Y-m-d", strtotime("-4 day", strtotime($date)));
		$date_5=date ("Y-m-d", strtotime("-5 day", strtotime($date)));
		$date_6=date ("Y-m-d", strtotime("-6 day", strtotime($date)));
		$date_7=date ("Y-m-d", strtotime("-7 day", strtotime($date)));
		$date_8=date ("Y-m-d", strtotime("-8 day", strtotime($date)));
		$date_9=date ("Y-m-d", strtotime("-9 day", strtotime($date)));
		$date_10=date ("Y-m-d", strtotime("-10 day", strtotime($date)));
		$date_11=date ("Y-m-d", strtotime("-11 day", strtotime($date)));
		$date_12=date ("Y-m-d", strtotime("-12 day", strtotime($date)));
		$date_13=date ("Y-m-d", strtotime("-13 day", strtotime($date)));
		$date_14=date ("Y-m-d", strtotime("-14 day", strtotime($date)));
		$date_15=date ("Y-m-d", strtotime("-15 day", strtotime($date)));
		$date_16=date ("Y-m-d", strtotime("-16 day", strtotime($date)));
		$date_17=date ("Y-m-d", strtotime("-17 day", strtotime($date)));
		$date_18=date ("Y-m-d", strtotime("-18 day", strtotime($date)));
		$date_19=date ("Y-m-d", strtotime("-19 day", strtotime($date)));
		$date_20=date ("Y-m-d", strtotime("-20 day", strtotime($date)));
		$date_21=date ("Y-m-d", strtotime("-21 day", strtotime($date)));
		$date_22=date ("Y-m-d", strtotime("-22 day", strtotime($date)));
		$date_23=date ("Y-m-d", strtotime("-23 day", strtotime($date)));
		$date_24=date ("Y-m-d", strtotime("-24 day", strtotime($date)));
		$date_25=date ("Y-m-d", strtotime("-25 day", strtotime($date)));
		$date_26=date ("Y-m-d", strtotime("-26 day", strtotime($date)));
		$date_27=date ("Y-m-d", strtotime("-27 day", strtotime($date)));
		$date_28=date ("Y-m-d", strtotime("-28 day", strtotime($date)));
		$date_29=date ("Y-m-d", strtotime("-29 day", strtotime($date)));
		
		$date_activity_array=array(
		  array($date,find_downline_activity($_SESSION['ibo_id'],$date,1)+find_own_activity($_SESSION['ibo_id'],$date,1)),
		  array($date_1,find_downline_activity($_SESSION['ibo_id'],$date_1,1)+find_own_activity($_SESSION['ibo_id'],$date_1,1)),
		  array($date_2,find_downline_activity($_SESSION['ibo_id'],$date_2,1)+find_own_activity($_SESSION['ibo_id'],$date_2,1)),
		  array($date_3,find_downline_activity($_SESSION['ibo_id'],$date_3,1)+find_own_activity($_SESSION['ibo_id'],$date_3,1)),
		  array($date_4,find_downline_activity($_SESSION['ibo_id'],$date_4,1)+find_own_activity($_SESSION['ibo_id'],$date_4,1)),
		  array($date_5,find_downline_activity($_SESSION['ibo_id'],$date_5,1)+find_own_activity($_SESSION['ibo_id'],$date_5,1)),
		  array($date_6,find_downline_activity($_SESSION['ibo_id'],$date_6,1)+find_own_activity($_SESSION['ibo_id'],$date_6,1)),	
		  array($date_7,find_downline_activity($_SESSION['ibo_id'],$date_7,1)+find_own_activity($_SESSION['ibo_id'],$date_7,1)),
		  array($date_8,find_downline_activity($_SESSION['ibo_id'],$date_8,1)+find_own_activity($_SESSION['ibo_id'],$date_8,1)),
		  array($date_9,find_downline_activity($_SESSION['ibo_id'],$date_9,1)+find_own_activity($_SESSION['ibo_id'],$date_9,1)),
		  array($date_10,find_downline_activity($_SESSION['ibo_id'],$date_10,1)+find_own_activity($_SESSION['ibo_id'],$date_10,1)),
		 array($date_11,find_downline_activity($_SESSION['ibo_id'],$date_11,1)+find_own_activity($_SESSION['ibo_id'],$date_11,1)),
			array($date_12,find_downline_activity($_SESSION['ibo_id'],$date_12,1)+find_own_activity($_SESSION['ibo_id'],$date_12,1)),
			array($date_13,find_downline_activity($_SESSION['ibo_id'],$date_13,1)+find_own_activity($_SESSION['ibo_id'],$date_13,1)),
			array($date_14,find_downline_activity($_SESSION['ibo_id'],$date_14,1)+find_own_activity($_SESSION['ibo_id'],$date_14,1)),
			array($date_15,find_downline_activity($_SESSION['ibo_id'],$date_15,1)+find_own_activity($_SESSION['ibo_id'],$date_15,1)),
			array($date_16,find_downline_activity($_SESSION['ibo_id'],$date_16,1)+find_own_activity($_SESSION['ibo_id'],$date_16,1)),
			array($date_17,find_downline_activity($_SESSION['ibo_id'],$date_17,1)+find_own_activity($_SESSION['ibo_id'],$date_17,1)),
			array($date_18,find_downline_activity($_SESSION['ibo_id'],$date_18,1)+find_own_activity($_SESSION['ibo_id'],$date_18,1)),
			array($date_19,find_downline_activity($_SESSION['ibo_id'],$date_19,1)+find_own_activity($_SESSION['ibo_id'],$date_19,1)),
			array($date_20,find_downline_activity($_SESSION['ibo_id'],$date_20,1)+find_own_activity($_SESSION['ibo_id'],$date_20,1)),
			array($date_21,find_downline_activity($_SESSION['ibo_id'],$date_21,1)+find_own_activity($_SESSION['ibo_id'],$date_21,1)),
			array($date_22,find_downline_activity($_SESSION['ibo_id'],$date_22,1)+find_own_activity($_SESSION['ibo_id'],$date_22,1)),
			array($date_23,find_downline_activity($_SESSION['ibo_id'],$date_23,1)+find_own_activity($_SESSION['ibo_id'],$date_23,1)),
			array($date_24,find_downline_activity($_SESSION['ibo_id'],$date_24,1)+find_own_activity($_SESSION['ibo_id'],$date_24,1)),
			array($date_25,find_downline_activity($_SESSION['ibo_id'],$date_25,1)+find_own_activity($_SESSION['ibo_id'],$date_25,1)),
			array($date_26,find_downline_activity($_SESSION['ibo_id'],$date_26,1)+find_own_activity($_SESSION['ibo_id'],$date_26,1)),
			array($date_27,find_downline_activity($_SESSION['ibo_id'],$date_27,1)+find_own_activity($_SESSION['ibo_id'],$date_27,1)),
			array($date_28,find_downline_activity($_SESSION['ibo_id'],$date_28,1)+find_own_activity($_SESSION['ibo_id'],$date_28,1)),
			array($date_29,find_downline_activity($_SESSION['ibo_id'],$date_29,1)+find_own_activity($_SESSION['ibo_id'],$date_29,1)),
			
	  );?>
		
		<script>
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,  
	title:{
		text: "Last 30 Day Activity"
	},
	axisY: {
		title: "Activity",
		valueFormatString: "#0.",
		suffix: "",
		stripLines: [{
			value: 100,
			label: "Average"
		}]
	},
	data: [{
		yValueFormatString: "### Activity",
		xValueFormatString: "DD-MM-YYYY",
		type: "splineArea",
		dataPoints: [
			
			{ x: new Date(20<?php echo date("y",strtotime($date_activity_array[0][0]));?>, <?php echo date("m",strtotime($date_activity_array[0][0]));?>, <?php echo date("d",strtotime($date_activity_array[0][0]));?>), y: <?php echo $date_activity_array[0][1];?> },
			 
			{ x: new Date(20<?php echo date("y",strtotime($date_activity_array[1][0]));?>, <?php echo date("m",strtotime($date_activity_array[1][0]));?>, <?php echo date("d",strtotime($date_activity_array[1][0]));?>), y: <?php echo $date_activity_array[1][1];?> },
			
			{ x: new Date(20<?php echo date("y",strtotime($date_activity_array[2][0]));?>, <?php echo date("m",strtotime($date_activity_array[2][0]));?>, <?php echo date("d",strtotime($date_activity_array[2][0]));?>), y: <?php echo $date_activity_array[2][1];?> },
			 
			{ x: new Date(20<?php echo date("y",strtotime($date_activity_array[3][0]));?>, <?php echo date("m",strtotime($date_activity_array[3][0]));?>, <?php echo date("d",strtotime($date_activity_array[3][0]));?>), y: <?php echo $date_activity_array[3][1];?> },
			
			{ x: new Date(20<?php echo date("y",strtotime($date_activity_array[4][0]));?>, <?php echo date("m",strtotime($date_activity_array[4][0]));?>, <?php echo date("d",strtotime($date_activity_array[4][0]));?>), y: <?php echo $date_activity_array[4][1];?> },
			 
			{ x: new Date(20<?php echo date("y",strtotime($date_activity_array[5][0]));?>, <?php echo date("m",strtotime($date_activity_array[5][0]));?>, <?php echo date("d",strtotime($date_activity_array[5][0]));?>), y: <?php echo $date_activity_array[5][1];?> },
			
			{ x: new Date(20<?php echo date("y",strtotime($date_activity_array[6][0]));?>, <?php echo date("m",strtotime($date_activity_array[6][0]));?>, <?php echo date("d",strtotime($date_activity_array[6][0]));?>), y: <?php echo $date_activity_array[6][1];?> },
			 
			 { x: new Date(20<?php echo date("y",strtotime($date_activity_array[7][0]));?>, <?php echo date("m",strtotime($date_activity_array[7][0]));?>, <?php echo date("d",strtotime($date_activity_array[7][0]));?>), y: <?php echo $date_activity_array[7][1];?> },
			
			{ x: new Date(20<?php echo date("y",strtotime($date_activity_array[8][0]));?>, <?php echo date("m",strtotime($date_activity_array[8][0]));?>, <?php echo date("d",strtotime($date_activity_array[8][0]));?>), y: <?php echo $date_activity_array[8][1];?> },
			 
			 { x: new Date(20<?php echo date("y",strtotime($date_activity_array[9][0]));?>, <?php echo date("m",strtotime($date_activity_array[9][0]));?>, <?php echo date("d",strtotime($date_activity_array[9][0]));?>), y: <?php echo $date_activity_array[9][1];?> },
			
			{ x: new Date(20<?php echo date("y",strtotime($date_activity_array[10][0]));?>, <?php echo date("m",strtotime($date_activity_array[10][0]));?>, <?php echo date("d",strtotime($date_activity_array[10][0]));?>), y: <?php echo $date_activity_array[10][1];?> },
			 
			 { x: new Date(20<?php echo date("y",strtotime($date_activity_array[11][0]));?>, <?php echo date("m",strtotime($date_activity_array[11][0]));?>, <?php echo date("d",strtotime($date_activity_array[11][0]));?>), y: <?php echo $date_activity_array[11][1];?> },
			
			{ x: new Date(20<?php echo date("y",strtotime($date_activity_array[12][0]));?>, <?php echo date("m",strtotime($date_activity_array[12][0]));?>, <?php echo date("d",strtotime($date_activity_array[12][0]));?>), y: <?php echo $date_activity_array[12][1];?> },
			 
			 { x: new Date(20<?php echo date("y",strtotime($date_activity_array[13][0]));?>, <?php echo date("m",strtotime($date_activity_array[13][0]));?>, <?php echo date("d",strtotime($date_activity_array[13][0]));?>), y: <?php echo $date_activity_array[13][1];?> },
			
			{ x: new Date(20<?php echo date("y",strtotime($date_activity_array[14][0]));?>, <?php echo date("m",strtotime($date_activity_array[14][0]));?>, <?php echo date("d",strtotime($date_activity_array[14][0]));?>), y: <?php echo $date_activity_array[14][1];?> },
			 
			 { x: new Date(20<?php echo date("y",strtotime($date_activity_array[15][0]));?>, <?php echo date("m",strtotime($date_activity_array[15][0]));?>, <?php echo date("d",strtotime($date_activity_array[15][0]));?>), y: <?php echo $date_activity_array[15][1];?> },
			
			{ x: new Date(20<?php echo date("y",strtotime($date_activity_array[16][0]));?>, <?php echo date("m",strtotime($date_activity_array[16][0]));?>, <?php echo date("d",strtotime($date_activity_array[16][0]));?>), y: <?php echo $date_activity_array[16][1];?> },
			 
			 { x: new Date(20<?php echo date("y",strtotime($date_activity_array[17][0]));?>, <?php echo date("m",strtotime($date_activity_array[17][0]));?>, <?php echo date("d",strtotime($date_activity_array[17][0]));?>), y: <?php echo $date_activity_array[17][1];?> },
			
			{ x: new Date(20<?php echo date("y",strtotime($date_activity_array[18][0]));?>, <?php echo date("m",strtotime($date_activity_array[18][0]));?>, <?php echo date("d",strtotime($date_activity_array[18][0]));?>), y: <?php echo $date_activity_array[18][1];?> },
			 
			 { x: new Date(20<?php echo date("y",strtotime($date_activity_array[19][0]));?>, <?php echo date("m",strtotime($date_activity_array[19][0]));?>, <?php echo date("d",strtotime($date_activity_array[19][0]));?>), y: <?php echo $date_activity_array[19][1];?> },
			
			{ x: new Date(20<?php echo date("y",strtotime($date_activity_array[20][0]));?>, <?php echo date("m",strtotime($date_activity_array[20][0]));?>, <?php echo date("d",strtotime($date_activity_array[20][0]));?>), y: <?php echo $date_activity_array[20][1];?> },
			 
			 { x: new Date(20<?php echo date("y",strtotime($date_activity_array[21][0]));?>, <?php echo date("m",strtotime($date_activity_array[21][0]));?>, <?php echo date("d",strtotime($date_activity_array[21][0]));?>), y: <?php echo $date_activity_array[21][1];?> },
			
			{ x: new Date(20<?php echo date("y",strtotime($date_activity_array[22][0]));?>, <?php echo date("m",strtotime($date_activity_array[22][0]));?>, <?php echo date("d",strtotime($date_activity_array[22][0]));?>), y: <?php echo $date_activity_array[22][1];?> },
			 
			 { x: new Date(20<?php echo date("y",strtotime($date_activity_array[23][0]));?>, <?php echo date("m",strtotime($date_activity_array[23][0]));?>, <?php echo date("d",strtotime($date_activity_array[23][0]));?>), y: <?php echo $date_activity_array[23][1];?> },
			
			{ x: new Date(20<?php echo date("y",strtotime($date_activity_array[24][0]));?>, <?php echo date("m",strtotime($date_activity_array[24][0]));?>, <?php echo date("d",strtotime($date_activity_array[24][0]));?>), y: <?php echo $date_activity_array[24][1];?> },
			 
			 { x: new Date(20<?php echo date("y",strtotime($date_activity_array[25][0]));?>, <?php echo date("m",strtotime($date_activity_array[25][0]));?>, <?php echo date("d",strtotime($date_activity_array[25][0]));?>), y: <?php echo $date_activity_array[25][1];?> },
			
			{ x: new Date(20<?php echo date("y",strtotime($date_activity_array[26][0]));?>, <?php echo date("m",strtotime($date_activity_array[26][0]));?>, <?php echo date("d",strtotime($date_activity_array[26][0]));?>), y: <?php echo $date_activity_array[26][1];?> },
			 
			 { x: new Date(20<?php echo date("y",strtotime($date_activity_array[27][0]));?>, <?php echo date("m",strtotime($date_activity_array[27][0]));?>, <?php echo date("d",strtotime($date_activity_array[27][0]));?>), y: <?php echo $date_activity_array[27][1];?> },
			
			{ x: new Date(20<?php echo date("y",strtotime($date_activity_array[28][0]));?>, <?php echo date("m",strtotime($date_activity_array[28][0]));?>, <?php echo date("d",strtotime($date_activity_array[28][0]));?>), y: <?php echo $date_activity_array[28][1];?> },
			 
			 { x: new Date(20<?php echo date("y",strtotime($date_activity_array[29][0]));?>, <?php echo date("m",strtotime($date_activity_array[29][0]));?>, <?php echo date("d",strtotime($date_activity_array[29][0]));?>), y: <?php echo $date_activity_array[29][1];?> },
			 
					 
			
			
			
		]
	}]
});
chart.render();

}
</script>
<?php		
		
	}
	
	
}

/////////////////////////////////////////////
///////////////////////////////////////////////////functions for finding their downline activity display
function daily_work_sheet_displayj($e_id){
	global $con;
	$cont=0;
	

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
}
function find_downline_activity_table($ibo_id)
{
	global $con;
	$temp=array();
	$temp1=array();
	$grand_total=0;
	?>
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
	$sel1="SELECT * FROM `employee` WHERE `s_id`='$ibo_id'";
	$query1=$con->query($sel1)or die("sel1 query Failed");
	while($df1=mysqli_fetch_assoc($query1))
	{
		$temp[]=$df1[e_id];
		daily_work_sheet_displayj($df1['e_id']);
		//echo "gh1";
	}

	///////////////////////////////////////////
	///////////////////////////////////////////////
	
	for($x=0; $x<count($temp); $x++)
	{
		$sel2="SELECT * FROM `employee` WHERE `s_id`='$temp[$x]'";
		$query2=$con->query($sel2)or die("sel1 query Failed");
		while($df2=mysqli_fetch_assoc($query2))
		{
			$temp1[]=$df2[e_id];
		    daily_work_sheet_displayj($df2['e_id']);
		    	//echo "gh2";
		}
	}
	unset($temp);
	$temp=array();

	////////////////////////////////////////////////////////////////
	//////////////////////////////////////////////
	for($x=0; $x<count($temp1); $x++)
	{
	    
		$sel3="SELECT * FROM `employee` WHERE `s_id`='$temp1[$x]'";
		
		$query3=$con->query($sel3)or die("sel1 query Failed");
		while($df3=mysqli_fetch_assoc($query3))
		{
			$temp[]=$df3['e_id'];
	    	daily_work_sheet_displayj($df3['e_id']);
	    	//echo $df3['e_id'];
		}
	}
	unset($temp1);
	$temp1=array();
	
	/////////////////////////////////
	////////////////////////////////////////
	for ($rff = 0; $rff <= 150; $rff++)
	{
		for($x=0; $x<count($temp); $x++)
		{
			$sel2="SELECT * FROM `employee` WHERE `s_id`='$temp[$x]'";
			$query2=$con->query($sel2)or die("sel1 query Failed");
			while($df2=mysqli_fetch_assoc($query2))
			{
				$temp1[]=$df2[e_id];
				daily_work_sheet_displayj($df2[e_id]);
			}
		}
		//echo "gh4";
		unset($temp);
		$temp=array();
		////////////////////////////////////////////////////////////////
		//////////////////////////////////////////////
		for($x=0; $x<count($temp1); $x++)
		{
			$sel3="SELECT * FROM `employee` WHERE `s_id`='$temp1[$x]'";
			$query3=$con->query($sel3)or die("sel1 query Failed");
			while($df3=mysqli_fetch_assoc($query3))
			{
				$temp[]=$df3[e_id];
				daily_work_sheet_displayj($df3[e_id]);
			}
		}
		unset($temp1);
		$temp1=array();
	//	echo "gh";
	}
	unset($temp);
	unset($temp1);
	?>
	</tbody>
	</table>
	</div>
	<?php
	return($grand_total);
}


////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////function for states
///////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////
///////////////////////////////////////////////////////functions for finding their downline activity count by states
///////////note for using this function give $date or keep it value all
function find_own_activity_state($ibo_id,$date,$type,$state)
{
	global $con;
	$sel1="SELECT e_id,s_id FROM `employee` WHERE `e_id`='$ibo_id' AND `state`='$state'";
	//echo "1";
	$query=$con->query($sel1)or die("sel1 query Failed");
	if($query->num_rows>0)
	{
	//echo "2";
	switch ($type)
	{
		case "STP":
			if($date== 1){$scrvedr="SELECT * FROM `master_data_record_contact_list` WHERE `e_id`='$ibo_id' AND `type`='STP'";}
			else{$scrvedr="SELECT * FROM `master_data_record_contact_list` WHERE `e_id`='$ibo_id' AND `date`='$date' AND `type`='STP'";}
			break;
		case "F_UP":
			if($date== 1){$scrvedr="SELECT * FROM `master_data_record_contact_list` WHERE `e_id`='$ibo_id' AND `type`='F_UP'";}
			else{$scrvedr="SELECT * FROM `master_data_record_contact_list` WHERE `e_id`='$ibo_id' AND `date`='$date' AND `type`='F_UP'";}
			break;
		case "b_id":
			if($date== 1){$scrvedr="SELECT * FROM `master_data_record_contact_list` WHERE `e_id`='$ibo_id' AND `type`='b_id'";}
			else{$scrvedr="SELECT * FROM `master_data_record_contact_list` WHERE `e_id`='$ibo_id' AND `date`='$date' AND `type`='b_id'";}
			break;
		case "CALL":
			if($date== 1){$scrvedr="SELECT * FROM `master_data_record_contact_list` WHERE `e_id`='$ibo_id' AND `type`='CALL'";}
			else{$scrvedr="SELECT * FROM `master_data_record_contact_list` WHERE `e_id`='$ibo_id' AND `date`='$date' AND `type`='CALL'";}
			break;
		case "JND":
			if($date== 1){$scrvedr="SELECT * FROM `master_data_record_contact_list` WHERE `e_id`='$ibo_id' AND `type`='JND'";}
			else{$scrvedr="SELECT * FROM `master_data_record_contact_list` WHERE `e_id`='$ibo_id' AND `date`='$date' AND `type`='JND'";}
			break;
		default :
			if($date== 1){$scrvedr="SELECT * FROM `master_data_record_contact_list` WHERE `e_id`='$ibo_id'";}
			else{$scrvedr="SELECT * FROM `master_data_record_contact_list` WHERE `e_id`='$ibo_id' AND `date`='$date'";}
			break;
			
	}
	}
	$queeery=$con->query($scrvedr);
	$dfbhzl=mysqli_num_rows($queeery);
	//echo $dfbhzl;
	return($dfbhzl);
}

/////////////////////////////////////////////
///////////////////////////////////////////////////functions for finding their downline activity total count
function find_downline_activity_state($ibo_id,$date,$type,$state)
{
	global $con;
	$temp=array();
	$temp1=array();
	$grand_total=0;
	
	$sel1="SELECT e_id,s_id FROM `employee` WHERE `s_id`='$ibo_id'";
	$query1=$con->query($sel1)or die("sel1 query Failed");
	while($df1=mysqli_fetch_assoc($query1))
	{
		$temp[]=$df1[e_id];
		$grand_total=$grand_total+find_own_activity_state($df1[e_id],$date,$type,$state);
	}
	
	///////////////////////////////////////////
	///////////////////////////////////////////////
	
	for($x=0; $x<count($temp); $x++)
	{
		$sel2="SELECT e_id,s_id FROM `employee` WHERE `s_id`='$temp[$x]'";
		$query2=$con->query($sel2)or die("sel1 query Failed");
		while($df2=mysqli_fetch_assoc($query2))
		{
			$temp1[]=$df2[e_id];
			$grand_total=$grand_total+find_own_activity_state($df2['e_id'],$date,$type,$state);
		}
	}
	unset($temp);
	$temp=array();
	////////////////////////////////////////////////////////////////
	//////////////////////////////////////////////
	for($x=0; $x<count($temp1); $x++)
	{
		$sel3="SELECT e_id,s_id FROM `employee` WHERE `s_id`='$temp1[$x]'";
		$query3=$con->query($sel3)or die("sel1 query Failed");
		while($df3=mysqli_fetch_assoc($query3))
		{
			$temp[]=$df3['e_id'];
			$grand_total=$grand_total+find_own_activity_state($df3['e_id'],$date,$type,$state);
		}
	}
	unset($temp1);
	$temp1=array();
	/////////////////////////////////
	////////////////////////////////////////
	for ($rff = 0; $rff <= 150; $rff++)
	{
		for($x=0; $x<count($temp); $x++)
		{
			$sel2="SELECT e_id,s_id FROM `employee` WHERE `s_id`='$temp[$x]'";
			$query2=$con->query($sel2)or die("sel1 query Failed");
			while($df2=mysqli_fetch_assoc($query2))
			{
				$temp1[]=$df2[e_id];
				$grand_total=$grand_total+find_own_activity_state($df2[e_id],$date,$type,$state);
			}
		}
		unset($temp);
		$temp=array();
		////////////////////////////////////////////////////////////////
		//////////////////////////////////////////////
		for($x=0; $x<count($temp1); $x++)
		{
			$sel3="SELECT e_id,s_id FROM `employee` WHERE `s_id`='$temp1[$x]'";
			$query3=$con->query($sel3)or die("sel1 query Failed");
			while($df3=mysqli_fetch_assoc($query3))
			{
				$temp[]=$df3[e_id];
				$grand_total=$grand_total+find_own_activity_state($df3[e_id],$date,$type,$state);
			}
		}
		unset($temp1);
		$temp1=array();
	}
	unset($temp);
	unset($temp1);
	return($grand_total);
}
////////////////////////////////////////////////
//////////////////////////////////////////////////////////function to count team member

	$sdfdsdsdsdsdsddsds=0;
function team_counter_state($sponsor_no,$state)
{
	global $con, $sdfdsdsdsdsdsddsds;
	if($sponsor_no==0)
	{$tr=$_SESSION['ibo_id'];}else{$tr=$sponsor_no;}
	$sqlw="SELECT e_id FROM `employee` WHERE `s_id`='$tr' AND `state`='$state';";
$sel1=$con->query($sqlw);
if($sel1->num_rows > 0){
while($fet1=mysqli_fetch_assoc($sel1))
{
	$sdfdsdsdsdsdsddsds++;
			team_counter_state($fet1[e_id],$state);
	
}
}
	return($sdfdsdsdsdsdsddsds);
}



///////////////////////////////function for ap commission
function ap_commission($ap_id,$amount,$txn_id,$e_id)
{
    global $con,$date,$time;
    $sqly="SELECT * FROM `ap` WHERE `ap_id`='$ap_id'";
    $que=$con->query($sqly);
    if($que->num_rows != 0)
    {
        //////////////////own commission
        $ap_d=mysqli_fetch_assoc($que);
        $c_amount=$amount*$ap_d[own_commission]/100;
        $sql="INSERT INTO `ap_commission` (`apc_id`, `ap_id`, `from_id`, `lv`, `amount`, `c_amount`, `percentage`, `txn_id`, `s_e_id`, `date`, `time`) VALUES (NULL, '$ap_id', '', '0', '$amount', '$c_amount', '$ap_d[own_commission]', '$txn_id', '$e_id', '$date', '$time');";
        $sql .="INSERT INTO `ap_hold_wallet_ledger` (`aphw_id`, `ap_id`, `amount`, `type`, `date`, `time`, `txn_detail`) VALUES (NULL, '$ap_id', '$c_amount', '+', '$date', '$time', 'Subscription Commission');";
        $ap_hw=$ap_d['hold_wallet']+$c_amount;
        $sql .="UPDATE `ap` SET `hold_wallet` = '$ap_hw' WHERE `ap`.`ap_id` = '$ap_id';";
        ////////////////////////for 1 level commission
        if($ap_d['s_ap_id']!="")
        {
            $sqly1="SELECT * FROM `ap` WHERE `ap_id`='$ap_d[s_ap_id]'";
            $que1=$con->query($sqly1);
            if($que1->num_rows != 0)
            {
                $ap_d1=mysqli_fetch_assoc($que1);
                $c_amount1=$amount*$ap_d1[lv1]/100;
                $sql .="INSERT INTO `ap_commission` (`apc_id`, `ap_id`, `from_id`, `lv`, `amount`, `c_amount`, `percentage`, `txn_id`, `s_e_id`, `date`, `time`) VALUES (NULL, '$ap_d1[ap_id]', '$ap_id', '1', '$amount', '$c_amount1', '$ap_d1[lv1]', '$txn_id', '$e_id', '$date', '$time');";
                $sql .="INSERT INTO `ap_hold_wallet_ledger` (`aphw_id`, `ap_id`, `amount`, `type`, `date`, `time`, `txn_detail`) VALUES (NULL, '$ap_d1[ap_id]', '$c_amount1', '+', '$date', '$time', 'Subscription Commission');";
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
                        $c_amount2=$amount*$ap_d2[lv2]/100;
                        $sql .="INSERT INTO `ap_commission` (`apc_id`, `ap_id`, `from_id`, `lv`, `amount`, `c_amount`, `percentage`, `txn_id`, `s_e_id`, `date`, `time`) VALUES (NULL, '$ap_d2[ap_id]', '$ap_id', '2', '$amount', '$c_amount2', '$ap_d2[lv2]', '$txn_id', '$e_id', '$date', '$time');";
                        $sql .="INSERT INTO `ap_hold_wallet_ledger` (`aphw_id`, `ap_id`, `amount`, `type`, `date`, `time`, `txn_detail`) VALUES (NULL, '$ap_d2[ap_id]', '$c_amount2', '+', '$date', '$time', 'Subscription Commission');";
                        $ap_hw2=$ap_d2['hold_wallet']+$c_amount2;
                        $sql .="UPDATE `ap` SET `hold_wallet` = '$ap_hw2' WHERE `ap`.`ap_id` = '$ap_d2[ap_id]';";
                    }
                }
            }
        }
        if($con->multi_query($sql)===TRUE)
        {
            echo "ap paid";
            while ($con->next_result()) {;}
        }
        else{
            echo "ap pay Failed";
        }
    }
}
//////////////////////////////////function Payment For dra
function dra_commission($dra_id,$amount,$txn_id,$e_id)
{
    global $con,$date,$time;
    
    $sqly="SELECT * FROM `employee` WHERE `e_id`='$dra_id' AND `dra_status`='active'";
    $quey=$con->query($sqly);
    if($quey->num_rows>0)
    {
        $dra_d=mysqli_fetch_assoc($quey);
        $c_amount=$amount*$dra_d['dra_commission_percentage']/100;
        $sqlw="INSERT INTO `dra_commission` (`drac_id`, `dra_id`, `date`, `time`, `s_e_id`, `amount`, `c_amount`, `percentage`) VALUES (NULL, '$dra_id', '$date', '$time', '$e_id', '$amount', '$c_amount', '$dra_d[dra_commission_percentage]');";
        $sqlw1="INSERT INTO `dra_hold_wallet_ledger` (`drahwl_id`, `dra_id`, `amount`, `date`, `time`, `type`, `txn_detail`) VALUES (NULL, '$dra_id', '$c_amount', '$date', '$time', '+', 'Subscription Commission');";
        $hw=$dra_d['dra_hold_wallet']+$c_amount;
        $sqlw2="UPDATE `employee` SET `dra_hold_wallet` = '$hw' WHERE `employee`.`e_id` = '$dra_id';";
        if($con->query($sqlw)===TRUE && $con->query($sqlw1)===TRUE && $con->query($sqlw2)===TRUE)
        {
            echo "dra paid";
        }
        else{
            echo "dra pay Failed";
        }
    }
}

////////////////////////////////////////////////function for distributing commission
function distribute_commission($amount,$txn_id,$e_id)
{
    global $con,$date,$time;
    $sqly="SELECT * FROM `employee` WHERE `e_id`='$e_id'";
    $que=$con->query($sqly);
    if($que->num_rows>0)
    {
        $e_d=mysqli_fetch_assoc($que);
        if($e_d['dra_id']!="")
        {
            if($e_d['ap_id']!="")
            {
                echo "dra entry";
                ap_commission($e_d['ap_id'],$amount,$txn_id,$e_id);
                dra_commission($e_d['dra_id'],$amount,$txn_id,$e_id);
                
                echo "ap id";
            }
            else
            {
                $sqlyw="SELECT * FROM `employee` WHERE `e_id`='$e_d[dra_id]'";
                $quew=$con->query($sqlyw);
                $mee=mysqli_fetch_assoc($sqlyw);
                $sql_u="UPDATE `employee` SET `ap_id` = '$mee[s_ap_id]' WHERE `employee`.`e_id` = '$e_id';";
                if($con->query($sql_u)===TRUE)
                {
                    echo "dra entry1";
                    ap_commission($mee['s_ap_id'],$amount,$txn_id,$e_id);
                    dra_commission($e_d['dra_id'],$amount,$txn_id,$e_id);
                    
                     echo "ap id1";
                }
            }
        }
        elseif($e_d['ap_id']!="")
        {
            ap_commission($e_d['ap_id'],$amount,$txn_id,$e_id);
             echo "ap id2";
        }
    }
}





		//daily_targets_update($_SESSION[ibo_id]);
		//echo find_downline_activity(1,$date);
		//echo find_own_activity(1,1,"STP");
       // pass_change('123','1','1');
      // daily_work_sheet_display('1','');
      // daily_work_sheet_display('1','');
      //find_own_activity_state('1','2020-05-07','STP','MADHYA PRADESH');


?>
