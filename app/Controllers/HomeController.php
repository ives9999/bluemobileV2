<?php

namespace bluemobile\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Views\Twig;
use DI\Container;
use \Slim\Routing\RouteContext;

class HomeController extends Controller
{
	public function index(Request $request, Response $response)
	{
		//dump($this->view);
		//$c = $this->get('view');dump($c);
		//var_dump($request);
		$this->request = $request;
		$this->response = $response;

		//Get root URI
		$uri = $request->getUri()->getPath();//echo($uri);exit;
		if ($uri == "/") {
			$this->ctrl = "home";
			$this->action = "index";
		}

		$twig = $this->ctrl."/".$this->action.'.twig';
		return $this->view->render($response, $twig, []);
	}
}