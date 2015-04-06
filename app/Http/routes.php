<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');



Route::get('/','IndexController@index');
Route::post('/stock','IndexController@searchStock');
Route::get('/stock/{stock_name}','StockResultController@index');
Route::post('/stock/{stock_name}','StockResultController@withDate');
Route::get('/stockResult/GetPriceOf/','StockResultController@GetPriceOf');

// Route::get('stockResult','IndexController@graph');


Route::get('/test', 'IndexController@test');
Route::get('/brokerRanking','Stockranking@index');
Route::post('brokerRanking', 'Stockranking@search');

Route::get('/recommendations','RecommendationController@index');
Route::post('/recommendations','RecommendationController@search');

Route::get('/analysis','Analysis@index');
Route::post('/analysis','Analysis@search');

Route::get('/team','IndexController@team');
// Route::get('/stock/{Stock_ID}','IndexController@stockResult');

Route::get('/test2','RecommendationController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);