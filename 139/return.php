<?php 

/* return | declare | goto */

// declare - strict_types

declare(strict_types=1);

function sum(int $x, int $y){
	return $x + $y;
}

echo sum(5, 10);//this works, but try to change 5 into string in 140