<?php

// php.ini & configuration 

var_dump(ini_get('display_errors'));
echo '<br>';
ini_set('max_execution_time', 3);
echo '<br>';
sleep(5);
echo 'Hello World';

//next: post_max_size -- how much data can be posted in the request

//next: max_execution_time. By default, it sets to 120 seconds