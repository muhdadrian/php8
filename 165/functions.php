<?php

/* functions */

//another exception is you are defining function within a function

foo();//the bar function will not be executed, as we haven't invoked it

function foo()
{
	echo 'Foo';
	function bar(){
		echo 'Bar';
	}
}

