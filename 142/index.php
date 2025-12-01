<?php 

/* require | require_once | include | include_once */

//difference between require and include: include will result in warning, while require result in error and stop the script execution

//for example:

	include 'file.php';

	echo 'Hello World';

//the code above will result warning, but it will still print Hello World and it does not stop the script execution