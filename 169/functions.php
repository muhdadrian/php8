<?php

/* functions */

function foo(){
	return 1;//we are not telling php the exact type of 1, but php will dynamically figure out what the type is. the php will tell its an int(1) 
}

var_dump(foo());
