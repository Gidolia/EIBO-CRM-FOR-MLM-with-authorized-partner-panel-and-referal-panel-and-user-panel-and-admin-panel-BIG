<?php include("../../database_connect.php");

$q = $_REQUEST["q"];

if(preg_match('/^[0-9, A-Z]{10}+$/', $q)==1)
{

$hint = "";

// lookup all hints from array if $q is different from ""
if ($q != "") {
  $sqlkj="SELECT pancard_no FROM `ap` WHERE `pancard_no`='$q'";
  $dfgh=$con->query($sqlkj);
	if($dfgh->num_rows > 0)
	{
	
	$hint="This Pancard Number is Already Register";
	}
	else
	{
	    $hint="Correct";
	}
}

// Output "no suggestion" if no hint was found or output correct values
echo $hint;
}
else{ echo "Please Check Pancard Number";}
?>