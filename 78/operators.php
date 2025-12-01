<?php

/* OPERATORS */

//Bitwise Operators (& | ^ ~ << >>)

$x = 6;
$y = 3;

var_dump(~$x & $y);

//110
// ~
//001
//&
//011
//---
//001 = 1