<?php
include("config.php");
if(isset($_POST[submit_change]))
{

	$addreass="UPDATE `employee` SET `addreass` = '$_POST[addreass]' WHERE `employee`.`e_id` = '$_SESSION[ibo_id]'";
	$a_mobile="UPDATE `employee` SET `a_mobile` = '$_POST[a_mobile]' WHERE `employee`.`e_id` = '$_SESSION[ibo_id]'";
	$city="UPDATE `employee` SET `city` = '$_POST[city]' WHERE `employee`.`e_id` = '$_SESSION[ibo_id]'";
	$state="UPDATE `employee` SET `state` = '$_POST[state]' WHERE `employee`.`e_id` = '$_SESSION[ibo_id]'";
	$business_name="UPDATE `employee` SET `business_name` = '$_POST[business_name]' WHERE `employee`.`e_id` = '$_SESSION[ibo_id]'";
	$business_id="UPDATE `employee` SET `business_id` = '$_POST[business_id]' WHERE `employee`.`e_id` = '$_SESSION[ibo_id]'";
	$dob="UPDATE `employee` SET `dob` = '$_POST[dob]' WHERE `employee`.`e_id` = '$_SESSION[ibo_id]'";
	
	$con->query($addreass)or die("sorry some problem occours please try again");
	$con->query($a_mobile)or die("sorry some problem occours please try again");
	$con->query($city)or die("sorry some problem occours please try again");
	$con->query($state)or die("sorry some problem occours please try again");
	$con->query($business_name)or die("sorry some problem occours please try again");
	$con->query($business_id)or die("sorry some problem occours please try again");
	$con->query($dob)or die("sorry some problem occours please try again");
	echo "<script>location.href='profile_update.php?n=pu_s';</script>";
	
	
}


?>