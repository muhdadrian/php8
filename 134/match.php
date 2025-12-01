<?php

//$paymentStatus = 1; // both will print Paid
$paymentStatus = '1'; 

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

// in match expression does strict comparison, while the switch statement does loose comparison for e.g if you change the $paymentStatus = '1'; to string value 
// the switch statement will still print Paid, while the match expression will print the default value because string '1' does not exist in match. It's strict comparison. 
// think of it as switch does the comparison using double equal, while match does the comparison using triple equal