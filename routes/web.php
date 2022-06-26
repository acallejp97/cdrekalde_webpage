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

//IDIOMA CAMBIOS
Route::get('lang/{lang}', function ($lang) {
    \Session::put('lang', $lang);
    return \Redirect::back();
})->middleware('web')->name('change_lang');

Route::get('/', "Controller@index")->name('index');
Route::get('/karate-infantil', "Controller@karateinfantil")->name('karate-infantil');
Route::get('/karate-adulto', "Controller@karateadulto")->name('karate-adulto');
Route::get('/kickboxing', "Controller@kickboxing")->name('kickboxing');
Route::get('/aikido', "Controller@aikido")->name('aikido');
Route::get('/pilates', "Controller@pilates")->name('pilates');
Route::get('/defensapersonal', "Controller@defensapersonal")->name('defensapersonal');
