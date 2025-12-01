<?php 

//to add C++ as the new element in the array

$programmingLanguages = ['PHP', 'Java', 'Python'];

echo '<pre>';
print_r($programmingLanguages);
echo '<pre>';

echo count($programmingLanguages);

echo '<br>';

$programmingLanguages[] = 'C++';//push the element to the end of the array

echo '<pre>';
print_r($programmingLanguages);
echo '<pre>';

echo count($programmingLanguages);

//another way to push element to the array is by using array_push(). It actually modify the original array. Go to the next