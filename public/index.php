<?php
require_once __DIR__."/../vendor/autoload.php";

$app = new Silex\Application;
$app['debug'] = true;
$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__."/../views"
));

$app->get("/ola/{nome}", function($nome) use ($app){

    return $app['twig']->render('ola.twig',array("nome" => $nome));
});

$app->run();