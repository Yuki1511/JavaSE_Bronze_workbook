<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <title>Quenstion</title>
</head>

<body>
    <header>
        <h2>Java SE11 Bronze 資格対策</h2>
        <p>試験日</p>

        <ul style="list-style: none">
            <li>学習開始</li>
            <li>章選択</li>
            <li>ログイン</li>
        </ul>
    </header>
    <main>
        <h3>問題</h3>
        <div class="question-text">
            <p>{{ $question->question }}</p>
        </div>
        <h4>選択肢</h4>
        <ul style="list-style: none">
            @foreach ($question->answers as $answer)
                <li>
                    <label>
                        <input type="checkbox"
                            class={{ 'answer_' . $answer->answer }}>{{ $answer->choice }}</input>&ensp;{{ $answer->sentence }}
                    </label>
                </li>
            @endforeach
        </ul>
        <button >正解を確認</button>
        {{--選択した組み合わせが正しいか確認 --}}

        <script>
            const answers = document.querySelectorAll('.answer_1');   //上のlabelタグで設定したクラスでtrueのみ抽出
            // 選択肢をクリックし、正解を表示させるイベント
            answers.forEach(answer => {
                answer.addEventListener('click', () => {
                    console.log('正解')
                });
            });
        </script>

        <h4>解説</h4>
        <button>次へ</button>
    </main>
</body>
<style>

</style>

</html>
