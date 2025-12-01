<?php

// Error Handling

// php will report what error based on error_reporting configuration in php.ini that we discussed previously. 
// We can overwrite that by calling error_reporting() explicitly within your code at a runtime which allows you to change the reporting level.

error_reporting(0);//this will turnoff all the error reporting

error_reporting(E_ALL);//will report all error including warning.
//recommended for production and development, especially for development so that you can catch bug at early development 

error_reporting(E_ALL & ~E_WARNING);//this will report everthing except warning