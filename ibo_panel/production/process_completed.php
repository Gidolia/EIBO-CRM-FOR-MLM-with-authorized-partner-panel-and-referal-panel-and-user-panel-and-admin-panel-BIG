<?php
include "config.php";
echo "sd";
if(isset($_POST[submit_complete]))
{
	echo "df";
	$fr="SELECT * FROM `contact_list` WHERE `cl_id`='$_POST[cl_idd]'";
	$quer=mysqli_query($con,$fr);
	if(mysqli_num_rows($quer)>0)
	{
		$data_fet=mysqli_fetch_assoc($quer);
			
		
			$sql_q="INSERT INTO `master_data_record_contact_list` (`mdrcl_id`, `cl_id`, `e_id`, `type`, `date`, `time`, `place_type`, `addreass`, `city`, `state`, `upline_name`, `joining_opinion_level`, `message`, `follow_on_call`, `next_follow_date`, `business_id`, `sponser_id`, `sponser_name`, `business_id_name`, `id_mobile_no`, `id_password`, `amount`, `bv`, `billing_date`) VALUES (NULL, '$_POST[cl_idd]', '$_SESSION[ibo_id]', 'JND', '$date', '$time', '', '', '', '', '', '', '', '', '', '$_POST[business_id]', '', '', '', '', '', '$_POST[amount]', '$_POST[bv]', '$_POST[billing_date]');";
			
		
			
			if($con->query($sql_q))
			   {
			
			echo "<script>location.href='contact_list_detail.php?cl_id=$_POST[cl_idd]&n=jnd_s';</script>";
			   }
			else{echo "<script>location.href='contact_list_detail.php?cl_id=$_POST[cl_idd]&n=jnd_f';</script>";}
		
	}
}
else{ echo "sorry some error occours please try again or contact admin";}

?>
