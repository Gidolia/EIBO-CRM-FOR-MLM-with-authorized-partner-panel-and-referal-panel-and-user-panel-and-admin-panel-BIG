<?php include "database_connect.php"; 


if(isset($_POST[contact_submit]))
{
    
    $sqlkj="SELECT MAX(c_id) as max FROM `contactus`";
  		$dfgh=$con->query($sqlkj);
		$fdbv=mysqli_fetch_array($dfgh);
		$c_id=$fdbv[max]+1;
    //echo $d_id;
    
    $sql="INSERT INTO `contactus` (`c_id`, `fname`, `lname`, `subject`, `email`, `message`, `date`, `time`, `mobile`) VALUES ($c_id, '$_POST[fname]', '$_POST[lname]', '$_POST[subject]', '$_POST[email]', '$_POST[message]', '$date', '$time', '$_POST[mobile]');";
    
  if($con->query($sql) === TRUE)
		{
			
				echo "<script>alert('Your Message has been submitted');
		               location.href='contact.php';</script>";
		}
	 	else
		{
		 		echo "<script>alert('Query failed please try again');
		               location.href='contact.php';</script>";
	 	}
    
}


?>