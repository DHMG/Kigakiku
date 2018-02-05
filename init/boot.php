<?php


// Load application environment
if (file_exists(APP_ROOT . '.env')) {
	$dotenv = new Dotenv\Dotenv(APP_ROOT, '.env');
	$dotenv->load();
}

// Get routes
require_once APP_ROOT . 'config/containers.php';
require_once APP_ROOT . 'config/routes.php';
