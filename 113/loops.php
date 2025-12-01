<?php

/* LOOPS */

// foreach loops

$user = [
	'name' => 'Gio',
	'email' => 'gio@email.com',
	'skills' => ['php', 'graphql', 'react'],
];

foreach($user as $key => $value){
	echo $key . ': ' . json_encode($value) . '<br>';
}
//another way to use implode in 114