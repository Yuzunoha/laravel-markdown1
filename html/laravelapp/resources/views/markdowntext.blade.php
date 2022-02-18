<html>

<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/github-markdown-css/3.0.1/github-markdown.min.css">
</head>

<body>
  <div>
    {{ Form::open(['action' => 'MarkdowntextController@store', 'method' => 'post']) }}
    {{ Form::token() }}
    {{ Form::textarea('textarea1', $rawtext, ['class' => 'form-control',  'rows' => '80', 'cols' => '120']) }}
    {{ Form::submit('上書き', ['class' => 'btn btn-success btn-lg']) }}
    {{ Form::close() }}
    {{ $markdowntext }}
  </div>
  <pre>
    <code class="prettyprint lang-js">
    console.log('Hello World')
    </code>
  </pre>
  <script>
    const elements = document.querySelectorAll("[class^='lang']"); // langから始まるクラス
    for (const element of elements) {
      element.classList.add('prettyprint');
      // element.style.fontSize = '16px';
      element.style.fontWeight = "bold";
    }
  </script>
  <script src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js"></script>
</body>

</html>
