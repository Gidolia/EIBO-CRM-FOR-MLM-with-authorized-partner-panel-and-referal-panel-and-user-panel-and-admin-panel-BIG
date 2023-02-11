<?php include "../../database_connect.php";?>

<!DOCTYPE html>

<html lang="en">

  <head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <!-- Meta, title, CSS, favicons, etc. -->

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">



    <title>Admin Login || EIBO </title>



    <!-- Bootstrap -->

    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->

    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <!-- NProgress -->

    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">

    <!-- Animate.css -->

    <link href="../vendors/animate.css/animate.min.css" rel="stylesheet">



    <!-- Custom Theme Style -->

    <link href="../build/css/custom.min.css" rel="stylesheet">

  </head>



  <body class="login">

    <div>

      <a class="hiddenanchor" id="signup"></a>

      <a class="hiddenanchor" id="signin"></a>



      <div class="login_wrapper">

        <div class="animate form login_form">

          <section class="login_content">

            <form method="post">

              <h1>ADMIN Login Form</h1>

              <div>

                <input type="text" class="form-control" placeholder="Username / Email ID" name="admin_id" required="" />

              </div>

              <div>

                <input type="password" class="form-control" placeholder="Password" required="" name="admin_password" />

              </div>

              <div>

               <input type="submit" name="admin_log_submit">

                

              </div>



              <div class="clearfix"></div>



              <div class="separator">

                <p class="change_link">New to site?

                  <a href="#signup" class="to_register"> Create Account </a>

                </p>



                <div class="clearfix"></div>

                <br />



                <div>

                  <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>

                  <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>

                </div>

              </div>

            </form>

          </section>

        </div>

<?php 

		  session_start();

		  if(isset($_POST[admin_log_submit]))

		  {

		  $sel="SELECT * FROM `worker` WHERE `w_id`='$_POST[admin_id]' AND `password`='$_POST[admin_password]'";

		  $res=$con->query($sel);

		  if ($res->num_rows > 0)

		  {

			  $_SESSION[admin_id]=$_POST[admin_id];

			  $_SESSION[admin_password]=$_POST[admin_password];

			  echo "<script>location.href='index.php';</script>";

		  }

		  else{

			  	echo "<script>alert('Invalid user name or Password');

    			location.href='login.php';</script>";

		  }

		  }

		  ?>
        <div id="register" class="animate form registration_form">

          <section class="login_content">

            <form>

              <h1>Create Account</h1>

              <div>

                <input type="text" class="form-control" placeholder="Username" required="" />
              </div>
              <div>
                <input type="email" class="form-control" placeholder="Email" required="" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" required="" />
              </div>
              <div>
                <a class="btn btn-default submit" href="index.html">Submit</a>
              </div>
              <div class="clearfix"></div>
              <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="#signin" class="to_register"> Log in </a>
                </p>
                <div class="clearfix"></div>

                <br />



                <div>

                  <h1><i class="fa fa-paw"></i> EIBO IT Services </h1>

                  <p>©2020 All Rights Reserved. Privacy and Terms</p>

                </div>

              </div>

            </form>

          </section>

        </div>

      </div>

    </div>

  </body>

</html>

