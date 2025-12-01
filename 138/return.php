<?php 

// However, starting from PHP 7.0, ticks have been deprecated, and the declare(ticks=...) directive no longer works as it used to.

// No need to learn below code

/* return | declare | goto */

// declare - ticks

function onTick(){
	echo 'Tick<br>';
}

register_tick_function('onTick');

declare(ticks=3);

$i = 0;
$length = 10;

while($i < $length) {
	echo $i++ . '<br>';
}

// declare - encoding
// encoding - you should not use this and you won't need the ticks above either. It has not many use cases. One that I can think of is to do benchmarking and profiling to see how efficient your code is running 

// declare - strict_types
//we discussed this in the previous video (type and casting). Another example in 139
