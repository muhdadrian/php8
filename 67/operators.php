<?php

/* OPERATORS */

//Error Control Operators (@)
$x = file('foo.txt');//file function | the file does not exist

//to suppress the error, add @
$y = @file('foo.txt');// the error is gone

//Gio does not recommend to use this operator unless you have a really good case for it. He just want to show it does exist.
