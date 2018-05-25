<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/clients', 'HomeController@index')->name('clients');

//API ROUTES
$api = app('Dingo\Api\Routing\Router');
$api->version('v1', function($api){
    $api->post('newClient','App\Http\Controllers\ClientController@create');
});
$api->version('v1', function($api){
    $api->post('register','App\Http\Controllers\LoginController@register');
});
$api->version('v1', function($api){
    $api->post('login','App\Http\Controllers\LoginController@login');
});

$api->version('v1', function($api){
    $api->post('register','App\Http\Controllers\LoginController@register');
});
