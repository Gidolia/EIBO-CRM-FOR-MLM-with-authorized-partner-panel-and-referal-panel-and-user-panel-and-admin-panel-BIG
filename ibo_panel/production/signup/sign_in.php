<?php include("../../../database_connect.php");?>
<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>EIBO || LOGIN</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords"
		content="Sign up" />
	<!-- //Meta tag Keywords -->
	<!--/Style-CSS -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<!--//Style-CSS -->
</head>

<body>
	<!-- /login-section -->
	<section class="w3l-login-6">
		<div class="login-hny">
			<div class="form-content">
				<div class="form-right">
					<div class="overlay">
						<div class="grid-info-form">
							
							<h3>SIGN IN</h3>
							<p>Welcome to the EIBO family, we will help you to achieve your goal faster.
								</p>
							Dont have account ? <a href="index.php" class="read-more-1 btn">Create Account</a>
						</div>
					
					</div>
				</div>
				<div class="form-left">
					<div class="middle">
						<h4>LOG IN</h4>
						<p></p>
					</div>
					<form method="post" class="signin-form">
							<div class="form-input">
								<label>User ID</label>
								<input type="text" name="id" placeholder="" required/>
								
							</div>
							
							<div class="form-input">
								<label>Password</label>
								<input type="password" name="password" placeholder="" required/>
								
							</div>
							<input type="submit" class="btn" name="log_submit" value="Log In">
							<a href="forget_password.php">Forget Password?</a>
							
					</form>
					<div class="copy-right text-center">
						<p>© 2020 All rights reserved | EIBO - Ladder to your Dreams</p>
					 </div>
				</div>
				
			</div>
			<?php 
		  session_start();
			
		  if(isset($_POST['log_submit']))
		  {
		  $sel="SELECT * FROM `employee` WHERE `e_id`='$_POST[id]' AND `password`='$_POST[password]'";
		  $res=$con->query($sel);
		  if ($res->num_rows > 0)
		  {
			  $_SESSION[ibo_id]=$_POST[id];
			  $_SESSION[ibo_password]=$_POST[password];
			  $sdf="UPDATE `employee` SET `last_login_date` = '$date' WHERE `employee`.`e_id` = '$_POST[id]';";
			  $sdff="UPDATE `employee` SET `last_login_time` = '$time' WHERE `employee`.`e_id` = '$_POST[id]';";
			  $sdfff="INSERT INTO `login_detail` (`ld_id`, `id`, `type`, `date`, `time`, `ip_addreass`) VALUES (NULL, '$_POST[id]', 'ibo', '$date', '$time', '$ipad');";
			  if($con->query($sdf)===TRUE && $con->query($sdff)===TRUE && $con->query($sdfff)===TRUE)
			  {
			    echo "<script>location.href='../index.php';</script>";
			  }
			  else{
			      echo "<script>alert('Sorry Some Thing Went Wrong Please Try Again');
    			location.href='sign_in.php';</script>";
			  }
		  }
		  else{
			  	echo "<script>alert('Invalid user name or Password');
    			location.href='sign_in.php';</script>";
		       }
		  }
		  ?>
		</div>
	</section>
	<!-- //login-section -->
</body>

</html>