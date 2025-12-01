<?php

/* functions */

//you can define function in the top, middle or bottom, it will always loaded by PHP 1st
//but, there are exceptions: if you defined function conditionally, the condition must pass 1st before you call the function

var_dump(foo());

//both false and true below will cause error as the function must work 1st before we can call it at above
if(false){
	function foo()
	{
		return 'Hello World'; 
	}
}


