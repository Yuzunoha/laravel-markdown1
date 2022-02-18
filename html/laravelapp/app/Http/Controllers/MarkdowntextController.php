<?php

namespace App\Http\Controllers;

use App\Models\Markdowntext;
use Illuminate\Http\Request;
use Illuminate\Mail\Markdown;

class MarkdowntextController extends Controller
{
  protected function index_core()
  {
    $m = Markdowntext::find(1);
    if ($m) {
      $rawtext = $m->text;
    } else {
      $rawtext = $this->example();
    }
    $markdowntext = Markdown::parse($rawtext);
    return [$markdowntext, $rawtext];
  }

  public function index()
  {
    list($markdowntext, $rawtext) = $this->index_core();
    return view('markdowntext', compact('markdowntext', 'rawtext'));
  }

  public function index2()
  {
    list($markdowntext, $rawtext) = $this->index_core();
    return view('markdowntext2', compact('markdowntext', 'rawtext'));
  }

  protected function store_core(Request $request)
  {
    $m = Markdowntext::find(1);
    if (!$m) {
      $m = new Markdowntext();
    }
    $m->text = $request->textarea1;
    $m->save();
  }

  public function store(Request $request)
  {
    $this->store_core($request);
    return redirect()->action('MarkdowntextController@index');
  }

  public function store2(Request $request)
  {
    $this->store_core($request);
    return redirect()->action('MarkdowntextController@index2');
  }

  public function example()
  {
    $t = <<< EOM
Markdownを使う理由
=================================

最近使い始めたMarkdownについてまとめます。


-------------------------------
  Markdown（マークダウン）とは
-------------------------------

> Markdown は、文書を記述するための軽量マークアップ言語のひとつである。  
> 「書きやすくて読みやすいプレーンテキストとして記述した文書を、
> 妥当なXHTML（もしくはHTML）文書へと変換できるフォーマット」として、
> ジョン・グル―バー（John Gruber）により作成された。  
> 出典：[Wikipedia（Markdown）](http://ja.wikipedia.org/wiki/Markdown)

要は、プレーンテキストを勝手にHTML化して、それっぽく見せてくれるモノです。

議事録やアイデアメモを普通のテキストエディタで作ってもよいのですが、  
それだと文字の強調や、資料画像の埋め込み、リンク追加などができません。

それを解決してくれるのがMarkdownです。


-------------------------------
   Markdownを使う理由
-------------------------------

Lifehackerの「 [読みやすいマークダウン記法を始めてみませんか？](http://www.lifehacker.jp/2013/02/130213markdown.html) 」を読み、  
初めてMarkdown記法を知りました。

第一印象は、 **簡単なのにそれっぽく見えるカッコイイ！！** です。
テキストエディタの表現限界を感じもっと見やすい資料が作りたい、  
でも忙しいから手間がかからないやつが良いという私にピッタリのモノでした。

いちいちHTMLを書くのも面倒だし、  
Office Word？そんなもん使ってたら貴重な時間が潰されてしまいます。


-------------------------------
  基本的な文法
-------------------------------

Markdownの文法は非常に簡単なものです。  
私の場合、使い始めて1週間しないうちにだいたいの文法を覚えることができました。  
基本的な文法だけ紹介します。

-------------------------------
  見出し
-------------------------------
# 見出し１（h1）
## 見出し２（h2）
### 見出し３（h3）
#### 見出し４（h4）
##### 見出し５（h5）
###### 見出し６（h6）

-------------------------------
  強調
-------------------------------
*イタリック*  
_イタリック_  
**ボールド**  
__ボールド__  
**_イタリック＆ボールド_**  

-------------------------------
  改行
-------------------------------
空白行で囲まれた１行、または複数行の文章はひとつの段落になる

改行を入れないと複数の
段落にならない  
複数行で改行を入れたい場合は、  
末尾に半角スペース２つを入れる

-------------------------------
  リスト
-------------------------------
* リスト１
- リスト２
  リストの末尾に半角2つで改行
+ リスト３
 + 入れ子
1. 番号付き
1. 番号付き
5. 数字は無視されリストの順序が優先される  

-------------------------------
  リンク
-------------------------------
[リンクになる](http://kuroeveryday.blogspot.jp/)  
これでもOK <http://kuroeveryday.blogspot.jp/>

-------------------------------
  テーブル
-------------------------------
| Left align       |       Right align |    Center align    |
|:-----------------|------------------:|:------------------:|
| This             |              This |        This        |
| column           |            column |       column       |
| will             |              will |        will        |
| be               |                be |         be         |
| left             |             right |       center       |
| aligned          |           aligned |      aligned       |

-------------------------------
  引用
-------------------------------
> 引用とチェックボックスはLaravelでは表現できないらしい


-------------------------------
より詳しい文法は、  以下のサイトを参照してください。

+ [Wikipedia（Markdown）](http://ja.wikipedia.org/wiki/Markdown)
+ [Markdown文法の全訳](http://blog.2310.net/archives/6)





以上
EOM;

    return $t;
  }
}
