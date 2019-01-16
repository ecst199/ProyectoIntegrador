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

$router->group(['middleware' => []], function () use ($router) 
{
    $router->post('/MoverFicha', ['uses' => 'AjedrezController@MoverFicha']);
    $router->post('/BtnLogin', ['uses' => 'AjedrezController@BtnLogin']);
    $router->get('/MostrarRepeticion', ['uses' => 'AjedrezController@MostrarRepeticion']);
    $router->post('/GuardarProgreso', ['uses' => 'AjedrezController@GuardarProgreso']);
});
