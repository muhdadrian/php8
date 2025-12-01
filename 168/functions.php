<?php

/* functions */

//you cannot two function with the same name
//we call 1st foo function which declared bar function, and we call bar function which declared the 2nd foo function, but we already have the foo function at the 1st place, which throwing an error.

foo();
bar();

function foo()
{
	echo 'Foo';
	function bar(){
		echo 'Bar';

		function foo(){
			echo 'Foo 2';
		}
	}
}

