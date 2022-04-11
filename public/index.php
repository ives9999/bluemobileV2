<?php
use Slim\Factory\AppFactory;
use DI\Container;

use Slim\Views\Twig;

//use bluemobile\Controllers\Test;
require __DIR__ . '/../app/settings.php';

require $settings['root'] . '/vendor/autoload.php';

//$app = new App($settings);

// $containerBuilder = new ContainerBuilder();
// $definitions = [
//     'settings.displayErrorDetails' => true,
//     Twig::class => function(ContainerInterface $container) {
    //     $view = new \Slim\Views\Twig(__DIR__ . '/../app/templates', [
    //         'cache' => false,
    //         'debug' => true,
    //     ]);
    //     return $view;
    //     //return Twig::create(__DIR__ . '/../app/templates', ['cache' => __DIR__ . '/../cache']);
    // }
// ];
// $containerBuilder->addDefinitions($definitions);
// AppFactory::setContainer($containerBuilder->build());

$container = new Container();
AppFactory::setContainer($container);

$container->set("container", function(ContainerInterface $container) {
    return $container;
});

// Set view in Container
$container->set(Twig::class, function() use ($settings) {
    return Twig::create($settings['root'] . '/app/templates', ['cache' => false]);
});

$app = AppFactory::create();
//$container = $app->getContainer();

require ($settings['root'] . "/app/dump.php");
require ($settings['root'] . "/app/routes.php");

$app->run();

