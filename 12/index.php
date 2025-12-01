<?php

function sum($x, $y){
	var_dump($x, $y);
	return $x + $y;
}

echo sum(2, 3);

echo '<br>';
echo '<br>';

function add($a, $b){
	var_dump($a, $b);
	return $a + $b;
}

echo add(2, '3');