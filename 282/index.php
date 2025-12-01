<?php

// Error Handling

trigger_error('Example error', E_USER_WARNING);//we see the triggered warning, but it did not stop the execution and 1 being printed in the screen

echo 1;