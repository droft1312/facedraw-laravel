<?php

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/login', 'PagesController@login');

Route::resource('messages', 'MessagesController');
