<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'MarkdowntextController@index');
Route::post('/', 'MarkdowntextController@store');
Route::get('/test', function () {
  echo '<pre>';
  echo $_SERVER['HTTP_HOST'] . '<br>';
  $msg = 'localhost' !== $_SERVER['HTTP_HOST'] ? '真' : '偽';
  echo '(localhost !== $_SERVER[HTTP_HOST]): ' . $msg . '<br>';
});
Route::get('/testpage', function () {
  return view('testpage');
});
