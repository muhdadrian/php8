<?php 

/* NULL 
- is a special data type
- it represents var of no value
- var can be NULL if it assigned const null it has no defined yet or unset
*/

$x = null;//can use upper or lowercase
echo $x;//it will print nothing as it will 1st cast into string and when null cast into string it will be converted into empty string. That's why it's blank on screen

echo '<br>';
var_dump($x);
echo '<br>';
var_dump(is_null($x));
echo '<br>';

$y = 123; 
var_dump($y);
echo '<br>';
var_dump(is_null($y));
echo '<br>';


//another way to check the value is null or not is by using comparison
var_dump($x === null);
echo '<br>';
var_dump($y === null);

//another way of a var can be a null if it's not been defined yet
var_dump($z);// the var is not defined, but it's value set to null 

echo '<br>';

var_dump(is_null($z));//we'll get true, but we still get the warning

echo '<br>';
echo '<br>';

//the 3rd way a var can be a null if we explicitly unset it where we destroy the var
$a = 123;

var_dump($a);

echo '<br>';

unset($a);

var_dump($a);//we get the same warning and the value still null

echo '<br>';
echo '<br>';

//casting - when null is cast into a string, it's converted into empty string

$b = null;
var_dump((string)$b);//empty string

echo '<br>';
var_dump((int)$b);//cast to int, x will be converted to 0, as null converted to 0.
echo '<br>';

var_dump((bool) $b);// cast to bool and the null converted to false

echo '<br>';

var_dump((array) $b);//cast into array, the null converted to empty array


//a lot of use cases for null for example if you don't know the value for var, you could assign the default value to null and later within the control structure, you could assign the actual value to it.