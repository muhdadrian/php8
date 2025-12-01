<?php

$paymentStatuses = [1, 3, 0];

foreach($paymentStatuses as $paymentStatus) {
switch($paymentStatus){
	case 1:
		echo 'Paid';
		break;

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

//the break statement are only breaking out of switch statement 

