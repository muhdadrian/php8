<?php

$firstName = 'Gio';

echo 'Hello $firstName';

echo '<br>';

echo "Hello $firstName";//use double quotes to print the value of the var. But, this is not readable.

echo '<br>';

echo "Hello {$firstName}";//this is more readable.  

echo '<br>';

echo 'Hello ' . $firstName;//concatenation operator 