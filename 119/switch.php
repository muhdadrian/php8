<?php

$paymentStatus = 'paid';

switch($paymentStatus){
	case 'paid':
		echo 'Paid';
		break;

		//fall through
	case 'declined':
	case 'rejected':
		echo 'Payment Declined';
		break;

	case 'pending':
		echo 'Pending Payment';
		break;

	default:
		echo 'Unknown Payment Status';
}

