<?php 

/* STRINGS */

//the difference  between single and double quotes. Within single quote you cannot use var and within double quote you can use var

$firstName = 'Adrian';
$lastName = "$firstName Nandu";

echo $firstName;

echo '<br>';

echo $lastName;

echo '<br>';

$firstName2 = 'Sarah';
$lastName2 = "{$firstName2} Adrian";

echo $firstName2;

echo '<br>';

echo $lastName2;

echo '<br>';

$firstName3 = 'Fatih';
$lastName3 = 'Adrian';

$name = $firstName3 . ' ' . $lastName3;

echo $name . '<br>';

echo $name[1];
echo '<br>';
echo $name[0];
echo '<br>';
echo $name[-2];
echo '<br>';

$name[1] = 'A';
echo $name;
echo '<br>';
$name[-2] = 'A';
echo $name;
echo '<br>';
var_dump($name);
echo '<br>';
$name[15] = 'A';//be aware when you updating a string like this
var_dump($name);