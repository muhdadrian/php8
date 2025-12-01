<?php

$paymentStatuses = [1, 3, 0];

foreach($paymentStatuses as $paymentStatus) {
switch($paymentStatus){
	case 1:
		continue 2;
		echo 'Paid';


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

// we assume that we have heavy function that perform heavy operation that might take 3 to 4 seconds in 125