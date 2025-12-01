<?php

/* LOOPS */

// foreach loops

$user = [
	'name' => 'Gio',
	'email' => 'gio@email.com',
	'skills' => ['php', 'graphql', 'react'],
];

foreach($user as $key => $value):
	echo $key . ': ';

	if (is_array($value)){
		foreach($value as $skill){
			echo $skill . ' - ';
		} 
	} else {
		echo $value; 
	}
	echo '<br>';
endforeach;

//just use : and endforeach;

