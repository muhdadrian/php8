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
	1 => print 'Paid',
	2 => print 'Payment Declined',
	0 => print 'Pending Payment',
};

echo $paymentStatusDisplay;

//we can remove the print in match. go to 131
