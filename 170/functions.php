<?php

/* functions */

//we tell the php the data type of the return value is int 
function foo(): int {
	return 1; //try to change 1 to str '1', it will still work as an int and it will not throw an error as we do not use strict type.
	//if php cannot figure out the data type, it will throw and error
	//array cannot be converted into integer. try 'return []';
}

var_dump(foo());
