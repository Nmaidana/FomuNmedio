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

/*Route::get('/', function () {
  return view('welcome');
});*/

//Auth::routes();

//Route::get('/home', 'HomeController@create');
//Route::resource('/home', 'HomeController@create');
//Route::post('/formulario', 'HomeController@store');

Route::get('/', function () {
    return view('welcome');
})->name('inicio');
   
Route::resource('/home', 'HomeController');
Route::post('/formulario', 'HomeController@store');
