<?php

namespace bluemobile\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use \Slim\Routing\RouteContext;

class HomeController extends Controller
{
	public function index(Request $request, Response $response)
	{
		//dump($this->view);
		//$c = $this->get('view');dump($c);
		//var_dump($request);
		$this->init($request, $response);

		$twig = $this->ctrl."/".$this->action.'.twig';
		return $this->view->render($response, $twig, []);
	}
}