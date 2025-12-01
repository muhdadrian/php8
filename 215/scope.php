<?php

/* static var */

function getValue() {
	$value = null;//we remove the static keyword. it will print the processing below 3x.

	if ($value === null) {
		$value = someVeryExpensiveFunction();
	}

	return $value;
}

function someVeryExpensiveFunction() {
	sleep(2);

	echo 'Processing';
	return 10;
}

echo getValue() . '<br>';
echo getValue() . '<br>';
echo getValue() . '<br>';
