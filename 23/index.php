<?php 

//why it prints 1 for true and empty string for false? the reason for that is because when you print something in php, it will try to cast it into string. So, it essentially doing the same thing like echo (string) $isComplete (it just no need to specify the (string)). When boolean cast into string, false become empty string, and true become 1. We can check it by using var dump at below #1 and convert the bool to string type #2 by using cast. That's what happened when you do the echo $isComplete. 

//$isComplete = true;
$isComplete = (string) true;//2

//echo (string) $isComplete;

var_dump($isComplete);//1

if ($isComplete) {
	//echo 'success';
} else {
	//echo 'fail';
}