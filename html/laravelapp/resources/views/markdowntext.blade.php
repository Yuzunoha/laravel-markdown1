<html>

<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/github-markdown-css/3.0.1/github-markdown.min.css">
</head>

<body>
  <div>
    {{ Form::textarea('textareaRemarks', $rawtext, ['class' => 'form-control', 'id' => 'textareaRemarks', 'placeholder' => 'その他、質問などありましたら', 'rows' => '3']) }}
    {{ $markdowntext }}
  </div>
</body>

</html>
