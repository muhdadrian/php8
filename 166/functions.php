<?php

/* functions */

//another exception is you are defining function within a function

foo();
bar();//now it will work

function foo()
{
	echo 'Foo';
	function bar(){
		echo 'Bar';
	}
}

