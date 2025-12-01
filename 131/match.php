<?php

$paymentStatus = 1;

switch ($paymentStatus) {
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

$paymentStatusDisplay = match($paymentStatus) {
	1 => 'Paid', //this expression can be any kind including a function that returns a value 
	2 => 'Payment Declined',
	0 => 'Pending Payment',
};

echo $paymentStatusDisplay;

//in match expression you need not the 'break statement', as it will return the value once the match is found  