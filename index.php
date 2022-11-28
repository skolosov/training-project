<?php
require_once 'vendor/autoload.php';
require_once 'router.php';

/*router('/', function () {
    require_once 'index1.php';
});*/

router('/home', function () {
    require_once 'pages/home.php';
});

dispatch($_SERVER['REQUEST_URI']);
