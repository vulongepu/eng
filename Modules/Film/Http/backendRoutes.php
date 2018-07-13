<?php

use Illuminate\Routing\Router;
/** @var Router $router */

$router->group(['prefix' =>'/film'], function (Router $router) {
   $router->get('film', [
        'as' => 'admin.film.film.index',
        'uses' => 'FilmController@index',
        'middleware' => 'can:page.pages.index',
    ]);
});
