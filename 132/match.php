<?php

$paymentStatus = 2;

switch ($paymentStatus) {
	case 1:
		echo 'Paid';
		break;
	
		case 2: //fall through strategy to 3
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
	2, 3 => 'Payment Declined', //you can use the fall through strategy by using comma to separate. The payment status is either 2 or 3.
	0 => 'Pending Payment',
};

echo $paymentStatusDisplay;

// 