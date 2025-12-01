<?php

/* functions */

declare(strict_types=1);

function foo(): int|float|array {
	return [1.5];//an array will also work
}

var_dump(foo());
