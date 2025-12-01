<?php

$paymentStatus = false; 

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
	1 > 2 => 'Paid', // both sides are expression, you could have complex expression such as function etc. 1 > 2 will evaluate false. It will evaluate to paid    
	2, 3 => 'Payment Declined', 
	0 => 'Pending Payment',
	default => 'Unknown Payment Status',
};

echo $paymentStatusDisplay;


// match expression does not deprecate switch statement 