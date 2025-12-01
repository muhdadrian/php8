<?php

/* LOOPS */

// while

//when embedding in html

$i = 0;
while ($i <= 15):
	if($i % 2 === 0) {
		$i++;
		continue;
}
echo $i++ . ', ';
endwhile;

//the result is same with 95
