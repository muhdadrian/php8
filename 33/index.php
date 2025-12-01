<?php 

$programmingLanguages = ['PHP', 'Java', 'Python'];

echo '<pre>';
print_r($programmingLanguages);
echo '<pre>';

echo count($programmingLanguages);

echo '<br>';

//1st arg is the array, the other args are to push the multiple elements
array_push($programmingLanguages, 'C++', 'C', 'GO');

echo '<pre>';
print_r($programmingLanguages);
echo '<pre>';

echo count($programmingLanguages);
