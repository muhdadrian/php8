<?php

$paid = 'PAID';

//define('STATUS_' . $paid, $paid); //1

define('STATUS_' . $paid, 4); //2

echo STATUS_PAID;

echo '<br>';

echo PHP_VERSION;

echo '<br>';

//magic constant 
echo __LINE__;//it's in line 18

echo '<br>';

echo __FILE__;//print full path