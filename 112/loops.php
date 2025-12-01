<?php

/* LOOPS */

// foreach loops

$user = [
	'name' => 'Gio',
	'email' => 'gio@email.com',
	'skills' => ['php', 'graphql', 'react'],
];

foreach($user as $key => $value){
	echo $key . ': ' . $value . '<br>';
}

//the error is expected because the value is an array. to solve it go to 113