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

$router->get('/hui', function () use ($router){
    return 'wkwkw';
});

$router->get('/test/{id}', function ($id){
    return $id;
});

$router->get('/post/{id}/user/{id2}', function ($id, $id2){
    return $id + $id2;
});

$router->get('/optional[/{param}]', function ($param = null){ // set default nilai variable
    return $param;
});

$router->get('profile', function () {
    return redirect()->route('route.profile');
});

$router->get('profile/hendriyono', ['as' => 'route.profile', function () {
    return 'profile hendriyono';
}]);