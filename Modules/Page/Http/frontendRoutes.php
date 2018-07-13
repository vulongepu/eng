<?php

use Illuminate\Routing\Router;


$router->get('/phim', [
    'uses' => 'PublicController@phim',
    'as' => 'phim',
]);
$router->get('/xemphim', [
    'uses' => 'PublicController@xemphim',
    'as' => 'xemphim',
]);


/** @var Router $router */
if (! App::runningInConsole()) {
    $router->get('/', [
        'uses' => 'PublicController@homepage',
        'as' => 'homepage',
        'middleware' => config('asgard.page.config.middleware'),
    ]);
    $router->any('{uri}', [
        'uses' => 'PublicController@uri',
        'as' => 'page',
        'middleware' => config('asgard.page.config.middleware'),
    ])->where('uri', '.*');

}

