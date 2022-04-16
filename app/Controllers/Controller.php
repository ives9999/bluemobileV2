<?php
namespace bluemobile\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use DI\Container;
use Slim\Views\Twig;
use Slim\Routing\RouteContext;

abstract class Controller
{
	protected Container $container;
    protected Twig $view;
    protected $request;
    protected $response;

    protected String $ctrl = "";
    protected String $action = "";

	public function __construct(Container $container)
	{
		$this->container = $container;//dump($container);

		$view = $container->get(\Slim\Views\Twig::class);//dump($view);
		$this->view = $view;
	}

	protected function init(Request $request, Response $response)
	{
		$this->request = $request;
		$this->response = $response;

		//Get root URI
		$uri = $request->getUri()->getPath();//echo($uri);exit;
		if ($uri == "/") {
			$this->ctrl = "home";
			$this->action = "index";
		} else {
			$pattern = '/\/([^\/]*)\/?([^\/]*)?/';
			if (preg_match($pattern, $uri, $matches)) {
				//dump($matches);
				if (count($matches) == 3) {
					$this->ctrl = $matches[1];
					$this->action = (!empty($matches[2])) ? $matches[2] : "index";
				}
			}
		}
		//echo ("ctrl:".$this->ctrl."<br>"."action:".$this->action);exit;

		$this->view->offsetSet('ctrl', $this->ctrl);
		$this->view->offsetSet('action', $this->action);

		$routeContext = RouteContext::fromRequest($request);
		$routeParser = $routeContext->getRouteParser();//dump($routeParser);
		//$router = $this->container->get('router');
		//$this->view->addExtension(new \Slim\Views\TwigExtension($routeParser, "/"));
	}
}
