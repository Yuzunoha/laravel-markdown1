<html>

<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/github-markdown-css/3.0.1/github-markdown.min.css">
</head>

<body>
  <div>
    testpage!!!
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
  </div>
  <pre>
    <code class="prettyprint lang-js">
    console.log('Hello World')
    </code>
  </pre>
  <script src="{{ asset('/js/monokai-preprocessing.js') }}"></script>
  <!-- <script src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js"></script> -->
</body>

</html>
