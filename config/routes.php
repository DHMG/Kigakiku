<?php

$app->get('/', '\App\Controller\HomeController:home');
$app->get('/{name}', '\App\Controller\HomeController:home');