<?php
//to reassign the value

$firstName = 'Gio';

$firstName = 'Joe';//to overwrite the value above

echo $firstName;

echo '<br>';

//constants

define('name', 'value');

//the convention: define constant with all uppercase

define('STATUS_PAID', 'paid');

//define('STATUS_PAID', 1); //this will cause error

//to check if the constant has been defined
echo defined('STATUS_PAID');//it will print 1. This will return boolean. The value true is printed as 1.  

echo '<br>';

echo STATUS_PAID;

echo '<br>';

echo defined('STATUS_VOID');// this will print nothing as status void is not defined. 


