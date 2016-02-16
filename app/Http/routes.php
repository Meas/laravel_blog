<?php

Route::get('about', 'PagesController@about');
Route::get('contact', 'PagesController@contact');


Route::group(['middleware' => 'web'], function() {
Route::get('articles/create', 'ArticlesController@create');
Route::get('articles/edit/{id}', 'ArticlesController@edit');
Route::post('articles/update/{id}', 'ArticlesController@update');

Route::post('articles', 'ArticlesController@store');
Route::controllers ([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
Route::get('articles', 'ArticlesController@index'); /* ovaj bio ispod contacts*/
Route::get('articles/{id}', 'ArticlesController@show'); /*ovaj bio na kraju skroz*/

});




/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*Route::get('/', function () {
    return view('welcome');
});
Route::get('contact', function () {
	return view('pages/contact');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/
/*
Route::group(['middleware' => ['web']], function () {
    //
});
*/
Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
});
