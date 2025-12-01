<?php

if (file_exists('foo.txt')){
	echo filesize('foo.txt');

	file_put_contents('foo.txt', 'hello world');

	echo filesize('foo.txt');
} else {
	echo 'File not found';
}

