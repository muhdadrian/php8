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
}//we read the file using fget function, and assigned it to $line var, and we loop every line until the return value from fget is false. Doing loose comparison could result in unexpected result 

fclose($file);//we close the file after working with the file