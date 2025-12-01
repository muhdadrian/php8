<?php

// php.ini & configuration 

// error_reporting, error_log, display_errors
var_dump(ini_get('error_reporting'));
echo '<br>';
var_dump(E_ALL);
echo '<br>';

//for demo
ini_set('error_reporting', E_ALL & ~E_WARNING); //the error will disappear when we use error reporting as an arg. The error for below code also will be gone

$array = [1];
echo $array[3]; //we try to access an array element that does not exist, we'll get a warning. This is not recommended. You should always use E_ALL to fix bug.