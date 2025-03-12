<?php
use Slim\Factory\AppFactory;

require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/controllers/HelloController.php';

$app = AppFactory::create();

$app->get('/hello', "HelloController:hello");
$app->get('/hello/{name}', "HelloController:hello_with_name");
$app->get('/json/{name}', "HelloController:json_name");

$app->run();

?>
