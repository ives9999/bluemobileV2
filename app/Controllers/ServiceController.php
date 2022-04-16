<?php

namespace bluemobile\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class ServiceController extends Controller
{
	public function app(Request $request, Response $response)
	{
		$this->init($request, $response);

		$twig = $this->ctrl."/".$this->action.'.twig';
		return $this->view->render($response, $twig, []);
	}

	public function backend(Request $request, Response $response)
	{
		$this->init($request, $response);

		$twig = $this->ctrl."/".$this->action.'.twig';
		return $this->view->render($response, $twig, []);
	}

	public function mascot(Request $request, Response $response)
	{
		$this->init($request, $response);

		$twig = $this->ctrl."/".$this->action.'.twig';
		return $this->view->render($response, $twig, []);
	}
}