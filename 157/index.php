<?php

//include './partials/nav.php'; //this will print the nav

ob_start();
include './partials/nav.php';
$nav = ob_get_clean();

//we can alter the content, About to About Us:
$nav = str_replace('About', 'About Us', $nav);

echo $nav;
