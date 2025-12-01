<?php

//to break out of the loop for whatever reason

$paymentStatuses = [1, 3, 0];

foreach($paymentStatuses as $paymentStatus) {
switch($paymentStatus){
	case 1:
		echo 'Paid';
		break 2; //tell php how many level you want to break out. 2 means you break out the switch and loop

	case 2:
	case 3:
		echo 'Payment Declined';
		break;

	case 0:
		echo 'Pending Payment';
		break;

	default:
		echo 'Unknown Payment Status';
	}
	echo '<br>';
}


