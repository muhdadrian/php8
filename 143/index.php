<?php 

/* require | require_once | include | include_once */

//difference between require and include: include will result in warning, while require result in error and stop the script execution

//change to require:

	require 'file.php';// the script execution stopped here

	echo 'Hello World';

// the code above will cause fatal error 