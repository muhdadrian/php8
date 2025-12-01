<?php

function x(){
	sleep(3);

	echo 'Done <br>';

	return 3;
}

switch(x()) {
	case 1:
		echo 1;
		break;
	case 2:
		echo 2;
		break;
	case 3:
		echo 3;
		break;
	default:
	echo 4;
}

//switch statment is slightly faster then the if statement
