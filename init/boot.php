<?php


// Load application environment
if (file_exists(APP_ROOT . '.env')) {
	$dotenv = new Dotenv\Dotenv(APP_ROOT, '.env');
	$dotenv->load();
}

// Instantiate app
$app = new Slim\App();

// Get routes
require_once APP_ROOT . 'config/containers.php';
require_once APP_ROOT . 'config/routes.php';

// run application
$app->run();
