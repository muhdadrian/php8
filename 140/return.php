<?php 

/* return | declare | goto (index.php and foo.php files) */

// declare - strict_types

declare(strict_types=1); //try to comment this. it will work even '5' (string).

function sum(int $x, int $y){
	return $x + $y;
}

echo sum('5', 10);//this will cause an error due to the '5' 