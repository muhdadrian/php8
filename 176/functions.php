<?php

/* functions */
 
declare(strict_types=1);

//if you are expecting a lot of different data types just use 'mixed' for multiple data types
function foo(): mixed {
	return [1.5];//try to change to int, float etc.
}

var_dump(foo());

//gio personally don't prefer mixed as he prefered explicit on data types. but, there are some use cases for mixed.
//in mixed also included null, you cannot use ? in front of it (nullable type) 