<?php

include("config.php");

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
	echo $status." <br>";
	echo $firstname." <br>";
	echo $amount." <br>";
	echo $posted_hash." <br>";
	echo $key." <br>";
	echo $productinfo." $productinfo <br>";
	echo $email." <br>";
	echo $salt." <br>";
	echo $e_id." <br>";

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

			   		$sql="INSERT INTO `dra_creation_history` (`drach_id`, `e_id`, `ap_id`, `date`, `time`, `amount`, `txn_id`, `status_pay`, `status_admin`) VALUES (NULL, '$firstname', '$_SESSION[ap_id]', '$date', '$time', '$amount', '$txnid', '$status', 'n');";
			   if($con->query($sql) === TRUE)
			   {
				   echo "success";
			   }
			   else{
				   echo "failed to register";
			   }

echo "congralution ";

	


			   }         





?>