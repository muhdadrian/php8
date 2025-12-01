<?php

// Working with filesystem
// we read the file line by line

if (! file_exists('foo.txt')){
	echo 'File not found';

	return;
}
$file = fopen('foo.txt', 'r');

while(($line = fgets($file)) !== false){
	echo $line . '<br>';
}