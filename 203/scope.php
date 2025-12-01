<?php

/* variable scopes */

$x = 5; //this is global scope

include('script1.php');

echo '<br>';

echo $x;