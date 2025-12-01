<?php

if (file_exists('foo.txt')){
	echo filesize('foo.txt');
} else {
	echo 'File not found';
}