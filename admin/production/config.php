<?php

session_start();

include "../../database_connect.php";

		  $sel="SELECT * FROM `worker` WHERE `w_id`='$_SESSION[admin_id]' AND `password`='$_SESSION[admin_password]'";

		  $res=$con->query($sel);

		  if ($res->num_rows != 1)

		  {
			    echo "<script>alert('Please Login again');
    			location.href='login.php';</script>";
		  }
		  else
			 include("class.php");
			$admin_detail=mysqli_fetch_assoc($res);
		//	echo $admin_detail['name']

?>