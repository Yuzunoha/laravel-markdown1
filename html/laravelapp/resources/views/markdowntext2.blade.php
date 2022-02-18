<html>

<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/github-markdown-css/3.0.1/github-markdown.min.css">
</head>

<body>
  <h1>v2</h1>
  <div>
    <pre class="prettyprint lang-js linenums">
console.log('Hello World', 123);
    </pre>
    <pre class="prettyprint lang-php">
console.log('Hello World', 123);
    </pre>
    <pre class="prettyprint language-js">
console.log('Hello World', 123);
    </pre>
    {{ $markdowntext }}
    {{ Form::open(['action' => 'MarkdowntextController@store', 'method' => 'post']) }}
    {{ Form::token() }}
    {{ Form::textarea('textarea1', $rawtext, ['class' => 'form-control',  'rows' => '80', 'cols' => '120']) }}
    {{ Form::submit('上書き', ['class' => 'btn btn-success btn-lg']) }}
    {{ Form::close() }}
  </div>
  <script>
    const elements = document.querySelectorAll("[class^='lang']"); // langから始まるクラス
    for (const element of elements) {
      element.classList.add('prettyprint');
    }
  </script>
  <script src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js"></script>
  <link rel="stylesheet" href="https://jmblog.github.io/color-themes-for-google-code-prettify/themes/github-v2.min.css">
</body>

</html>
