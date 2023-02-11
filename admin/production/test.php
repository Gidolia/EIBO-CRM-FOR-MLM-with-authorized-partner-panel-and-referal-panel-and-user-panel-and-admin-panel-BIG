<?php
include "config.php";
if(isset($_GET[ap_submit]))
{
    $grand_total=0;
    $select1="SELECT * FROM `ap`";
    $cn1=$con->query($select1);
    $s_date=$_GET[start_date];
    $e_date=$_GET[end_date];
    while($w1=mysqli_fetch_assoc($cn1))
    {
        $bus=0;
        $sql="SELECT amount,date,type FROM `ap_hold_wallet_ledger` WHERE `ap_id`='$w1[ap_id]'";
        $sq=$con->query($sql)or die("query fail");
        while($s=$sq->fetch_assoc())
        {
            //echo $w1[ap_id]." s ".$s[amount]."<br>";
            if($s['type']=="+")
            {
            if(strtotime($s_date)<= strtotime($s['date']))
            {
                if(strtotime($e_date) >= strtotime($s['date'])){
                    $bus=$bus+$s['amount'];
                    $grand_total=$grand_total+$s['amount'];
                }
            }
            }
        }
        
        
        
        $wallet=$w1[wallet]+$bus;
        $hold_wallet=$w1[hold_wallet]-$bus;
        
        if($hold_wallet<0)
        {
            $ins4="INSERT INTO `neg_h_wallet` (`n_hold_id`, `date`, `time`, `id`, `id_type`) VALUES (NULL, '$date', '$time', '$w1[ap_id]', 'ap');";
            $con->query($ins4);
            
        }
        $ins="UPDATE `ap` SET `wallet` = '$wallet' WHERE `ap`.`ap_id` = $w1[ap_id];";
        $ins1="INSERT INTO `ap_withdrawal_wallet_ledger` (`apwwl_id`, `ap_id`, `date`, `time`, `amount`, `type`, `txn_detail`) VALUES (NULL, '$w1[ap_id]', '$date', '$time', '$bus', '+', 'Costumer Subscription Commission');";
        
        $ins2="INSERT INTO `ap_hold_wallet_ledger` (`aphw_id`, `ap_id`, `amount`, `type`, `date`, `time`, `txn_detail`) VALUES (NULL, '$w1[ap_id]', '$bus', '-', '$date', '$time', 'Monthly Commission Cleared');";
        
        $ins3="UPDATE `ap` SET `hold_wallet` = '$hold_wallet' WHERE `ap`.`ap_id` = '$w1[ap_id]';";
        if($con->query($ins)===TRUE && $con->query($ins2)===TRUE && $con->query($ins3)===TRUE && $con->query($ins1)===TRUE )
        {
            echo "success";
           
        }
        else
        {
            echo "failed";
        }
        
        
      // echo $w1[ap_id]." c ".$bus."<br>";
    }
    
    $sql="INSERT INTO `payment_wallet_record` (`pwr_id`, `date`, `time`, `from_date`, `to_date`, `id_type`, `amount_given`) VALUES (NULL, '$date', '$time', '$_GET[start_date]', '$_GET[end_date]', 'AP commision', '$grand_total');";
    if($con->query($sql)=== TRUE)
    {
        echo "<script>alert('Successfully done'); location.href='pay_income.php'</script>";
    }
    else{
        echo "payment failed ";
    }
}
if(isset($_GET[dra_submit]))
{
    $grand_total=0;
    $select1="SELECT * FROM `employee` WHERE `dra_status`='active';" ;
    $cn1=$con->query($select1);
    $s_date=$_GET[start_date];
    $e_date=$_GET[end_date];
    while($w1=mysqli_fetch_assoc($cn1))
    {
        
        $bus=0;
        $sql="SELECT amount,date,type FROM `dra_hold_wallet_ledger` WHERE `dra_id`='$dra_id'";
        $sq=$con->query($sql);
        while($s=$sq->fetch_assoc())
        {
            if($s['type']=="+")
            {
            if(strtotime($s_date)<= strtotime($s['date']))
            {
                if(strtotime($e_date) >= strtotime($s['date'])){
                    $bus=$bus+$s['amount'];
                    $grand_total=$grand_total+$s['amount'];
                }
            }
            }
        }
        
        
        
        $wallet=$w1[dra_wallet]+$bus;
        $hold_wallet=$w1[dra_hold_wallet]-$bus;
        
        if($hold_wallet<0)
        {
            $ins4="INSERT INTO `neg_h_wallet` (`n_hold_id`, `date`, `time`, `id`, `id_type`) VALUES (NULL, '$date', '$time', '$w1[dra_id]', 'dra');";
        }
        $ins="UPDATE `employee` SET `dra_wallet` = '$wallet' WHERE `employee`.`dra_id` = $w1[dra_id];";
        $ins1="INSERT INTO `dra_withdrawal_wallet_ledger` (`drawwl_id`, `dra_id`, `date`, `time`, `amount`, `type`, `txn_detail`) VALUES (NULL, '$w1[dra_id]', '$date', '$time', '$bus', '+', 'Costumer Subscription Commission');";
        
        $ins2="INSERT INTO `dra_hold_wallet_ledger` (`drahwl_id`, `ap_id`, `amount`, `type`, `date`, `time`, `txn_detail`) VALUES (NULL, '$w1[dra_id]', '$bus', '-', '$date', '$time', 'Commission Cleared');";
        
        $ins3="UPDATE `employee` SET `dra_hold_wallet` = '$hold_wallet' WHERE `employee`.`dra_id` = '$w1[dra_id]';";
        if($con->query($ins)===TRUE && $con->query($ins2)===TRUE && $con->query($ins3)===TRUE && $con->query($ins1)===TRUE )
        {
            echo "success";
           
        }
        else
        {
            echo "failed";
        }
        
        //echo $w1[ap_id]."<br>";
    }
    
    $sql="INSERT INTO `payment_wallet_record` (`pwr_id`, `date`, `time`, `from_date`, `to_date`, `id_type`, `amount_given`) VALUES (NULL, '$date', '$time', '$_GET[start_date]', '$_GET[end_date]', 'DRA commision', '$grand_total');";
    if($con->query($sql)=== TRUE)
    {
        echo "<script>alert('Successfully done'); location.href='pay_income.php'</script>";
    }
    else{
        echo "payment failed ";
    }
}
?>