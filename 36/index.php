<?php 


$programmingLanguages = [
	'php' => '8.0',
	'python' => '3.9'
];

$newLanguage = 'go';

$programmingLanguages[$newLanguage] = '1.15';//this will return the same result like in 35

echo '<pre>';
print_r($programmingLanguages);
echo '<pre>';


