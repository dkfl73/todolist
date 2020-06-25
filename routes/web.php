<?php

use Illuminate\Support\Facades\Route;

Route::post('/submit','taskController@submit_post')->name('submit-form');//insert

Route::get('/','taskController@select')->name('select');//select

Route::get('/delete/{id}','taskController@delete')->name('delete');//delete'
