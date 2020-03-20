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

$router->get('/mahasiswa', ['uses' => 'MahasiswaController@getall']);
$router->get('/mahasiswa/{id}', ['uses' => 'MahasiswaController@getbyid']);
$router->post('/mahasiswa', ['uses' => 'MahasiswaController@save']);
$router->put('/mahasiswa/{id}', ['uses' => 'MahasiswaController@update']);
$router->delete('/mahasiswa/{id}', ['uses' => 'MahasiswaController@delete']);

