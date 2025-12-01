<?php

//there's an exception even in strict mode you still can pass as an int where float type is expected without error
//use type hinting and strict types, it provides better quality of code where I know exactly what types are accepted and it will avoid unexpected bugs.  

declare(strict_types=1);

function sum(float $x, float $y)
{
	return $x + $y;
}

//$sum = sum(3.5, 2.5);//float
$sum = sum(3, 2);//this int will work

echo $sum . '<br>';

var_dump($sum);
