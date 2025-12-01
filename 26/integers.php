<?php 

/* INTEGERS */

echo PHP_INT_MAX;//the size of the int
echo '<br>';
echo PHP_INT_MIN;
echo '<br>';
echo PHP_INT_SIZE;
echo '<br>';

//int can be specified in decimal or based 10  
$x = 5; //based 10
echo $x;

echo '<br>';

//int can also be defined as hexadecimal which is based 16
$y = 0x2A; //hexadecimal prefixed by 0x
echo $y;

echo '<br>';

//int can also be specified as octanumber, which prefixed by 0
$z = 05;//try 055
echo $z;

echo '<br>';

//int can also specfied as binary number, which is prefixed by 0b
$a = 0b11;//try 0b110
echo $a; 

echo '<br>';

//what happened when int is overflow or out of the bound by adding 1 like below? It will change data type from int to float. 
$b = PHP_INT_MAX;
echo $b;
echo '<br>';
var_dump($b);

echo '<br>';

$c = PHP_INT_MAX + 1;
echo $c;
echo '<br>';
var_dump($c);

echo '<br>';

//we cast the data type to int:
$d = (int) true;
var_dump($d);

echo '<br>';

$e = (int) 5.98;//rounded down to 5
var_dump($e);

echo '<br>';

$f = (int) '5.9';
var_dump($f);

echo '<br>';

$g = (int) 'test';
var_dump($g);

echo '<br>';

$h = (int) null;
var_dump($h);

echo '<br>';

//to check whether the var is int
$i = (int) null; //try to remove the cast (int)
var_dump(is_int($i));

echo '<br>';

//add _ for readability purpose without using comma etc. It's useful for long numbers.
$j = 200_000;//if you change it to string: '200_000'. It will not work. 
var_dump($j);

echo '<br>';

$k = (int) '2_000_000_000';// _ is to be used for int and not string. If you cast it into an int, it will be casted as 2, anything after it just being removed 
var_dump($k);