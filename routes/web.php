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


Route::get('/questoes', ['uses'=>'QuestoesController@Page1'])->name('questoes');
Route::post('/questoes', ['uses'=>'QuestoesController@SalvaPage1'])->name('questoes');


Route::post('/questoes2', ['uses'=>'QuestoesController@SalvaPage2'])->name('questoes2');
Route::post('/questoes3', ['uses'=>'QuestoesController@SalvaPage3'])->name('questoes3');
Route::post('/questoes4', ['uses'=>'QuestoesController@SalvaPage4'])->name('questoes4');
Route::post('/questoes5', ['uses'=>'QuestoesController@SalvaPage5'])->name('questoes5');
Route::post('/questoes6', ['uses'=>'QuestoesController@SalvaPage6'])->name('questoes6');

Route::get('/dashboard', ['uses'=>'QuestoesController@Dashboard'])->name('dashboard');
