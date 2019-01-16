<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/
$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->group(['middleware' => []], function () use ($router) {
    $router->get('/MoverFicha', ['uses' => 'AjedrezController@MoverFicha']);
    $router->get('/BtnLogin', ['uses' => 'AjedrezController@BtnLogin']);
    $router->get('/MostrarRepeticion', ['uses' => 'AjedrezController@MostrarRepeticion']);
    $router->get('/GuardarProgreso', ['uses' => 'AjedrezController@GuardarProgreso']);
});
