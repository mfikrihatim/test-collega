<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'QuotesController@getRandom')->name('quotes.random');
// Route::get('/quotes/random', 'QuotesController@getRandom')->name('quotes.random');  
// route::get('/', function(){
//     return view('in');
// });

