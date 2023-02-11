<?php
include "config.php";
if(isset($_POST[cl_idd]))
{
	
	$fr="SELECT * FROM `contact_list` WHERE `cl_id`='$_POST[cl_idd]'";
	$quer=mysqli_query($con,$fr);
	if(mysqli_num_rows($quer)>0)
	{
		$data_fet=mysqli_fetch_assoc($quer);
		
			$sql_q="INSERT INTO `master_data_record_contact_list` (`mdrcl_id`, `cl_id`, `e_id`, `type`, `date`, `time`, `place_type`, `addreass`, `city`, `state`, `upline_name`, `joining_opinion_level`, `message`, `follow_on_call`, `next_follow_date`, `business_id`, `sponser_id`, `sponser_name`, `business_id_name`, `id_mobile_no`, `id_password`, `amount`, `bv`, `billing_date`) VALUES (NULL, '$_POST[cl_idd]', '$_SESSION[ibo_id]', 'STP', '$date', '$time', '$_POST[place_type]', '$_POST[addreass]', '$_POST[city]', '$_POST[state]', '$_POST[upline_name]', '$_POST[joining_opinion_level]', '$_POST[message]', '', '$_POST[next_date]', '', '', '', '', '', '', '', '', '');";
		
			if($con->query($sql_q))
			   {
			echo "<script>location.href='contact_list_detail.php?cl_id=$_POST[cl_idd]&n=step_stp_s';</script>";
			   }
			else{echo "<script>location.href='contact_list_detail.php?cl_id=$_POST[cl_idd]&n=step_stp_f';</script>";}
		
	}
}
else{ echo "sorry some error occours please try again or contact admin";}
?>