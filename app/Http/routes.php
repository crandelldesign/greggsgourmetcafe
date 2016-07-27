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

$app->get('/', 'HomeController@getIndex');
$app->get('/carryout-menu', 'HomeController@getCarryoutMenu');
$app->get('/catering-menu', 'HomeController@getCateringMenu');
$app->get('/specials', 'HomeController@getSpecials');

$app->get('/style', function () {
    return view('style');
});;