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

	echo 'Processing';//it will only print once

	return 10;
}

echo getValue() . '<br>';
echo getValue() . '<br>';
echo getValue() . '<br>';
