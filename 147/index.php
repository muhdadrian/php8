<?php 

/* require | require_once | include | include_once */

require_once 'file.php';//file only included once. it defines the var $x

$x++; //we increment here to 6

echo $x . '<br>';

require_once 'file.php';//does not include the same file

echo $x . '<br>';//this just reprint the var above 

echo 'Hello World';

