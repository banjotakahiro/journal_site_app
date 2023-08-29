<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>show</title>
</head>
<body>
    <h1>論文詳細</h1>
    <h5>{{ $view_article->title }}</h5>
    <h5>{{ $view_article->body }}</h5>
    <button onclick="location.href='/articles'">一覧へ戻る</button>
</body>
</html>
