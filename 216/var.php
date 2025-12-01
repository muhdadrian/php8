<?php

/* variable, anonymous & arrow functions */

//var function
function sum(int|float ...$numbers): int|float {
	return array_sum($numbers);
}

echo sum(1, 2, 3 ,4);

