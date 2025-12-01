<?php

//include './partials/nav.php'; //this will print the nav

ob_start();
include './partials/nav.php';
$nav = ob_get_clean();

//var_dump($nav);

echo $nav;
