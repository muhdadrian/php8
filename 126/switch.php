<?php

function x(){
	sleep(3);

	echo 'Done <br>';

	return 3;
}

if (x() === 1){
	echo 1;
} elseif (x() === 2){
	echo 2;
} elseif (x() === 3){
	echo 3;
} else {
	echo 4;
}

// it has to check the 1st if, then 2nd elseif and finally the 3rd elseif where it passed. 
// you run the function x three times. Therefore it will sleep for 9 seconds 
// the solution for this problem is in 127