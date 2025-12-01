<?php 

//we have multiple data type: strings, bool, int, float and array 

$programmingLanguages = [
	'php' => [
		'creator'  		 => 'Rasmus Lerdorf',
		'extension' 	 => '.php',
		'website' 		 => 'www.php.net',
		'isOpenSource' => 'true',
		'versions'		 => [
			['version' => 8, 'releaseDate' => 'Nov 26, 2020'],
			['version' => 7.4, 'releaseDate' => 'Nov 28, 2019'],
		],
	],
	'python' => [
		'creator'  		 => 'Guido Van Rossum',
		'extension' 	 => '.py',
		'website' 		 => 'www.python.org',
		'isOpenSource' => 'true',
		'versions'		 => [
			['version' => 3.9, 'releaseDate' => 'Oct 5, 2020'],
			['version' => 3.8, 'releaseDate' => 'Oct 14, 2019'],

		],
	],
];

echo '<pre>';
print_r($programmingLanguages);
echo '<pre>';

echo $programmingLanguages['php']['website'];//to print the website

echo '<br>';

echo $programmingLanguages['php']['versions'][0]['releaseDate'];

echo '<br>';


echo $programmingLanguages['php']['versions'][3]['releaseDate'];//you get 2 errors

var_dump($programmingLanguages['php']['versions'][3]);//the value is null