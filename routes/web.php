<?php

Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
Route::get('/agenda', 'AgendaController@index')->name('portfolio.index');
Route::get('/agenda/crear', 'AgendaController@create')->name('portfolio.create');

Route::get('/agenda/{contacto}/editar', 'AgendaController@edit')->name('portfolio.edit');
Route::patch('/agenda/{contacto}', 'AgendaController@update')->name('portfolio.update');

Route::post('/agenda/store', 'AgendaController@store')->name('portfolio.store');
Route::get('/agenda/{contacto}', 'AgendaController@show')->name('portfolio.show');

Route::delete('/agenda/{contacto}', 'AgendaController@destroy' )->name('portfolio.destroy');

Route::view('/contact', 'contact')->name('contact');

Route::view('/login', 'login')->name('login');