<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>show</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <h1>論文詳細</h1>
    <p>タイトル:{{ $view_article->title }}</p>
    <p>{{ $view_article->body }}</p>
    <div class="button_group">
        <button onclick="location.href='/articles'">一覧へ戻る</button>
        <button onclick="location.href='/articles/{{ $view_article->id }}/edit'">編集する</button>
        <form action="/articles/{{ $view_article->id }}" method='post'>
            @csrf
            @method('DELETE')
            <input type="submit" value='削除する' onclick="if(!confirm('削除しますか？')){return false};">
        </form>

    </div>

</body>

</html>
