<?php
session_start();
include "../../database_connect.php";

		  $sel="SELECT * FROM `ap` WHERE `ap_id`='$_SESSION[ap_id]' AND `password`='$_SESSION[ap_password]'";
		  $res=$con->query($sel);
		  if ($res->num_rows != 1)
		  {
			  
			    echo "<script>alert('Please Login again');
    			location.href='login.php';</script>";
		  }
		  else
			 
			  include("class.php");
			$ap_detail=mysqli_fetch_assoc($res);
?>