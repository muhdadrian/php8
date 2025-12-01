<?php 

//$isComplete = (string) true;
//$isComplete = true;
$isComplete = [];

//another way to check type for boolean is by using function is_bool. It will return true or false  

var_dump(is_bool($isComplete));// it will return false as we casting it into string above. Remove the (string) above to be a boolean value. The empty array will return false.

if ($isComplete) {
	//echo 'success';
} else {
	//echo 'fail';
}