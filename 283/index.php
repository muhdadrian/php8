<?php

// Error Handling

//this for demo only and not for production

function errroHandling(
	int $type,
	string $msg,
	?string $file = null,
	?int $line = null
){
	echo $type . ': ' . $msg . ' in ' . $file . ' on line ' . $line;

	exit;
}

error_reporting(E_ALL & ~E_WARNING);

echo $x; // var x not defined, but because of E_WARNING, the warning is not repprter