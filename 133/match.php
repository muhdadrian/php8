<?php

$paymentStatus = 5;

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
	1 => 'Paid',
	2, 3 => 'Payment Declined', 
	0 => 'Pending Payment',
	default => 'Unknown Payment Status',
};

echo $paymentStatusDisplay;

// in switch the default is not required, but in match expression, it will produce error for example if the $paymentStatus = 5;
// in match you must specify all the possible cases including the default