<?php
include "config.php";
if(isset($_POST[submit_daily_targets]))
{
		
		
			$sql_q="INSERT INTO `target_per_day` (`tpd_id`, `e_id`, `date`, `time`, `stp_target`, `follow_up_target`, `joining_target`, `close_date`, `close_time`, `average_results_percentage`) VALUES (NULL, '$_SESSION[ibo_id]', '$date', '$time', '$_POST[daily_stp]', '$_POST[daily_f_up]', '$_POST[daily_joining]', '', '', '');";
			if($con->query($sql_q))
			   {
			echo "<script>location.href='daily_target.php?n=dt_s';</script>";
			   }
			else{echo "<script>location.href='daily_target.php?n=dt_f';</script>";}
		
}
?>