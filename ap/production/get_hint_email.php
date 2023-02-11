<?php include("../../database_connect.php");

$q = $_REQUEST["q"];

$hint = "";

// lookup all hints from array if $q is different from ""
if ($q != "") {
  $sqlkj="SELECT email_id FROM `ap` WHERE `email_id`='$q'";
  $dfgh=$con->query($sqlkj);
	if($dfgh->num_rows > 0)
	{
	
	$hint="This Email ID is Already Register";
	}
	else
	{
	    $hint="Correct";
	}


// Output "no suggestion" if no hint was found or output correct values
echo $hint;
}
else{ echo "Please Check Email ID";}
?>