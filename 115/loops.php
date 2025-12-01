<?php

/* LOOPS */

// foreach loops

$user = [
	'name' => 'Gio',
	'email' => 'gio@email.com',
	'skills' => ['php', 'graphql', 'react'],
];

foreach($user as $key => $value){
	echo $key . ': ';

	if (is_array($value)){
		foreach($value as $skill){
			echo $skill . ' - ';
		} 
	} else {
		echo $value; //if not an array
	}
	echo '<br>';
}

//refine this code in 116
//but, it's up to you how to handle the case