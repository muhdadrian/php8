<?php

/* LOOPS */

// foreach loops

$programmingLanguages = ['php', 'java', 'c++', 'go', 'rust'];

foreach($programmingLanguages as $key => &$language)
{
	echo $key . ':' . $language. '<br>';
}

unset($language);//if I use the & (referece), after the loop destroy the var using unset. It will no longer overwrite anything in the programming language

$language = 'php';
print_r($programmingLanguages);

//a good use case foreach is to iterate the associative array. go to 112  
