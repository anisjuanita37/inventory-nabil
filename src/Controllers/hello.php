<?php
use Slim\Http\Request; //namespace
use Slim\Http\Response; //namespace
// read table products
$app->get('/hello/{name}', function (Request $request, Response $response,
array $arg){
 $name = $arg['name'];
 $response->getBody() -> write ("Hello World");
 return $response;
});
