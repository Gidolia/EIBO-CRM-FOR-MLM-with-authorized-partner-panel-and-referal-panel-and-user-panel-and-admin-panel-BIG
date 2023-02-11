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
echo $status;
if($status=="success")
{
    $swl="SELECT * FROM `dra_registration_txn_id` WHERE `txn_id`='$txnid'";
    $ret=$con->query($swl);
    $fdc=mysqli_fetch_assoc($ret);
	$deff="INSERT INTO `dra_creation_history` (`drach_id`, `e_id`, `ap_id`, `date`, `time`, `amount`, `txn_id`, `status_pay`, `status_admin`) VALUES (NULL, '$fdc[dra_id]', '', '$date', '$time', '$fdc[amount]', '$txnid', '$status', '');";
	if($con->query($deff)===TRUE){
	    echo "<script>location.href='complete_payment.php?n=sp_ps';</script>";
	}

}else{	echo "<script>location.href='complete_payment.php?n=sp_pf';</script>";}
}


?>