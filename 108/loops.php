<?php

/* LOOPS */

// foreach loops

$programmingLanguages = ['php', 'java', 'c++', 'go', 'rust'];

foreach($programmingLanguages as $key => &$language){
	$language = 'php';

}

print_r($programmingLanguages);

//the &(reference) will modify the original array 