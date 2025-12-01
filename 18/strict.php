<?php

//to enable strict mode in php. it will throw an error if you pass
declare(strict_types=1);

function sum(int $x, int $y)
{
	return $x + $y;
}

$sum = sum('2', 3);

echo $sum . '<br>';

var_dump($sum);
