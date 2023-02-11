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
			
			switch ($ap_detail['status']) {
			    case "N":
			        echo "<script>location.href='complete_payment.php?n=step_n';</script>";
			        break;
			        
		        case "P":
    		        echo "<script>location.href='kyc.php?n=step_p';</script>";
    		        break;
		        
		        case "W":
    		        echo "<script>location.href='wait.php';</script>";
    		        break;
		       
			}
			 
				
				
			

?>