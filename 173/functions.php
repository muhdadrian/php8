<?php

/* functions */

declare(strict_types=1);

//in php there's nullable type where you can prefix your type with ? and it indicate that along the actual type, the null value is also acceptable
//it will work when you are returning null or an int 
   
function foo(): ?int {
	return null;//try to change the null with int 1 for e.g. 
}

var_dump(foo());
