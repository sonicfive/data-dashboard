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


  $orders = App\Order::all();

  $offices = collect([ "west", "east", "north", "south" ]);

  return $offices->map( function( $office ) use ( $orders ) {

    return [

      $office =>

      $orders->load(['agent', 'lineItems'])->filter( function( $order ) use ( $office ){

        return $order->agent->office == $office;

      })->map( function( $order ){

        return $order->lineItems->map( function( $lineItem ){

          return $lineItem->price * $lineItem->quantity;

        })->sum();

      })->sum()

    ];

  })->flatten()->sum();




});
