<?php

$paymentStatus = 'paid';

switch($paymentStatus){
	case 'paid':
		echo 'Paid';
		break;

	case 'declined':
		echo 'Payment Declined';
		break;

	case 'pending':
		echo 'Pending Payment';
		break;

	default:
		echo 'Unknown Payment Status';
}

//the default is not required, can omit if you don't need to use it 