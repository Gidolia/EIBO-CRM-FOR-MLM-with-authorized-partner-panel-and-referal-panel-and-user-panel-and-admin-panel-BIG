<?php
include "../database_connect.php";

    if($_POST['ser_id']!="")
	{
		$sqlkj="SELECT * FROM `employee` WHERE `e_id`='$_POST[ser_id]'";
  		$dfgh=$con->query($sqlkj);
		if($dfgh->num_rows > 0)
		{
			$fdbv=mysqli_fetch_assoc($dfgh);
			if(isset($_POST['ap_id'])){
				$ap_id=$_POST['ap_id'];
				$dra_id='1';
				$ap_direct_sponser="y";
				$dra_direct_sponser="";
			}elseif(isset($_POST['dra_id'])){
				$dra_id=$_POST['dra_id'];
				$sqlkjq="SELECT * FROM `employee` WHERE `e_id`='$_POST[dra_id]'";
  				$dfghq=$con->query($sqlkjq);
				$fdbvq=mysqli_fetch_assoc($dfghq);
				$ap_id=$fdbvq['s_ap_id'];
				$ap_direct_sponser="";
				$dra_direct_sponser="y";
			}else{
				$ap_id=$fdbv['ap_id'];
				$dra_id=$fdbv['dra_id'];
			}
			$que="select max(e_id) as max from employee";
			$dfcc=$con->query($que);
            if($dfcc)
              {
                  $row=mysqli_fetch_assoc($dfcc);
                  $ibo_id=$row['max'];
                  $ibo_id=$ibo_id+1;
              
			$sql="INSERT INTO `employee` (`e_id`, `s_id`, `name`, `u_name`, `mobile`, `a_mobile`, `sex`, `password`, `position`, `addreass`, `city`, `state`, `email_id`, `dob`, `profile_photo`, `salary`, `joining_date`, `direct_sponser`, `current_month_sponser`, `business_id`, `pancard`, `adharcard_no`, `last_login_date`, `last_login_time`, `last_active_date`, `last_active_time`, `business_name`, `subscription_type`, `subscription_until_date`, `subscription_status`, `last_subscribed_date`, `subscribed_days`, `dra_id`, `ap_id`, `dra_status`, `s_ap_id`, `dra_password`, `dra_direct_sponser`, `ap_direct_sponser`) VALUES ('$ibo_id', '$_POST[ser_id]', '$_POST[name]', '', '$_POST[mobile]', '', '$_POST[gender]', '$_POST[password]', '', '', '', '', '$_POST[email]', '', '', '', '$date', '', '', '', '', '', '', '', '', '', '', '', '', 'ndeactive', '', '', '$dra_id', '$ap_id', '', '', '', '$dra_direct_sponser', '$ap_direct_sponser');";
              }
			if($con->query($sql) === TRUE)
			{
			    $dd='Welcome '.$_POST[name].' You are sucessfully Register Your IBO ID='.$ibo_id.' and pass='.$_POST[password].' EIBO';
        $dd = str_replace(' ', '%20', $dd);
		$url = 'http://sms.hspsms.com/sendSMS?username=cmd&message='.$dd.'&sendername=NGACTY&smstype=TRANS&numbers='.$_POST[mobile].'&apikey=e8ab1258-683f-45cf-ab3e-082efac6a9b3';

		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$response = curl_exec($ch);
		$text = str_replace('%20', ' ', $dd);
		$sms_query="INSERT INTO `software_handling_software` (`shs_id`, `e_id`, `sms`, `url_current_page`, `respond`, `date`, `time`) VALUES (NULL, '$ibo_id', '$text', '$url', '$response', '$date', '$time');";
		mysqli_query($con, $sms_query);
				echo "Success";
			}
			else{echo "Query failed";}
		}
		else{
			echo "Invalid upline no.";
		}
	}
	else{
		if(isset($_POST[ap_id])){
			$ap_id=$_POST[ap_id];
			$dra_id=1;
			$ap_direct_sponser="y";
			$dra_direct_sponser="";
		}elseif($_POST[dra_id])
		{
			$dra_id=$_POST[dra_id];
			$sqlkjq="SELECT * FROM `employee` WHERE `e_id`='$_POST[dra_id]'";
  			$dfghq=$con->query($sqlkjq);
			$fdbvq=mysqli_fetch_assoc($dfghq);
			$ap_id=$fdbvq['s_ap_id'];
			$ap_direct_sponser="";
			$dra_direct_sponser="y";
		}
		$que="select max(e_id) as max from employee";
		$dfcc=$con->query($que);
            
            if($dfcc)
              {
                  $row=mysqli_fetch_assoc($dfcc);
                  $ibo_id=$row['max'];
                  $ibo_id=$ibo_id+1;
              
	$sql="INSERT INTO `employee` (`e_id`, `s_id`, `name`, `u_name`, `mobile`, `a_mobile`, `sex`, `password`, `position`, `addreass`, `city`, `state`, `email_id`, `dob`, `profile_photo`, `salary`, `joining_date`, `direct_sponser`, `current_month_sponser`, `business_id`, `pancard`, `adharcard_no`, `last_login_date`, `last_login_time`, `last_active_date`, `last_active_time`, `business_name`, `subscription_type`, `subscription_until_date`, `subscription_status`, `last_subscribed_date`, `subscribed_days`, `dra_id`, `ap_id`, `dra_status`, `s_ap_id`, `dra_password`, `dra_direct_sponser`, `ap_direct_sponser`) VALUES ('$ibo_id', '', '$_POST[name]', '', '$_POST[mobile]', '', '$_POST[gender]', '$_POST[password]', '', '', '', '', '$_POST[email]', '', '', '', '$date', '', '', '', '', '', '', '', '', '', '', '', '', 'ndeactive', '', '', '$dra_id', '$ap_id', '', '', '', '$dra_direct_sponser', '$ap_direct_sponser');";
              }
	if($con->query($sql) === TRUE)
	{
		$dd='Welcome '.$_POST[name].' You are sucessfully Register Your IBO ID='.$ibo_id.' and pass='.$_POST[password].' EIBO';
        $dd = str_replace(' ', '%20', $dd);
		$url = 'http://sms.hspsms.com/sendSMS?username=cmd&message='.$dd.'&sendername=NGACTY&smstype=TRANS&numbers='.$_POST[mobile].'&apikey=e8ab1258-683f-45cf-ab3e-082efac6a9b3';

		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$response = curl_exec($ch);
		$text = str_replace('%20', ' ', $dd);
		$sms_query="INSERT INTO `software_handling_software` (`shs_id`, `e_id`, `sms`, `url_current_page`, `respond`, `date`, `time`) VALUES (NULL, '$ibo_id', '$text', '$url', '$response', '$date', '$time');";
		mysqli_query($con, $sms_query);
		echo "Success";
	}
	else{echo "Query failed";}
	}

