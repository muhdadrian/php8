<?php

/* static var */

function getValue() {
	static $value = null;//set the default to null

	if ($value === null) {
		$value = someVeryExpensiveFunction();
	}

	return $value;
}

function someVeryExpensiveFunction() {
	sleep(2);

	return 10;
}

//it will only sleep for 2 seconds and still print the 10 3x.
echo getValue() . '<br>';
echo getValue() . '<br>';
echo getValue() . '<br>';
