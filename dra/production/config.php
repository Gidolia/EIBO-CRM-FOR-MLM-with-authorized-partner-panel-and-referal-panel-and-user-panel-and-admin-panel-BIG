<?php
session_start();
include "../../database_connect.php";

		  $sel="SELECT * FROM `employee` WHERE `e_id`='$_SESSION[dra_id]' AND `dra_password`='$_SESSION[dra_password]' AND `dra_status`='active'";
		  $res=$con->query($sel);
		  if ($res->num_rows == 0)
		  {
			  
			    echo "<script>alert('Please check your ID and password.');
    			location.href='login.php';</script>";
		  }
		  else
			 
			  include("class.php");
			$dra_detail=mysqli_fetch_assoc($res);
			 
    		 switch ($dra_detail['status']) {
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