<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quenstion</title>
</head>

<body>
    <header>
        <h2>Java SE11 Bronze 資格対策</h2>
        <p>試験日</p>

        <ul>
            <li>学習開始</li>
            <li>章選択</li>
            <li>ログイン</li>
        </ul>
    </header>
    <main>
        <h3>問題</h3>
        <div class="question-text">
            <p>ここに問題文が入る</p>
        </div>
        <h4>選択肢</h4>
        <ul>
            @foreach( $questions as $choice)
            <li>{{$choice->answers}}</li>
        </ul>
        <h4>答え</h4>
        <h4>解説</h4>
<button>次へ</button>
    </main>
</body>

</html>
