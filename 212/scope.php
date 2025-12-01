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

//to call multiple times. In real application, you call in different parts of your code
//it will sleep for 6 seconds 
echo getValue() . '<br>';
echo getValue() . '<br>';
echo getValue() . '<br>';
