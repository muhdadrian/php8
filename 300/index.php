<?php

// Working with filesystem

// to write content into a file, which is similar function like fopen, fwrite and fclose combined. If the file is not existed it will create, otherwise it will overwrite

file_put_contents('bar.txt', 'hello');

file_put_contents('bar.txt', 'world', FILE_APPEND);// the world will overwrite the hello unless you put the file_append

