<?php

/* LOOPS */

// while

//don't run the code below as it will cause infinite loop. Go to 94 to fix it
$i = 0;
while ($i <= 15) {
	if($i % 2 === 0) {
		continue;
}
echo $i++;
}
