<?php

// Working with filesystem

$content = file_get_contents('foo.txt', offset: 3, length: 2);//try different offset and length

echo $content;