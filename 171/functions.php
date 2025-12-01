<?php

/* functions */

declare(strict_types=1);

function foo(): int {
	return '1'; //if we use strict type, this will throw an error
}

var_dump(foo());
