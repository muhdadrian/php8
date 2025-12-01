<?php

// php.ini & configuration 

//memory_limit

var_dump(ini_get('memory_limit'));
echo '<br>';

// we try to trigger the out of memory error:
$string = 'X';

for($i = 0; $i < 1000; $i++){
	$string .= $string;
}

echo $string;

// we can set the memory limit to -1 to remove the memory limit entirely, but it's not recommended, as it's better for you to find a way to optimize the code to see where memory is being consumed. It will avoid memory issue.

//next is file_uploads: to enable or disable file upload in php. We'll learn this later.

//next: upload_tmp_dir: to indicate the tmp folder where the tmp file will be stored when we do file upload.

//next: upload_max_filesize

//next: date.timezone -- default timezone you set

//next: include_path -- require, include etc (we already learned briefly)

//we'll learn more about php.ini in security lesson later.