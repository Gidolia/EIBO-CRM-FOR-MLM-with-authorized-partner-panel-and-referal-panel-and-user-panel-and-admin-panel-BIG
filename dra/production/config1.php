<?php
session_start();
include "../../database_connect.php";

		  $sel="SELECT * FROM `employee` WHERE `dra_id`='$_SESSION[dra_id]' AND `password`='$_SESSION[dra_password]' AND `dra_status`='active';";
		  $res=$con->query($sel);
		  if ($res->num_rows != 1)
		  {
			  
			    echo "<script>alert('Please Login again');
    			location.href='login.php';</script>";
		  }
		  else
			 
			  include("class.php");
			$dra_detail=mysqli_fetch_assoc($res);
?>