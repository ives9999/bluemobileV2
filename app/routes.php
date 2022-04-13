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