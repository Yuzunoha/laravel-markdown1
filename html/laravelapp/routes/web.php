<?php

use App\Models\Markdown;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('markdown', function () {
    return view('markdown');
});

Route::get('hoge', 'HogeController@index');
Route::get('fuga', 'FugaController@index');
Route::get('hoge2', 'Hoge2Controller@index');
Route::get('test', 'TestController@index');
Route::get('demo2', function () {
    $converter = new \cebe\markdown\MarkdownExtra();
    $text = getMarkdowntext();
    $text = $converter->parse($text);
    return view('demo2', compact('text'));
});
Route::get('create', function () {
    $m = new Markdown();
    $text = getMarkdowntext();
    $m->markdowntext = $text;
    $m->save();
    return Markdown::get();
});
function getMarkdowntext()
{
    $text = <<< EOM
    # 見出し h1
    ## 見出し h2
    ### 見出し h3
    #### 見出し h4
    ##### 見出し h5
    ###### 見出し h6
    **太字**
    - リスト
    - リスト
        - リスト
    - [ ] チェックボックス
    - [x] チェックボックス
    - [ ]

    | Left align       |       Right align |    Center align    |
    |:-----------------|------------------:|:------------------:|
    | This             |              This |        This        |
    | column           |            column |       column       |
    | will             |              will |        will        |
    | be               |                be |         be         |
    | left             |             right |       center       |
    | aligned          |           aligned |      aligned       |
    EOM;
    return $text;
}
