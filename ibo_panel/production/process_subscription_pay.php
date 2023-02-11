<?php

include("../../database_connect.php");

	$status=$_POST["status"];
	$firstname=$_POST["firstname"];
	$amount=$_POST["amount"];
	$txnid=$_POST["txnid"];
	$posted_hash=$_POST["hash"];
	$key=$_POST["key"];
	$productinfo=$_POST["productinfo"];
	$email=$_POST["email"];
	$e_id=$_POST["e_id"];
	$salt="4Kbw0hmna9";
	

	If (isset($_POST["additionalCharges"])) {
		   $additionalCharges=$_POST["additionalCharges"];
			$retHashSeq = $additionalCharges.'|'.$salt.'|'.$status.'|||||||||||'.$email.'|'.$firstname.'|'.$productinfo.'|'.$amount.'|'.$txnid.'|'.$key;

					  }
		else {	  

			$retHashSeq = $salt.'|'.$status.'|||||||||||'.$email.'|'.$firstname.'|'.$productinfo.'|'.$amount.'|'.$txnid.'|'.$key;

			 }
			 $hash = hash("sha512", $retHashSeq);

		   if ($hash != $posted_hash) {
			   echo "Invalid Transaction. Please try again";
			   }
		   else {

$sax="SELECT * FROM `temp_txn_handler` WHERE `txn_id`='$txnid'";
$qu=$con->query($sax);
$detail=mysqli_fetch_assoc($qu);
$asa="SELECT * FROM `employee` WHERE `e_id`='$detail[d_id]'";
$edd=$con->query($asa);
$ibo=mysqli_fetch_assoc($edd);
echo $status;
if($status=="success")
{
	

	if($ibo['subscription_until_date']!=""){

		$diff=date_diff(date_create($date),date_create($ibo[subscription_until_date]));

		$fd=$diff->format("%R%a");

		if($fd<1){$subscription_starting_date=$date;}

		else{$subscription_starting_date=$ibo['subscription_until_date'];}

	}

	else{$subscription_starting_date=$date;}

	$subscription_until=date ("Y-m-d", strtotime("+$detail[month] day", strtotime($subscription_starting_date)));

	

	$sql="UPDATE `employee` SET `subscription_type` = '$detail[plan]' WHERE `employee`.`e_id` = $detail[d_id];";

	$sql .="UPDATE `employee` SET `subscription_until_date` = '$subscription_until' WHERE `employee`.`e_id` = $detail[d_id];";

	$sql .="INSERT INTO `subscription_history` (`sh_id`, `e_id`, `date`, `time`, `s_start_date`, `s_until_date`, `last_s_end_date`, `s_days`, `plan_type`, `txn_id`, `per_month_charge`, `billing_amount`, `ap_id`, `dra_id`, `payment_confirmation_by_software`, `payment_confirmation_admin`) VALUES (NULL, '$detail[d_id]', '$date', '$time', '$subscription_starting_date', '$subscription_until', '$ibo[subscription_until_date]', '$detail[month]', '$detail[plan]', '$txnid', '$detail[per_month_amount]', '$detail[amount]', '$ibo[ap_id]', '$ibo[dra_id]', '$status', '');";

	$sql .="UPDATE `employee` SET `subscription_status` = 'active' WHERE `employee`.`e_id` = '$detail[d_id]';";

	$sql .="UPDATE `employee` SET `last_subscribed_date` = '$subscription_starting_date' WHERE `employee`.`e_id` = '$detail[d_id]';";
	$message="You Have Successfully Suscribed your ".$detail[plan]." Plan for ".$detail[month]." days";
	$sql .="INSERT INTO `notification` (`n_id`, `e_id`, `dra_id`, `ap_id`, `notification`, `date`, `time`, `n_type`) VALUES (NULL, '$detail[d_id]', '', '', '$message', '$date', '$time', 'Subscription');";

			if($con->multi_query($sql) === TRUE)
							{
							     while ($con->next_result()) {;}
                                distribute_commission('$detail[amount]','$txnid','$detail[d_id]');
								echo "<script>location.href='billing_history.php?n=sp_s';</script>";

							}

						 	else

							{
                                //echo "failed";
							 	echo "<script>location.href='billing_history.php?n=sp_f';</script>";

						 	}

}else{	echo "<script>location.href='billing_history.php?n=sp_pf';</script>";}
}


?>