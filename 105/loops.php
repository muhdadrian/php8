<?php

/* LOOPS */

// for-loops

$text = ['a', 'b', 'c', 'd'];
$length = count($text); 
for ($i = 0; $i < $length; $i++){
	echo $text[$i] . '<br>';
}

//the performance issue also applied with while and do-while