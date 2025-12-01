<?php

/* Date & Time */

$currentTime = time();

echo $currentTime . '<br>';

echo $currentTime + 5 * 24 * 60 * 60 . '<br>';//to convert 5 days to seconds
//5 days multiplied by 24 hours to convert to hours
//multiplied by 60 to convert to minutes
//multiplied by 60 to convert to seconds

//substract one day to get yesterday time
echo $currentTime - 60 * 60 * 24 . '<br>';

echo $currentTime - 24 * 60 * 60 . '<br>'; 

//we can format the seconds into a date
echo date('m/d/Y g:ia') . '<br>'; //you can check the format in php

echo date('m/d/Y g:ia', $currentTime + 5 * 24 * 60 * 60) . '<br>'; 

echo date('m/d/Y g:ia', $currentTime - 60 * 60 * 24 ) . '<br>';

//set timezone
date_default_timezone_set('UTC');

echo date('m/d/Y g:ia') . '<br>'; 

echo date('m/d/Y g:ia', $currentTime + 5 * 24 * 60 * 60) . '<br>'; 

echo date('m/d/Y g:ia', $currentTime - 60 * 60 * 24 ) . '<br>';

//highly recommed to set time into  UTC so that easy to manage multiple time zones, and can do conversion whenever you displaying time to the user 