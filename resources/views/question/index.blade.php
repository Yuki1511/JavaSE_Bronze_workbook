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
        @foreach ($question->answers as $answer)
            <ul style="list-style: none">
                <label>
                    <button type="submit"
                        name="choice_answer">{{ $answer->choice }}</button>&ensp;{{ $answer->sentence }}
                </label>
            </ul>
            <h4>答え</h4>
            {{-- 選択肢から答えを選択すると表示 --}}
            <script>
                const choice_answer = document.querySelector('choice_answer');

                const answer = 
                {{$answer->answer('value')}};
                    choice_answer.addEventListener('click', answer);
            </script>
        @endforeach

        <h4>解説</h4>
        <button>次へ</button>
    </main>
</body>
<style>

</style>

</html>
