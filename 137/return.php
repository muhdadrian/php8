<?php 

// return | declare | goto

function sum(int $x, int $y) {
	$z = $x + $y;

	return $z;
}

$x = sum(5, 10);
echo $x;

return; //however, if you use return statement in global scope, meaning outside function, it will stop the script execution

//the code below will no longer run
echo '<br>';
echo 'Hello World';

