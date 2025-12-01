<?php

/* LOOPS */

// while

$i = 0;
while ($i <= 15) {
	//$i++; //can put the increment here as well
	if($i % 2 === 0) {
		$i++;
		continue;
}
echo $i++;
}
