<?php
require_once 'vendor/autoload.php';
require_once 'router.php';

router('/', function () {
    require_once 'pages/home.php';
});

router('/starships', function () {
    require_once 'pages/starships.php';
});

router('/load', function () {
    require_once 'pages/home_sample.php';
});

dispatch($_SERVER['REQUEST_URI']);
