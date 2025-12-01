<?php

/* functions */

//another exception is you are defining function within a function

//if we don't call the foo 1st, it will cause an error, the foo hasn't been run yet, therefore the bar function hasn't been declared. 
//to make the bar function worked, you have to call foo function 1st.
//it's not recommended defining function conditionally and defining function within a function -- it will make your code harder to read  

//foo();
bar();

function foo()
{
	echo 'Foo';
	function bar(){
		echo 'Bar';
	}
}

