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
use Illuminate\Support\Facades\Input;
use App\Client;

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/clients', 'HomeController@clients')->name('clients');
//search
Route::any('/search',function(){
    $q = Input::get ( 'q' );
    $client = Client::where('first_name','LIKE','%'.$q.'%')->orWhere('policy_type','LIKE','%'.$q.'%')->get();
    if(count($client) > 0)
        return view('search')->withDetails($client)->withQuery ( $q );
    else return view ('search')->withMessage('No Details found. Try to search again !');
});

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
