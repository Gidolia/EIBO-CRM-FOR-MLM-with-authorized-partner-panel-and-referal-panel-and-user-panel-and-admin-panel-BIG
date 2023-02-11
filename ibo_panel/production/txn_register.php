<?php
include "config.php";


function password_generate($chars) 
{
  $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
  return substr(str_shuffle($data), 0, $chars);
}
for($x=0; $x<100; $x++)
{
    echo $x;
    $pas=password_generate(15);
    $sqsqqs="SELECT * FROM `temp_txn_handler` WHERE `txn_id`='$pas'";
    $qur=$con->query($sqsqqs);
    if(mysqli_num_rows($qur)==0)
    {
        break;
    }
}


  echo $pas."\n";
  
/*
$sql="INSERT INTO `temp_txn_handler` (`tth_id`, `d_id`, `txn_id`, `date`, `time`, `status`, `name`, `mobile`, `email`, `month`, `amount`, `per_month_amount`, `plan`, `voucher_code`) VALUES (NULL, '1', '', '', '', '', '', '', '', '', '', '', '', '');";
if($con->query($sql)===TRUE)
{
    echo "done";
}*/