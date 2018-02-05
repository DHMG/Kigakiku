<?php
/**
 * Kigakiku
 * 
 * Content management system for Doom Hamster Media Group
 * 
 * @author Mark LaDoux <mark.ladoux@gmail.com>
 * @copyright Copyright (c) 2018, Doom Hamster Media Group
 * @license https://opensource.org/licenses/MIT MIT
 */

// Sane timezone for backend use
date_default_timezone_set('UTC');

// load the autoloader
if (file_exists($loader = '../vendor/autoload.php')) {
	require_once $loader;
} else {
	header('HTTP/1.1 503 Service Unavailable', 503);
	echo "<!DOCTYPE html>
<html>
<head>
	<title>ERROR 503: Service Unavailable</title>
</head>
<body>
	<h1>ERROR 503: Service Unavailable</h1>
	<p>
		Application is misconfigured. No autoloader found. Please install the
		autoloader by running `composer install` in the application root. If
		you do not have composer installed, please visit
		<a href=\"https://getcomposer.org/\">Composer</a> for installation
		instructions.
	</p>
</body>
</html>
	";
	exit();
}

// Some simple constants to make our lives easier
define('DS', DIRECTORY_SEPARATOR);
define('APP_ROOT', dirname(__DIR__) . DS);
define('WEB_ROOT', __DIR__ . DS);


require_once APP_ROOT . 'init/boot.php';
