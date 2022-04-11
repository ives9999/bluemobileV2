<?php

namespace bluemobile\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Views\Twig;
use DI\Container;

class HomeController extends Controller
{
	public function index(Request $request, Response $response)
	{
		//dump($this->view);
		//$c = $this->get('view');dump($c);
		//var_dump($request);
		$this->request = $request;
		$this->response = $response;

		//dump(__FUNCTION__.'.twig');
		return $this->view->render($response, __FUNCTION__.'.twig', []);
	}
}