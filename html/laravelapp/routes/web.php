<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'MarkdowntextController@index');
Route::post('/', 'MarkdowntextController@store');
Route::get('/test', function () {
  echo '<pre>';
  echo $_SERVER['HTTP_HOST'];
});
