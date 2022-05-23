<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'MarkdowntextController@index');
Route::get('/v2', 'MarkdowntextController@index2');
Route::post('/', 'MarkdowntextController@store');
Route::post('/v2', 'MarkdowntextController@store2');
Route::get('/test', function () {
    echo '<pre>';
    echo $_SERVER['HTTP_HOST'] . '<br>';
    $msg = 'localhost' !== $_SERVER['HTTP_HOST'] ? '真' : '偽';
    echo '(localhost !== $_SERVER[HTTP_HOST]): ' . $msg . '<br>';
});
Route::get('/testpage', function () {
    return view('testpage');
});

Route::get('/github-v2', 'MarkdowntextController@path');
Route::get('/tomorrow-night', 'MarkdowntextController@path');
Route::get('/tranquil-heart', 'MarkdowntextController@path');
Route::get('/mermaid', 'MarkdowntextController@mermaid');
