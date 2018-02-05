<?php namespace App\Controller;
/**
 * HomeController
 */

use Kigakiku\Controller;

class HomeController extends Controller
{
	public function home($request, $response, $args)
	{
		echo "Hello, world!";
	}
}
