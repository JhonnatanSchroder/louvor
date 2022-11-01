<?php
use core\Router;

$router = new Router();

$router->get('/', 'HomeController@index');

$router->get('/adicionar/banda', "BandaController@addBanda");
$router->post('/adicionar/banda', "BandaController@addBandaPost");

$router->get('/adicionar/ministro/{id}', "MinistroController@addMinistro");
$router->post('/adicionar/ministro/{id}', "MinistroController@addMinistroPost");

$router->get('/editar/banda/{id}', "BandaController@editarBanda");

$router->get('/gerador/escala', "HomeController@geradorEscala");
$router->post('/gerador/escala', "HomeController@geradorEscalaPost");

$router->post('/delete/banda/{id}', "BandaController@deleteBanda");
