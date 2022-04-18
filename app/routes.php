<?php
// $app->get('/', function (Request $request, Response $response, $args) {
//     $response->getBody()->write("Hello world!");
//     return $response;
// });
// $app->get('/', function ($request, $response, $args) {
//     //dump(\Slim\Views\Twig::class);
//     $view = $this->get(Slim\Views\Twig::class);dump($view);
//     return $response;
// });
$app->get('/', ['bluemobile\Controllers\HomeController', 'index'])->setName('home.index');

$app->get('/contact', ['bluemobile\Controllers\ContactController', 'index'])->setName('contact.index');

$app->get('/service/{action}', ['bluemobile\Controllers\ServiceController', 'index'])->setName('service.index');
// $app->get('/service/app', ['bluemobile\Controllers\ServiceController', 'app'])->setName('service.app');
// $app->get('/service/backend', ['bluemobile\Controllers\ServiceController', 'backend'])->setName('service.backend');
// $app->get('/service/mascot', ['bluemobile\Controllers\ServiceController', 'mascot'])->setName('service.mascot');

$app->get('/about', ['bluemobile\Controllers\AboutController', 'index'])->setName('about.index');
