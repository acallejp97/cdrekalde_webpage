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

// Auth::routes();


    Route::get('/', "Controller@inicio")->name('inicio');

    Route::get('/contacto', "Controller@contacto")->name('contacto');

    Route::get('/galeria', "Controller@galeria")->name('galeria');

    Route::get('/servicios', "Controller@servicios")->name('servicios');
