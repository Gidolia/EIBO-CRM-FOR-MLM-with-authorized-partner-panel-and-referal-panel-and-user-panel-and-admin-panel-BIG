<?php include("config.php");

$q = $_REQUEST["q"];

$hint = "";

// lookup all hints from array if $q is different from ""
if ($q !== "") {
  $sqlkj="SELECT name FROM `employee` WHERE `e_id`='$q'";
  $dfgh=$con->query($sqlkj);
	if($dfgh->num_rows > 0)
	{
	$rfg=mysqli_fetch_assoc($dfgh);
	$hint=$rfg['name'];
	}
}

// Output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "Please check your upline number" : $hint;
?>