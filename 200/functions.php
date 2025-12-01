<?php

/* functions */

declare(strict_types=1);

function foo(int $x, int $y): int {
	var_dump($x, $y);
	if($x % $y === 0) { 
		return $x / $y;
	}
	return $x;
}

$arr = ['y' =>2, 'x' => 1];//we switch from 'x' => 1, 'y' to be unordered. It still works. The non-associative element will be treated as positional args
echo foo(...$arr); 

