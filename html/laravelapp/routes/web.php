<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'MarkdowntextController@index');
Route::post('/', 'MarkdowntextController@store');
