<?php
use Slim\Factory\AppFactory;

require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/controllers/AlunniController.php';

$app = AppFactory::create();

// Per visualizzare basta aprire chrome
$app->get('/alunni', "AlunniController:index");
$app->get("/alunni/{id}", "AlunniController:getOne");

// Per creare un nuovo alunno: curl -X POST localhost:8080/alunni -d '{"nome":"aaa","cognome":"bbb"}' -H "Content-Type: application/json"
$app->post("/alunni", "AlunniController:createOne");

// Per aggiornare un alunno esistente: curl -X PUT localhost:8080/alunni/3 -d '{"nome":"Stefano","cognome":"il meglio"}' -H "Content-Type: application/json"
$app->put("/alunni/{id}", "AlunniController:updateOne");

// Per eliminare un alunno esistente: curl -X DELETE localhost:8080/alunni/3 
$app->delete("/alunni/{id}", "AlunniController:deleteOne");

$app->run();

?>
