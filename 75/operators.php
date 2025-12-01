<?php

/* OPERATORS */

//Bitwise Operators (& | ^ ~ << >>)
//it used to perform bit level operation 
$x = 6;
$y = 3;

var_dump($x & $y);

//the binary representation of 6 is 110
//& - we do and operation here (the operation returns 1 if both of them 1)
//the binary representation of 3 is 011

//manual calculation:
//110
//&
//011
//---
//010 - this equals to 2 (010 = 2) that's why we we get int(2)