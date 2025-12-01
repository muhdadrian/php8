<?php

// Working with filesystem

//create new directory by using mkdir
//to delete directory using rmdir

mkdir('foo');//1st arg is the directory name, 2nd is permission, 3rd to create directory  

rmdir('foo'); //to delete directory

mkdir('foo/bar', recursive: true);//bar directory is nested under foo