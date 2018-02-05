<?php

$route = new \Slim\App();

$route->get('/', function(){
	echo "Hello, World!";
});

$route->run();
