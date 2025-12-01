<?php

/* LOOPS */

// for-loops

$text = ['a', 'b', 'c', 'd'];

for ($i = 0; $i < count($text); $i++){
	echo $text[$i] . '<br>';
}

//you can do the same thing to while and do while
//this only calling 4x, and it will have performance issue when the programme is big. Go to 104
 