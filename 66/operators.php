<?php

/* OPERATORS */

//Comparison Operators (== === /== <> /=== < > <= >= <==> ?? ?:)

//null equal single operator, mainly used when working with null
$x = null;//try false, 5 etc
$y = $x ?? 'hello';

var_dump($y);//y is equal to hello, only when x is null. if x is not null, then y is equal to whatever the value x is. 

//null equal single operator can also be used when working with undefined var and undefined array keys. for example, if we never defined the var x, the value of x is actually null and we would otherwise get undefined var x warning. We'll never get the error instead it will evaluate to hello (try to comment the $x = null;)