<?php 

/* BOOLEANS
- can use uppercase too. but stick with lowercase
- booleans are mostly used in control structure like loops and if else conditional

bool evaluation:
integers 0 -0 = false
floats 0.0 -0.0 = false
'' = false
'0' = false
[] = false
null = false

null is a special type

anything else evaluate to true even negative numbers. They are not zero.
*/


$isComplete = true;//try false to change to fail 

if ($isComplete) {
	echo 'success';
} else {
	echo 'fail';
}