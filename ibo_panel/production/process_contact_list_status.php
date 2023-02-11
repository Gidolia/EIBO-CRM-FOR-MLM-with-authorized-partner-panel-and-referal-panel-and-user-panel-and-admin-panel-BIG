<?php
include "config.php";
$c_id=$_GET[c_id];
$status_update=$_GET[status_up];
if(isset($_GET[c_id]))
{
	$fr="SELECT * FROM `contact_list` WHERE `cl_id`='$_GET[c_id]'";
	$quer=mysqli_query($con,$fr);
	if(mysqli_num_rows($quer)>0)
	{
		$data_fet=mysqli_fetch_assoc($quer);
		if($data_fet[status]!= $_GET[status_up])
		{
			$sql_q="UPDATE `contact_list` SET `status` = '$_GET[status_up]' WHERE `contact_list`.`cl_id` = '$_GET[c_id]';";
			if($con->query($sql_q))
			   {
			
			echo "<script>location.href='contact_list_detail.php?cl_id=$_GET[c_id]&suc=1';</script>";
			   }
			else{echo "Error updating record: " . $con->error;}
		}
		else{
			echo "<script>location.href='contact_list_detail.php?cl_id=$_GET[c_id]&sam=1';</script>";
		}
	}
} 

?>