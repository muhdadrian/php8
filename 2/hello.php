<?php

echo 'Hello World';

echo '<br>';

print 'Hello World'; //print has return value of 1

echo '<br>';

echo print 'Hello World'; //this will print out hello world and append number 1 in the end of Hello World. This expression itself returns 1. This means print can be used in expression, while echo can't.

//print echo 'Hello World';//this will cause error as echo can't be used in expression

echo '<br>';

print('Hello World');

echo '<br>';

echo('Hello World');

echo '<br>';

echo 'Hello', ' ', 'World';//concatenate. cannot do this with print. echo is faster than print.
//stick with echo unless you have specific reason to use print

echo '<br>';

echo 'Joe\'s Invoice';// the backslash to escape the quote 

echo '<br>';

echo "Joe's Invoice";



