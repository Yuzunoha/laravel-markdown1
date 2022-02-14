<html>

<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/github-markdown-css/3.0.1/github-markdown.min.css">
</head>

<body>
  <div>
    {{ Form::open(['action' => 'MarkdowntextController@store', 'method' => 'post']) }}
    {{ Form::textarea('textarea1', $rawtext, ['class' => 'form-control',  'rows' => '80', 'cols' => '120']) }}
    {{ Form::submit('上書き', ['class' => 'btn btn-success btn-lg']) }}
    {{ Form::close() }}
    {{ $markdowntext }}
  </div>
</body>

</html>
