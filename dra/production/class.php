<?php 

//include("config.php");
$d=$_SESSION[dra_id];
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
	
	////////////////////////////////////////////////for dra withdrawal requests

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
                          });";}
                          
                          
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
    ////////////////////////////////for dra registration Process
    if($n=="dra_success")
    {
        $script="new PNotify({
             title: 'DRA Successfully Registered',
             type: 'success',
             styling: 'bootstrap3'
            });";
    }
    if($n=="dra_fail")
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



function pass_change($old,$new,$new_confirm)
{
	global $con, $date, $time;
    if($old==$_SESSION['dra_password'])
    {
        if($new==$new_confirm)
        {
			$enter_query="INSERT INTO `dra_password_change_history` (`dra_pch_id`, `dra_id`, `date`, `time`, `new_password`, `old_password`) VALUES (NULL, '$_SESSION[dra_id]', '$date', '$time', '$new', '$old');";
			$enter_query .="UPDATE `employee` SET `dra_password` = '$new' WHERE `employee`.`e_id` = $_SESSION[dra_id];";
			if($con->multi_query($enter_query) === TRUE)
			{ 	
					unset($_SESSION['dra_password']);
					$_SESSION['dra_password']=$new;
					echo "<script>location.href='password_change.php?n=ps';</script>";
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
//////////////////////////////////////////////////////////////// function to find total costumer count for dra
function count_total_dra_costumer($dra_id)
{
	global $con;
	$sqlq="SELECT * FROM `employee` WHERE `dra_id`='$dra_id'";
	$queryt=$con->query($sqlq);
	$count=mysqli_num_rows($queryt);
	return($count);
}
////////////////////////////////////////////////////////////// function to find active costumer count for dra
function count_active_dra_costumer($dra_id)
{
	global $con;
	$sqlq="SELECT * FROM `employee` WHERE `dra_id`='$dra_id' AND `subscription_status`='active'";
	$queryt=$con->query($sqlq);
	$count=mysqli_num_rows($queryt);
	return($count);
}

////////////////////////////////////////////////////////////// function to find deactive costumer count for dra
function count_deactive_dra_costumer($dra_id)
{
	global $con;
	$sqlq="SELECT * FROM `employee` WHERE `dra_id`='$dra_id' AND `subscription_status`='deactive'";
	$queryt=$con->query($sqlq);
	$count=mysqli_num_rows($queryt);
	return($count);
}
////////////////////////////////////////////////////////////// function to find never active costumer count for dra
function count_nactive_dra_costumer($dra_id)
{
	global $con;
	$sqlq="SELECT * FROM `employee` WHERE `dra_id`='$dra_id' AND `subscription_status`='ndeactive'";
	$queryt=$con->query($sqlq);
	$count=mysqli_num_rows($queryt);
	return($count);
}
/////////////////////////////////////////////////////////////////// function for finding this month business
function this_month_business($dra_id)
{
    global $con, $date, $time;
    $bus=0;
    $s_date=date('Y-m-01', strtotime($date));
    $e_date=date('Y-m-t', strtotime($date));
    $sql="SELECT * FROM `dra_commission` WHERE `dra_id`='$dra_id'";
    $sq=$con->query($sql);
    while($s=$sq->fetch_assoc())
    {
        if(strtotime($s_date)<= strtotime($s['date']))
        {
            if(strtotime($e_date) >= strtotime($s['date'])){
                $bus=$bus+$s['amount'];
            }
        }
    }
    return $bus;
}
/////////////////////////////////////////////////////////////////// function for finding this month commission
function this_month_commission($dra_id)
{
    global $con, $date, $time;
    $bus=0;
    $s_date=date('Y-m-01', strtotime($date));
    $e_date=date('Y-m-t', strtotime($date));
    $sql="SELECT * FROM `dra_commission` WHERE `dra_id`='$dra_id'";
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

?>

