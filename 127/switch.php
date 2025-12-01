<?php

function x(){
	sleep(3);

	echo 'Done <br>';

	return 3;
}

$x = x(); //this is the solution. it will take 3 seconds and it will only run once

if ($x === 1){
	echo 1;
} elseif ($x === 2){
	echo 2;
} elseif ($x === 3){
	echo 3;
} else {
	echo 4;
}


//in switch statement it will only execute once and need not to assign to a var. refer 128


