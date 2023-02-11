<?php include "database_connect.php";
function pass_change($e_id,$old,$new,$new_confirm)
{
	global $con, $d, $date, $time;
	
                if($old==$_SESSION[ibo_password])
                {
                    if($new==$new_confirm)
                    {
						//echo $con;
					$enter_query="INSERT INTO `password_change_history` (`pch_id`, `e_id`, `date`, `time`, `old_pass`, `new_pass`) VALUES (NULL, '$e_id', '$date', '$time', '$old', '$new');";
						if($con->query($enter_query) === TRUE)
						{ $update_query="UPDATE `employee` SET `password` = '$new' WHERE `employee`.`e_id` = $e_id;";
							if($con->query($update_query) === TRUE)
							{
								$_SESSION[ibo_password]=$new;
								echo "sucess";
							}
						 	else
							{
							 	echo "query fail";
						 	}
						}
						else{ echo "failed new and confirm pass not matched";}
						
                    }else{echo "failed old password not matched";}
                }
                else{echo "<script>location.href='password_change.php?n=popm';</script>";
                }
           
         
}

?>
