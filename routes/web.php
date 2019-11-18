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

// $router->get('/', function () use ($router) {
//     return $router->app->version();
// });

$router->get('/', 'IdeenController@index');

// API
$router->group(['prefix' => 'api'], function () use ($router) {
    // GET
    $router->get('ideas', 'IdeenController@ideas');
    $router->get('categories', 'IdeenController@categories');

    // POST
    $router->post('create/idea', 'IdeenController@createIdea');
});


