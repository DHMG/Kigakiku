<?php

$app->get('/', \App\Controller\HomeController::class . ':home');
$app->get('/{name}', \App\Controller\HomeController::class . ':home');