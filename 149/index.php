<?php 

/* require | require_once | include | include_once */

$x = 5;

require 'file.php';//we increment once here

echo $x . '<br>';

require 'file.php';//we increment again here

echo $x . '<br>';

echo 'Hello World';

