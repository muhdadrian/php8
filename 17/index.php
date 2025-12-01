<?php

function sum(int $x, int $y)//we can only guarantee the data type is int only until this line. after this it can change. for example we put $x = 5.5 below 
{
	$x = 5.5;// this will change x above from int to float. That's perfectly acceptable in php. We overwrite the x here.  
	var_dump($x, $y);
	echo '<br>';
	return $x + $y;
}

$sum = sum(2, 3);

echo $sum . '<br>';
var_dump($sum);
