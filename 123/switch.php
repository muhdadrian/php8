<?php

//you could also use continue statement instead of break statement and it works similarly, but it will result in warning

$paymentStatuses = [1, 3, 0];

foreach($paymentStatuses as $paymentStatus) {
switch($paymentStatus){
	case 1:
		echo 'Paid';
		continue;// continue 2; it will skip the iteration for the loop. All three payment status printed, but, there's no break line, as it does not reach the <br> line after the 1st case passes because we have the continue.  

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
}

//the break statement are only breaking out of switch statement 

/*
The $paymentStatuses array contains the elements [1, 3, 0].
The foreach loop iterates through each element of the array.
For each element, a switch statement checks the value and prints a corresponding message.

Detailed Breakdown:
First Iteration ($paymentStatus = 1):

The switch statement matches case 1.
It prints Paid.
The continue 2 statement skips the rest of the switch and the echo '<br>';, and moves to the next iteration.
Second Iteration ($paymentStatus = 3):

The switch statement matches case 3 (or case 2 because both cases share the same block).
It prints Payment Declined.
The break statement exits the switch, and the script then prints <br>.
Third Iteration ($paymentStatus = 0):

The switch statement matches case 0.
It prints Pending Payment.
The break statement exits the switch, and the script then prints <br>.
*/