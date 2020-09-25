<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'StanzaController@index') -> name('index');
Route::get('/{id}', 'StanzaController@show') -> name('show');
Route::get('/create/stanze', 'StanzaController@create') -> name('create');
Route::post('/create/stanze', 'StanzaController@store') -> name('store');
