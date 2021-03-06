<?php

require 'inc/Slim/Slim/Slim.php';

\Slim\Slim::registerAutoloader();

$app = new \Slim\Slim();

// GET route
$app->get(
    '/',
    function () {

        require_once("view/index.php");

    }
);

$app->get(
    '/videos.php',
    function () {

        require_once("view/videos.php");

    }
);

$app->get(
    '/shop.php',
    function () {

        require_once("view/shop.php");

    }
);

$app->get(
    '/teste.php',
    function () {

        require_once("view/teste.php");

    }
);

$app->run();
