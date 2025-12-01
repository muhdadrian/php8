<?php

// Working with filesystem

//to delete file
unlink('foo.txt');

//to copy foo into bar text file
copy('foo.txt', 'bar.txt');

//to move the file instead of copying by using rename function
//to rename will work fot both file and dir 
rename('foo.txt', 'bar.txt');
