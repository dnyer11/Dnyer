<?php

require_once __DIR__. '/../app/bootstrap.php';

$app = new Silex\Application();

$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__ . '/../src/views',
));

$app->get('/', function() use ($app) {
    return $app['twig']->render('index.twig');
});

$app->run();
