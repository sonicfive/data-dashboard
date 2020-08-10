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
    return view('welcome');
});

Route::resource('agents', 'AgentController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/q', function(){

  $agent = App\Agent::first();

  return $agent->orders->load('lineItems')->pluck('lineItems')->flatten()->

  map(function($lineItem){

    return $lineItem->price * $lineItem->quantity;

  })->sum();

});
