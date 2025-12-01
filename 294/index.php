<?php

// Working with filesystem

if (! file_exists('foo.txt')){
	echo 'File not found';

	return;
}
$file = fopen('foo.txt', 'r');

var_dump($file);