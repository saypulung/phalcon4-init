<?php

use Phalcon\Mvc\Micro;

$app = new Micro();

$app->get(
    '/',
    function () {
        echo json_encode(['hallo'=>'dunia']);
    }
);
$app->get(
    '/dude',
    function () {
        echo json_encode(['hallo'=>'dude']);
    }
);

$app->handle(
    str_replace(
        basename(dirname(__FILE__)).'/',
        '',
        $_SERVER["REQUEST_URI"]
    )
);
