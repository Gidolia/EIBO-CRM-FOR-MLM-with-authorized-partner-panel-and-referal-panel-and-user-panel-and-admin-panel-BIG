<?php 
include "config.php";
/*if($ibo_detail['subscription_until_date']!=""){

		$diff=date_diff(date_create($date),date_create($ibo_detail[subscription_until_date]));

		$fd=$diff->format("%R%a");

		if($fd<1){$subscription_starting_date=$date;}

		else{$subscription_starting_date=$ibo_detail['subscription_until_date'];}

	}

	else{$subscription_starting_date=$date;}

	$subscription_until=date ("Y-m-d", strtotime("+30 day", strtotime($subscription_starting_date)));
	echo $subscription_starting_date."start";
	echo $subscription_until."until";*/
	
	distribute_commission('100','ascasc78452415','11');
    //ap_commission('34','100','abhre785s','11');
    //dra_commission('1','100','abhre785s','11')
?>