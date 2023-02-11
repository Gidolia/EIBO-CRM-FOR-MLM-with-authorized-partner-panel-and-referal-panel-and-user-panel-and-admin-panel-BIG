<?php include("../../../database_connect.php");?>
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Sign UP || EIBO</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords"
		content="Sign up" />
	<!-- //Meta tag Keywords -->
	<!--/Style-CSS -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<!--//Style-CSS -->
	<script>
function validateForm() {
 	var gender = document.forms["myForm"]["gender"].value;
 	var state = document.forms["myForm"]["state"].value;
	var password = document.forms["myForm"]["password"].value;
	var c_password = document.forms["myForm"]["c_password"].value;
	var ser_id = document.forms["myForm"]["ser_id"].value;
	var ser_name = document.forms["myForm"]["ser_name"].value;
	var mobile_no = document.forms["myForm"]["mobile_ck"].value;
	if(mobile_no=="This Mobile Number is Already Register")
	{
	    document.getElementById("text_mob").innerHTML = " This Mobile Number is Already Register ";
    return false;
	}
	if(mobile_no=="Please Check Your Mobile Number")
	{
	    document.getElementById("text_mob").innerHTML = " Please Check Your Mobile Number ";
    return false;
	}
	if ( gender == "select")
		  {
    document.getElementById("g_msg").innerHTML = " Gender Must be selected ";
    return false;
		  }
	if ( state == "select")
		  {
    document.getElementById("state_msg").innerHTML = " State Must be selected ";
    return false;
		  }
	  if (password != c_password)
		  {
    document.getElementById("cp_msg").innerHTML = " Confirm Password didnt matched to password ";
    return false;
		  }
		  
	if(ser_id != "")
		{
			if(ser_name == "")
				{
					document.getElementById("upline_msg").innerHTML = " Please Check Upline no. ";
    				return false;
				}
			if(ser_name == "Please check your upline number")
				{
					document.getElementById("upline_msg").innerHTML = " Please Check Upline no. ";
    				return false;
				}
		}
	
}
		
function showHint(str) {
  
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHint").value = this.responseText;
		 // document.getElementById("txtg").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET", "get_hint.php?q=" + str, true);
    xmlhttp.send();
  
}

function showHint_mob(str) {
  
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHint_mob").value = this.responseText;
        if(this.responseText != "Correct")
				{
					document.getElementById("text_mob").innerHTML = this.responseText;
				}
		else{ document.getElementById("text_mob").innerHTML = "";
		}
        
      }
    };
    xmlhttp.open("GET", "get_hint_mob.php?q=" + str, true);
    xmlhttp.send();
  
}
</script>
</head>

