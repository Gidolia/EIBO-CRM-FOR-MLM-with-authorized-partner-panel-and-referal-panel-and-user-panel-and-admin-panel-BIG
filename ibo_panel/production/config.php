<?php
session_start();
include "../../database_connect.php";

		  $sel="SELECT * FROM `employee` WHERE `e_id`='$_SESSION[ibo_id]' AND `password`='$_SESSION[ibo_password]'";
		  $res=$con->query($sel);
		  if ($res->num_rows != 1)
		  {
			  
			    echo "<script>location.href='signup/sign_in.php?session=over';</script>";
		  }
		  else
		  
		      $sdf="UPDATE `employee` SET `last_active_date` = '$date' WHERE `employee`.`e_id` = '$_SESSION[ibo_id]';";
			  $sdff="UPDATE `employee` SET `last_active_time` = '$time' WHERE `employee`.`e_id` = '$_SESSION[ibo_id]';";
			 $con->query($sdf);
			 $con->query($sdff);
			 
		  
			 
			  include("class.php");
			$ibo_detail=mysqli_fetch_assoc($res);
			
				$ibo_name=$ibo_detail['name'];
				$ibo_mobile=$ibo_detail['mobile'];

if($ibo_detail['profile_photo']!=""){$profile_photo_src="profile_photos/".$ibo_detail['profile_photo'];}
                          else{$profile_photo_src="profile_photos/default_profile.png";}
                          
                          
                          
                     
			

?>