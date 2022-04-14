<?php

namespace bluemobile\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class HomeController extends Controller
{
	public function index(Request $request, Response $response)
	{
		$this->init($request, $response);

		$twig = $this->ctrl."/".$this->action.'.twig';
		return $this->view->render($response, $twig, []);
	}
}