<?php 
//include("config.php");
//$d=$_SESSION[ibo_id];
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

	//////////////////////////////return script data
	return($script);
}

function pass_change($old,$new,$new_confirm,$w_id)
{
	global $con, $date, $time;
	
                if($old==$_SESSION[admin_password])
                {
                    if($new==$new_confirm)
                    {
						//echo $con;
						$enter_query="INSERT INTO `worker_pass_change` (`wpc_id`, `w_id`, `date`, `time`, `old_pass`, `new_pass`) VALUES (NULL, '$_SESSION[admin_id]', '$date', '$time', '$old', '$new');";
						if($con->query($enter_query) === TRUE)
						{ 	$update_query="UPDATE `worker` SET `password` = '$new' WHERE `worker`.`w_id` = $_SESSION[admin_id];";
							
							if($con->query($update_query) === TRUE)
							{
							    $_SESSION[admin_password]=$new;
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
////////////////////////////////function total customer count
function count_total_costumer($ap_id)

{

	global $con;

	$sqlq="SELECT * FROM `employee` WHERE `ap_id`='$ap_id'";

	$queryt=$con->query($sqlq);

	$count=mysqli_num_rows($queryt);

	return($count);

}

////////////////////////////////function total customer count under dra
function count_dra_total_costumer($dra_id)

{

	global $con;

	$sqlq="SELECT * FROM `employee` WHERE `dra_id`='$dra_id'";

	$queryt=$con->query($sqlq);

	$count=mysqli_num_rows($queryt);

	return($count);

}

///////////////////////////////////////// function for finding your AP team Costumer Count



function count_ap_team_costumer($ap_id)

{

	global $con;

	$fer=0;

	$sqlq="SELECT * FROM `ap` WHERE `s_ap_id`='$ap_id'";

	$queryt=$con->query($sqlq);

	while($ref=mysqli_fetch_assoc($queryt))

	{

		$fer=$fer+count_total_costumer($ref[ap_id]);

	}

	

	

	return($fer);

}
///////////////////////////////////////// function total AP team Count

function count_ap_count($ap_id)
{
	global $con;
	if($ap_id==0){
	    $sqlq="SELECT * FROM `ap`";
	}
	else{
	$sqlq="SELECT * FROM `ap` WHERE `s_ap_id`='$ap_id'";}
	$queryt=$con->query($sqlq);
	$count=mysqli_num_rows($queryt);
	return($count);
}

///////////////////////////////////////// function for Total dra team Count

function count_dra($ap_id)
{
	global $con;
	if($ap_id!=0)
	{
	    $sqlq="SELECT * FROM `employee` WHERE `s_ap_id`='$ap_id' AND `dra_status`='active'";
	}
	else{	
	    $sqlq="SELECT * FROM `employee` WHERE `dra_status`='active'";
	}
	$queryt=$con->query($sqlq);
	$count=mysqli_num_rows($queryt);
	return($count);
}

///////////////////////////////////////// function for finding Costumer Count forall

function count_costumer()
{
	global $con;
	$fer=0;
    $sqlq="SELECT * FROM `employee`"; 
	$queryt=$con->query($sqlq);
	$fer=$queryt->num_rows;
	return($fer);
}


//echo count_costumer()
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
	
	$sel1="SELECT * FROM `employee` WHERE `dra_id`='$ibo_id'";
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
		$sel2="SELECT * FROM `employee` WHERE `dra_id`='$temp[$x]'";
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
		$sel3="SELECT * FROM `employee` WHERE `dra_id`='$temp1[$x]'";
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
			$sel2="SELECT * FROM `employee` WHERE `dra_id`='$temp[$x]'";
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
			$sel3="SELECT * FROM `employee` WHERE `dra_id`='$temp1[$x]'";
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
function clear_ap_withdrawl_request($ap_id,$amount,$ap_wr_id,$txn_id,$status)
{
    global $con,$date,$time;
    $csc="SELECT * FROM `ap` WHERE `ap_id`='$ap_id'";
    $dscsdf=$con->query($csc);
    $cdcdc=mysqli_fetch_assoc($dscsdf);
    $amt=$cdcdc[wallet]-$amount;
    if($status=='C')
    {
        $sql="UPDATE `ap_withdrawal_request` SET `txn_id` = '$txn_id' WHERE `ap_withdrawal_request`.`ap_wr_id` = '$ap_wr_id';";
                       
        $sql .="UPDATE `ap_withdrawal_request` SET `status` = '$status' WHERE `ap_withdrawal_request`.`ap_wr_id` = '$ap_wr_id';";
                       
        $sql .="UPDATE `ap_withdrawal_request` SET `action_date` = '$date' WHERE `ap_withdrawal_request`.`ap_wr_id` = '$ap_wr_id';";
        $sql .="UPDATE `ap_withdrawal_request` SET `action_time` = '$time' WHERE `ap_withdrawal_request`.`ap_wr_id` = '$ap_wr_id';";
                       
        $sql .="UPDATE `ap` SET `wallet` = '$amt' WHERE `ap`.`ap_id` = '$ap_id';";
        $sql .="INSERT INTO `ap_withdrawal_wallet_ledger` (`apwwl_id`, `ap_id`, `date`, `time`, `amount`, `type`, `txn_detail`) VALUES (NULL, '$ap_id', '$date', '$time', '$amount', '-', 'Withdrawl Request Completed');";
        
     if ($con->multi_query($sql) === TRUE) 
    {
        
        echo "<script>alert('Withdrawal amount Cleared successfully');location.href='ap_withdrawl_request.php?ap_id=$ap_id'</script>";
        
        
    }
    else {echo "<script>alert('Query Failed, Please try again!');location.href='ap_withdrawl_request.php?ap_id=$ap_id'</script>";}   
    
    }
    elseif ($status=='R')
    {
        
                       
        $sql="UPDATE `ap_withdrawal_request` SET `status` = '$status' WHERE `ap_withdrawal_request`.`ap_wr_id` = '$ap_wr_id';";
        $sql .="UPDATE `ap_withdrawal_request` SET `action_time` = '$time' WHERE `ap_withdrawal_request`.`ap_wr_id` = '$ap_wr_id';";
                       
        $sql .="UPDATE `ap_withdrawal_request` SET `action_date` = '$date' WHERE `ap_withdrawal_request`.`ap_wr_id` = '$ap_wr_id';";
        $sql .="INSERT INTO `ap_withdrawal_wallet_ledger` (`apwwl_id`, `ap_id`, `date`, `time`, `amount`, `type`, `txn_detail`) VALUES (NULL, '$ap_id', '$date', '$time', '$amount', 'R', 'Withdrawl Request Rejected');";              
        
    
           
    if ($con->multi_query($sql) === TRUE) 
    {
        
        echo "<script>alert('Withdrawal amount Rejected successfully');location.href='ap_withdrawl_request.php?ap_id=$ap_id'</script>";
        
        
    }
    else {echo "<script>alert('Query Failed, Please try again!');location.href='ap_withdrawl_request.php?ap_id=$ap_id'</script>";}
    }
}
/////////////////////////////////////////////////////////////////// function for finding clear income for ap
function this_month_commission($ap_id,$s_date,$e_date)
{
    global $con, $date, $time;
    $bus=0;
    $sql="SELECT amount,date,type FROM `ap_commission` WHERE `ap_id`='$ap_id'";
    $sq=$con->query($sql);
    while($s=$sq->fetch_assoc())
    {
        if($s['type']=="+")
        {
        if(strtotime($s_date)<= strtotime($s['date']))
        {
            if(strtotime($e_date) >= strtotime($s['date'])){
                $bus=$bus+$s['amount'];
            }
        }
        }
    }
    return $bus;
}

///////////////////////////////////////////function for finding business on date
function own_business_on_date($datee)
{
    global $con;
    $bus=0;
    $sql="SELECT amount FROM `ap_commission` WHERE `date`='$datee'";
    $sq=$con->query($sql);
    while($s=$sq->fetch_assoc())
    {
        $bus=$bus+$s['amount'];
    }
    return $bus;
}


?>
