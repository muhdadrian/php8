<?php

/* Control Structures (if/else/elseif/else if) */

//always use elseif without space

$score = 59;

if ($score >= 90){
	echo 'A';
} else if ($score >= 80) {
	echo 'B';
} elseif ($score >= 70) {
	echo 'C';
} elseif ($score >= 60) {
	echo 'D';
} else {
	echo 'F';
}