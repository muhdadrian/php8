<?php

// Working with filesystem

$dir = scandir(__DIR__);

var_dump($dir);

// array(3) { [0]=> string(1) "." [1]=> string(2) ".." [2]=> string(9) "index.php" }
// . is the current directory, .. refers to parent directory, index.php is the only file in the directory

echo '<br>';

var_dump($dir[2]);//the 3rd element of the array 

echo '<br>';

var_dump(is_file($dir[2])); //to check if it's a file

echo '<br>';

var_dump(is_dir($dir[2])); //to check if it's a directory

