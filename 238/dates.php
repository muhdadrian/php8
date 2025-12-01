<?php

/* Date & Time */

//you can also parse the date using a function date_parse
$date = date('m/d/Y g:ia' ,strtotime('second friday of february'));

var_dump(date_parse($date));//this will return an array containing details about the date

echo '<br>';

//formatted the date_parse above for readibility by using pre text
echo '<pre>';
print_r(date_parse($date));
echo '</pre>';