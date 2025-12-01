<?php

/* functions */

declare(strict_types=1);

//in php 8, you can type multiple types separated by pipe char
//we want to return either int or float data type
function foo(): int|float {
	return 1.5;//try any int, it also will work
}

var_dump(foo());
