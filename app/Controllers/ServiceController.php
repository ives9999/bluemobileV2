<?php

namespace bluemobile\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class ServiceController extends Controller
{
	/**
 * Example GET route
 *
 * @param  ServerRequestInterface $request  PSR-7 request
 * @param  ResponseInterface      $response  PSR-7 response
 * @param  array                  $args Route parameters
 *
 * @return ResponseInterface
 */
	public function index(Request $request, Response $response, array $args)
	{
		//$args result
		// array:1 [▼
		//   "action" => "backend"
		// ]
		$this->init($request, $response);

		$action = $this->route->getArgument("action");//dump($action);

		$twig = $this->ctrl."/".$action.'.twig';
		return $this->view->render($response, $twig, []);
	}
}