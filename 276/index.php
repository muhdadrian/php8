<?php

// php.ini & configuration 

// error_reporting, error_log, display_errors

//display errors to indicate whether you want to display error on the screen or not
var_dump(ini_get('display_errors'));
echo '<br>';
ini_set('display_errors', 0);//if you set to 0, the error will be gone
//in production, you set to 0 so that you would not share sensitive info in the error to the user. But instead it will log your error. That's where the error log come in. So error log basically indicate where the error should be log. This will further discussed in error handling lesson later
echo '<br>';

$array = [1];
echo $array[3]; 