<body>
	<!-- /login-section -->
	<section class="w3l-login-6">
		<div class="login-hny">
			<div class="form-content">
				<div class="form-right">
					<div class="overlay">
						<div class="grid-info-form">
							
							<h3>CREATE ACCOUNT </h3>
							<p>Now you can track your team activity
								</p>
							Already have account? <a href="sign_in.php" class="read-more-1 btn">Login</a>
						</div>
					
					</div>
				</div>
				<div class="form-left">
					<div class="middle">
						<h4>Join Us</h4>
						<p></p>
					</div>
					<form action="process_register.php" method="post" class="signin-form" name="myForm" onsubmit="return validateForm()">
							
							<div class="form-input">
								<label>Name *</label>
								<input type="text" name="name" placeholder="" required/>
								
							</div>
							<div class="form-input">
								<label>Email *</label>
								<input type="email" name="email" placeholder="" required/>
								
							</div>
							<div class="form-input">
								<label>Mobile *</label>
								<input type="number" name="mobile" placeholder="" onKeyUp="showHint_mob(this.value)" required/>
								<span id="text_mob" style="color: red"></span>
								<span id="text_mobw" style="color: red"></span>
								<input type="hidden" name="mobile_ck" value="Please Check Your Mobile Number" id="txtHint_mob" readonly />
								
								
							</div>
							<div class="form-input">
								<label>Gender *</label>
								<select name="gender" style="background: #fff;
  outline: none;
  width: 100%;
  font-size: 17px;
  padding: 10px 15px;
  color:#090e0d;
  border: 2px solid #BECED0;">
									<option value="select">Select</option>
									<option value="Male">Male</option>
									<option value="Female">Female</option>
								</select>
								<span id="g_msg" style="color: red"></span>
							</div>
							<div class="form-input">
								<label>State</label>
								<select name="state" style="background: #fff;
  outline: none;
  width: 100%;
  font-size: 17px;
  padding: 10px 15px;
  color:#090e0d;
  border: 2px solid #BECED0;">
								     <option value="select">Select State</option>
								    <option value="Andra Pradesh">Andra Pradesh</option>
								    <option value="Arunachal Pradesh">Arunachal Pradesh</option>
								    <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
								    <option value="Assam">Assam</option>
								    <option value="Bihar">Bihar</option>
								    <option value="Chhattisgarh">Chhattisgarh</option>
								    <option value="Chandigarh">Chandigarh</option>
								    <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
								    <option value="Daman and Diu">Daman and Diu</option>
								    <option value="Delhi">Delhi</option>
								    <option value="Goa">Goa</option>
								    <option value="Gujarat">Gujarat</option>
								    <option value="Haryana">Haryana</option>
								    <option value="Himachal Pradesh">Himachal Pradesh</option>
								    <option value="Jammu and Kashmir">Jammu and Kashmir</option>
								    <option value="Jharkhand">Jharkhand</option>
								    <option value="Karnataka">Karnataka</option>
								    <option value="Kerala">Kerala</option>
								    <option value="Lakshadeep">Lakshadeep</option>
								    
								    <option value="Madya Pradesh">Madya Pradesh</option>
								    <option value="Maharashtra">Maharashtra</option>
								    <option value="Manipur">Manipur</option>
								    <option value="Meghalaya">Meghalaya</option>
								    <option value="Mizoram">Mizoram</option>
								    <option value="Nagaland">Nagaland</option>
								    <option value="Orissa">Orissa</option>
								    <option value="Punjab">Punjab</option>
								    <option value="Pondicherry">Pondicherry</option>
								    <option value="Rajasthan">Rajasthan</option>
								    <option value="Sikkim">Sikkim</option>
								    <option value="Tamil Nadu">Tamil Nadu</option>
								    <option value="Telagana">Telagana</option>
								    <option value="Tripura">Tripura</option>
								    <option value="Uttaranchal">Uttaranchal</option>
								    <option value="Uttar Pradesh">Uttar Pradesh</option>
								    <option value="West Bengal">West Bengal</option>
								    
								</select>
								<span id="state_msg" style="color: red"></span>
							</div>
							<div class="form-input">
								<label>Password *</label>
								<input type="password" name="password" placeholder="" required/>
								
							</div>
							<div class="form-input">
								<label>Confirm Password *</label>
								<input type="password" name="c_password" placeholder="" required/>
								<span id="cp_msg" style="color: red"></span>
							</div>
							<div class="form-input">
								<label>Upline User ID (optional)</label>
								<input type="number" name="ser_id" placeholder="" value="<?php echo $_GET['s_id'];?>" onKeyUp="showHint(this.value)"/>
								<span id="upline_msg" style="color: red"></span>
							</div>
							<?php 
						if(isset($_GET['s_id'])){
							$sqlkj="SELECT name FROM `employee` WHERE `e_id`='$_GET[s_id]'";
  $dfgh=$con->query($sqlkj);
	if($dfgh->num_rows > 0)
	{
	$rfg=mysqli_fetch_assoc($dfgh);
	$upl_name=$rfg['name'];
	}else{ $upl_name="Please check your upline number";}
						}
						?>
							<div class="form-input">
								<label>Upline Name (optional)</label>
								<input type="text" name="ser_name" name="upline_name" value="<?php echo $upl_name;?>" id="txtHint" readonly />
								
							</div>
							
							<?php if(isset($_GET['ap_id']))
{?>
							<div class="form-input">
								<label>&nbsp;AP ID = <?php echo $_GET['ap_id'];?>  </label>
								<input type="hidden" name="ap_id" value="<?php echo $_GET['ap_id'];?>"/>
							</div>
							<?php }
						if(isset($_GET['dra_id']))
{?>
							<div class="form-input">
								<label>&nbsp;DRA ID = <?php echo $_GET['dra_id'];?>  </label>
								<input type="hidden" name="dra_id" value="<?php echo $_GET['dra_id'];?>"/>
							</div>
							<?php }?>
							<label class="container">I agree to <a href="#">Conditions</a> of Use and <a href="#">Privacy</a>
								<input type="checkbox" required>
								<span class="checkmark"></span>
							</label>
							<input type="submit" class="btn" name="create_account" value="Create Account">
							
					</form>
					<div class="copy-right text-center">
						<p>© 2020 EIBO. All rights reserved | Developed by Gidolia Pvt Ltd | Design by
								<a href="http://w3layouts.com/" target="_blank">W3layouts</a></p>
					 </div>
				</div>
				
			</div>
			
		</div>
	</section>
	<!-- //login-section -->
</body>

</html>