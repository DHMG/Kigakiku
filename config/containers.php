<?php
$container = $app->getContainer();

// Custom Errors
$container['notFoundHandler'] = function($container) {
	return function ($request, $response) use ($container) {
		return $container['response']
			->withStatus(404)
			->withHeader('Content-Type', 'text/html')
			->write('Page not found');
	};
};
