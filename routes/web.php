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

// Route::get('/', 'BeerController@index');//collegamento della root al controller

Route::resource('/beers','Beer_2Controller');//collegamento all crud (Beers)nome che scegliamo noi
