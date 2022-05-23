<html lang="en">

<head>
    <link href="mermaid.min.css" rel="stylesheet">
    </link>
</head>

<body>
    <div class="mermaid">
        graph TD;
        スーパーに入る --> 品物をかごに入れる
        品物をかごに入れる --> レジに並ぶ
        レジに並ぶ --> お金を払う
        お金を払う --> 袋詰する
        袋詰する --> 帰る

    </div>
    <script src="https://cdn.jsdelivr.net/npm/mermaid/dist/mermaid.min.js"></script>
    <script>
        mermaid.initialize({
            startOnLoad: true
        });
    </script>
</body>

</html>
