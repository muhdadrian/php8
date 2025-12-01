<?php

// Working with filesystem


if (! file_exists('foo.txt')){
	echo 'File not found';

	return;
}
$file = fopen('foo.txt', 'r');

//we read fgetcsv
while(($line = fgetcsv($file)) !== false){
	print_r($line);
}

fclose($file);