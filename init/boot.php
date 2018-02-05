<?php


// Load application environment
if (file_exists(APP_ROOT . '.env')) {
	$dotenv = new Dotenv\Dotenv(APP_ROOT, '.env');
	$dotenv->load();
}

// Load Slim
$app = new \Slim\App();

// Get routes
require_once APP_ROOT . 'App/Http/Routes.php';

// Start application
$app->run();
