<?php

//loose comparison

$paymentStatus = 1; // '1' and true will result in case 1 & false will result in case 0.

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
