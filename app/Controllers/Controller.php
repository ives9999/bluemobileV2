<?php
namespace bluemobile\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use DI\Container;
use Slim\Views\Twig;

abstract class Controller
{
	protected Container $container;
    protected Twig $view;
    protected $request;
    protected $response;

	public function __construct(Container $container)
	{
		$this->container = $container;//dump($container);

		$view = $container->get(\Slim\Views\Twig::class);//dump($view);
		$this->view = $view;
	}
}
