<?php 

/* ARRAY:
- the list of values that can be multiple data types.
*/

$programmingLanguages = ['PHP', 'Java', 'Python'];

echo $programmingLanguages[0];

echo '<br>';

echo $programmingLanguages[1];

echo '<br>';

echo $programmingLanguages[2];

echo '<br>';

echo $programmingLanguages[-1];//in string you can do like this, but not in array

echo '<br>';

var_dump(isset($programmingLanguages[0]));//to check if the item exist at the specific index.

echo '<br>';

//to mutate the value
$programmingLanguages[1] = 'C++';

echo $programmingLanguages[1];

echo '<br>';

//to print entire array
var_dump($programmingLanguages);

echo '<br>';

print_r($programmingLanguages);//less verbose and looked better

echo '<br>';

//to make it looked extra fancy and even better: 
echo '<pre>';
print_r($programmingLanguages);
echo '<pre>';

echo '<br>';

//to get the length of the array
echo count($programmingLanguages);

