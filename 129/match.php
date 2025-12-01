<?php

// match expression is almost similar to switch statement, but just few differences
// it's introduced in PHP 8

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

match($paymentStatus) {
	1 => print 'Paid',
	2 => print 'Payment Declined',
	0 => print 'Pending Payment',
};

// match is an expression, it evaluates to value. Therefore, it can be assigned to var. go to 130 for assignment  