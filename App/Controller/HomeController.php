<?php namespace App\Controller;
/**
 * HomeController
 */

use Kigakiku\Controller\Controller;

class HomeController extends Controller
{
	public function home($request, $response, $args)
	{
		$body = $response->getBody();

		$name = (isset($args['name'])) ? $args['name'] : '';

		if ($name == '') {
			return $body->write('Hello, World!');
		}

		return $body->write('Hello, ' . $name . '!');
	}
}
