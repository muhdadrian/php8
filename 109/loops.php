<?php

/* LOOPS */

// foreach loops

$programmingLanguages = ['php', 'java', 'c++', 'go', 'rust'];

foreach($programmingLanguages as $key => $language)//the array var or $language is remain after the loop is completed (it's not destroyed)
{
	echo $key . ':' . $language. '<br>';
}

echo $language;
