<?php

/* LOOPS */

// foreach loops

$user = [
	'name' => 'Gio',
	'email' => 'gio@email.com',
	'skills' => ['php', 'graphql', 'react'],
];

foreach($user as $key => $value){
	if (is_array($value)){
		$value = implode(', ', $value);
	}
	echo $key . ': ' . $value . '<br>';
}

//use implode if it's an array by checking it 1st by using if else