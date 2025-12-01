<?php

/* Date & Time */

echo date_default_timezone_get() . '<br>';

echo mktime(0, 0, 0, 4, 10, null) . '<br>';//you can use function mktime to get unix time stamp based on arg we pass like hour, year, month so on 

echo date('m/d/Y g:ia', mktime(0, 0, 0, 4, 10, null)) . '<br>';

//we can also convert a str representation of a date into unix time stamp using str to time function

echo strtotime('2021-01-18 07:00') . '<br>';

echo date('m/d/Y g:ia' ,strtotime('2021-01-18 07:00')) . '<br>';

//we parse relative format like tomorrow
echo date('m/d/Y g:ia' ,strtotime('tomorrow')) . '<br>';

echo date('m/d/Y g:ia' ,strtotime('first day of february')) . '<br>';

echo date('m/d/Y g:ia' ,strtotime('last day of february')) . '<br>';

echo date('m/d/Y g:ia' ,strtotime('last day of february 2020')) . '<br>';

echo date('m/d/Y g:ia' ,strtotime('second friday of february 2020')) . '<br>';