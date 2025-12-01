<?php

// Working with filesystem

$file = @fopen('foobar.txt', 'r');//add @ to remove the warning. But, we should avoid suppresing any error. Instead, we build better error handling

var_dump($file);