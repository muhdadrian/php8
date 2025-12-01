<?php

// php.ini & configuration 

//memory_limit

var_dump(ini_get('memory_limit'));
echo '<br>';
ini_set('max_execution_time', 3);
sleep(5);
echo 'Hello World';

