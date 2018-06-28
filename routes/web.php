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
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/clients', 'HomeController@clients')->name('clients');
Route::get('/chart','HomeController@chart')->name('chart');
//search
Route::any('/search',function(){
    $q = Input::get ( 'q' );
    $id = Auth::User()->id;
    $client = Client::where('first_name','LIKE','%'.$q.'%')
        ->orWhere('policy_type','LIKE','%'.$q.'%')
        ->where('agent_id','=',$id)
        ->get();
    if(count($client) > 0 ) 
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
//new premium
$api->version('v1', function($api){
    $api->post('newpremium','App\Http\Controllers\PremiumsController@store');
});
//get all clients
$api->version('v1', function($api){
    $api->post('getClients','App\Http\Controllers\ClientController@getClients');
});
$api->version('v1', function($api){
    $api->post('getSpecific','App\Http\Controllers\ClientController@getSpecific');
});
//charts
$api->version('v1', function($api){
    $api->post('chart','App\Http\Controllers\ClientController@chart');
});
