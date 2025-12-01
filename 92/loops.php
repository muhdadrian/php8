<?php

/* LOOPS */

// while
$i = 0;
while (true){
	while($i > 10) {
		break;
	}
	if($i >= 15){
		break;
	}
	echo $i++;
}

/*
Here's a breakdown of what the code does:

It initializes a variable $i to 0.
It enters an infinite outer while loop (while (true)).
Within this outer loop, there's another nested while loop. This nested loop has a condition $i > 10. If $i becomes greater than 10, the break; statement is executed, which breaks out of the inner loop.
If the condition $i >= 15 is true, the outer loop is also broken out of using the break; statement.
Inside the outer loop, before checking the condition for breaking out of the loop, the value of $i is echoed (printed) to the output, and then it is incremented by 1 ($i++).
So, the outer loop will keep running indefinitely (until explicitly broken out of) unless one of the break conditions is met. The inner loop, however, only allows $i to increment until it reaches 11, after which it breaks.
*/
