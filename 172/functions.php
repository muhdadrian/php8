<?php

/* functions */

declare(strict_types=1);

//php allow you to type void. it means nothing is expected to be returned.
//we'll get NULL. if you're not returning anything, the default return is NULL.
//if you remove the return statement, it will still work. but it will not work if you are returning 'return null;' explicitly. It will result in error. 

function foo(): void {
	return; 
}

var_dump(foo());
