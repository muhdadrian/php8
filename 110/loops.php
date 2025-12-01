<?php

/* LOOPS */

// foreach loops

$programmingLanguages = ['php', 'java', 'c++', 'go', 'rust'];

foreach($programmingLanguages as $key => &$language)
{
	echo $key . ':' . $language. '<br>';
}

$language = 'php';//this the reference for the last element in the array
print_r($programmingLanguages);
