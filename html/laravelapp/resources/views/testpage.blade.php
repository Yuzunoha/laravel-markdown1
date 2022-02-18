<html>

<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/github-markdown-css/3.0.1/github-markdown.min.css">
</head>

<body>
  <div>
    testpage!!!
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
