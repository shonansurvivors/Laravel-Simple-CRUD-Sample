<?php

Route::get('/', 'ItemController@index')->name('index');
Route::get('/items/create', 'ItemController@create')->name('create');
Route::post('/items', 'ItemController@store')->name('store');
Route::get('/items/{id}', 'ItemController@show')->name('show')->where('id', '[0-9]+');
Route::get('/items/{id}/edit', 'ItemController@edit')->name('edit')->where('id', '[0-9]+');
Route::patch('/items/{id}', 'ItemController@update')->name('update')->where('id', '[0-9]+');
Route::get('/items/{item}/delete', 'ItemController@delete')->name('delete')->where('item', '[0-9]+');
Route::delete('/items/{item}', 'ItemController@destroy')->name('destroy')->where('item', '[0-9]+');
