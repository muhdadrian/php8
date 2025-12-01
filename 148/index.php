<?php 

/* require | require_once | include | include_once */

require 'file.php';

$x++;//we increment here

echo $x . '<br>';

require 'file.php';//when we require the file once again. it will overwrite the value of 6 with 5 (value from file.php)

echo $x . '<br>';//this will print 5

echo 'Hello World';

