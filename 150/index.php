<?php 

/* require | require_once | include | include_once */

$x = 5;

//we change to require_once:
require_once 'file.php';

echo $x . '<br>';

require_once 'file.php';

echo $x . '<br>';

echo 'Hello World';

//this is a bad practice we defining var in one file and modyfying it in another file