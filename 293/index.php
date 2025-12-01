<?php

// Working with filesystem

if (! file_exists('foorbar.txt')){
	echo 'File not found';

	return;
}
$file = fopen('foobar.txt', 'r');

var_dump($file);