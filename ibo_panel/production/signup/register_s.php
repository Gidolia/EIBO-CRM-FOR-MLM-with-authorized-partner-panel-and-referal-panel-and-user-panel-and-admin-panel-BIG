<?php include("../../../database_connect.php");?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Register Successfull || NG Activity</title>
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
							<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Est natus facere aperiam!
								</p>
							Dont have account ? <a href="index.php" class="read-more-1 btn">Create Account</a>
						</div>
					
					</div>
				</div>
				<div class="form-left">
					<div class="middle">
						<h3>Successfully Register</h3>
						<p>Your ID Sent To your Mobile No. And your Email ID</p>
						<h4>YOUR ID = <?php echo $_GET[ibo_id];?></h4>
						<a href="sign_in.php" class="read-more-1 btn">Click Here To Login</a>
					</div>
					
					<div class="copy-right text-center">
						<p>© 2020 Success youth network. All rights reserved | Design by
								<a href="http://w3layouts.com/" target="_blank">W3layouts</a></p>
					 </div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- //login-section -->
</body>

</html>