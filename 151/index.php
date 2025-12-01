<?php 

/* require | require_once | include | include_once */

$x = 5;

$y = include 'file.php';//if we change the file to a file that doesn't exist, we will get warning and we'll get false

echo $x . '<br>';

var_dump($y);