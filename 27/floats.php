<?php 

/* FLOATS: has decimal points */

$x = 13.5;

echo $x;

echo '<br>';

//type of x is float:
var_dump($x);

echo '<br>';

//represent floating in exponention form

$y = 13.5e3;

echo $y;

echo '<br>';

//do the negative number
$z = 13.5e-3;

echo $z;

echo '<br>';

//use _ for readibility
$a = 13_000.5e3;

var_dump($a);

echo '<br>';

echo $a;

echo '<br>';

//we remove the exponential, it still works
$b = 13_000.5;

var_dump($b);

echo '<br>';

echo $b;

echo '<br>';

//to check the size of the float

echo PHP_FLOAT_MAX;//pretty large number

echo '<br>';

//be aware when working with float due to its limited precision.
$c = floor((0.1 + 0.7) * 10);

echo $c; //this will output 7, as 0.1 and 0.7 have no exact representation as floating point number in based 2 and binary used internally to store the floating numbers. Therefore, when we convert it into binary internally it loses some its precision. In this case the answer is actually 7.999999...The floor just round down the answer.    

echo '<br>';

$d = ceil((0.1 + 0.7) * 10);

echo $d; 

echo '<br>';

//we use ceil with unexpected result
$e = ceil((0.1 + 0.2) * 10);//the actual result is around 3.00000....so it rounds up to 4. Basically, don't trust the floating number to the last digit and never compare floating number directly for equality

echo $e; 

echo '<br>';

//not compare floats directly:
$f = 0.23;
$g = 1 - 0.77;

var_dump($f, $g);

echo '<br>';

if($f == $g){
	echo 'Yes';
} else {
	echo 'No';
}

echo '<br>';

//another thing to be aware of some operation might result in undefined value which will be represented by a constant NAN   
echo NAN;// NAN stands for not a number which resulted where operation calculation cannot be computed

echo '<br>';

echo log(-1);//example for operation calculation that cannot be computed

echo '<br>';

//another constant called infinity:
echo INF;

echo '<br>';

echo PHP_FLOAT_MAX * 2;//you get INF when you go out of the float bound. The number cannot really be represented.

echo '<br>';

//should never compared var directly to INF or to NAN to check if the var is INF or NAN. Instead you should use built-in function called is_nan and is_inf
$h = PHP_FLOAT_MAX * 2;

var_dump($h);//the result float(INF) is not a number

echo '<br>';

$i = PHP_FLOAT_MAX * 2;

var_dump(is_infinite($i));

echo '<br>';

var_dump(is_finite($i)); //the opposite for infinite

echo '<br>';

var_dump($i);//the result float(INF) is not a number

echo '<br>';

$j = 5;

var_dump(is_finite($j));

echo '<br>';

var_dump($j);

echo '<br>';

//to check if the var is_nan

$k = PHP_FLOAT_MAX * 2;

var_dump(is_nan($k));

echo '<br>';

var_dump($k);

echo '<br>';

$l = PHP_FLOAT_MAX * 2;

var_dump(is_nan(log(-1)));

echo '<br>';

var_dump($l);

echo '<br>';

/* CASTING */
$m = 5;

var_dump($m);

echo '<br>';

$n = 5;

var_dump((float)$n);//similar function to float is floatval(). better only use (float).

echo '<br>';

$o = 'adadadad';
//$o = '1';
//$o = '15.5a';

var_dump((float)$o);//be careful when converting string to float. if it's no, the output is no. if not, the output is 0.