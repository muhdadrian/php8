<?php

/* LOOPS */

// foreach loops

$programmingLanguages = ['php', 'java', 'c++', 'go', 'rust'];

foreach($programmingLanguages as $key => $language){
	echo $key + 1 . ': ' . $language . '<br>';
}
