<?php

namespace App\Http\Controllers;

use App\Models\Markdown as ModelsMarkdown;
use Illuminate\Mail\Markdown;

class TestController extends Controller
{
  public function index()
  {
    $markdowns = ModelsMarkdown::get();
    $text = $markdowns[0]['markdowntext'];
    $text = Markdown::parse(e($text));
    return view('test', compact('text'));
  }

  public function getText()
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
}
