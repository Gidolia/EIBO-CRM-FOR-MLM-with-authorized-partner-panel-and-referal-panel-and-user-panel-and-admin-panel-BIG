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
	new_ap_commission_distribution($txnid);

}else{	echo "<script>location.href='complete_payment.php?n=sp_pf';</script>";}
}


?>