<?php

/* static var */

//static var is a regular var with local scope, but the regular var get destroyed outside of scope boundary, while static var not destroyed and retained its value.

function getValue() {
	$value = someVeryExpensiveFunction();

	// some more processing with $value

	return $value;
}

function someVeryExpensiveFunction() {
	sleep(2);

	return 10;
}

echo getValue() . '<br>';
