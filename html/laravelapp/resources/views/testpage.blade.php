<html>

<head>
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/github-markdown-css/3.0.1/github-markdown.min.css"> -->

</head>

<body>
  <div>
    <h1>tranquil-heart</h1>
    <pre class="prettyprint lang-php">
class MarkdowntextController extends Controller
{
  public function index()
  {
    $m = Markdowntext::find(1);
    if ($m) {
      $rawtext = $m->text;
    } else {
      $rawtext = $this->example();
    }
    $markdowntext = Markdown::parse($rawtext);
    return view('markdowntext', compact('markdowntext', 'rawtext'));
  }

  public function store(Request $request)
  {
    $m = Markdowntext::find(1);
    if (!$m) {
      $m = new Markdowntext();
    }
    $m->text = $request->textarea1;
    $m->save();
    return redirect()->action('MarkdowntextController@index');
  }
}
    </pre>

    <pre class="prettyprint">
class MarkdowntextController extends Controller
{
  public function index()
  {
    $m = Markdowntext::find(1);
    if ($m) {
      $rawtext = $m->text;
    } else {
      $rawtext = $this->example();
    }
    $markdowntext = Markdown::parse($rawtext);
    return view('markdowntext', compact('markdowntext', 'rawtext'));
  }

  public function store(Request $request)
  {
    $m = Markdowntext::find(1);
    if (!$m) {
      $m = new Markdowntext();
    }
    $m->text = $request->textarea1;
    $m->save();
    return redirect()->action('MarkdowntextController@index');
  }
}
    </pre>

    <pre class="prettyprint">
PHP
class LoginController extends Controller
{
// ...

/**
* ユーザーを探す条件を指定する
*
* @param \Illuminate\Http\Request $request
* @return Response
*/
protected function credentials(Request $request)
{
return array_merge(
$request->only($this->username(), 'password'), // 標準の条件
[ 'is_valid' => true ] // 追加条件
);
}
}
</pre>
    <pre class="prettyprint">
'use strict';

const myGenerator = () => {
const a = [100, 101, 102];
const innerGenerator = function* () {
a.forEach((e) => {
// yield e; // SyntaxError
console.log(e);
});
for (const e of a) {
yield e;
}
};
return innerGenerator();
};

function* generator() {
yield 1;
yield 2;
yield 3;
}

const generator4main = () => {
const g = myGenerator();
for (const e of g) {
console.log(e);
}
};

generator4main();
</pre>
    <pre class="prettyprint lang-php">
class MarkdowntextController extends Controller
{
public function index()
{
$m = Markdowntext::find(1);
if ($m) {
$rawtext = $m->text;
} else {
$rawtext = $this->example();
}
$markdowntext = Markdown::parse($rawtext);
return view('markdowntext', compact('markdowntext', 'rawtext'));
}

public function store(Request $request)
{
$m = Markdowntext::find(1);
if (!$m) {
$m = new Markdowntext();
}
$m->text = $request->textarea1;
$m->save();
return redirect()->action('MarkdowntextController@index');
}
}
</pre>
    <pre class="prettyprint lang-c">
import java.util.*;

public class Main {
  public static void main(String[] args) throws Exception {
    // Your code here!
    System.out.println("XXXXXXXX");
  }
}
</pre>
    <pre class="prettyprint lang-java">
import java.util.*;

public class Main {
  public static void main(String[] args) throws Exception {
    // Your code here!
    System.out.println("XXXXXXXX");
  }
}
</pre>
    <pre class="prettyprint lang-js linenums">
import java.util.*;

public class Main {
  public static void main(String[] args) throws Exception {
    // Your code here!
    System.out.println("XXXXXXXX");
  }
}
</pre>
    <pre class="prettyprint lang-php linenums">
import java.util.*;

public class Main {
  public static void main(String[] args) throws Exception {
    // Your code here!
    System.out.println("XXXXXXXX");
  }
}
</pre>
  </div>
  <script src="{{ asset('/js/monokai-preprocessing.js') }}"></script>
  <!-- <script src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js?lang=php"></script> -->
  <script src="https://cdn.jsdelivr.net/gh/google/code-prettify@master/loader/run_prettify.js"></script>
  <!-- <link rel="stylesheet" href="https://jmblog.github.io/color-themes-for-google-code-prettify/themes/tranquil-heart.min.css"> -->


  <!-- <link rel="stylesheet" href="https://jmblog.github.io/color-themes-for-google-code-prettify/themes/atelier-sulphurpool-light.min.css"> -->
  <link rel="stylesheet" href="https://jmblog.github.io/color-themes-for-google-code-prettify/themes/tomorrow-night.min.css">
  <!-- <link rel="stylesheet" href="https://jmblog.github.io/color-themes-for-google-code-prettify/themes/atelier-seaside-light.min.css"> -->
  <!-- <link rel="stylesheet" href="https://jmblog.github.io/color-themes-for-google-code-prettify/themes/atelier-cave-light.min.css"> -->
  <link rel="stylesheet" href="https://jmblog.github.io/color-themes-for-google-code-prettify/themes/tomorrow.min.css">
</body>

</html>
