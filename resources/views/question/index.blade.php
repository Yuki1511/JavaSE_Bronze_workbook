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
            <li>選択A</li>
            <li>選択B</li>
            <li>選択C</li>
            <li>選択D</li>
            <li>選択E</li>
            <li>選択F</li>
        </ul>
        <h4>答え</h4>
        <h4>解説</h4>
        <button id="next-button">次の問題</button>
        <table>
            <thead>
                <tr>
                    <th>問題番号</th>
                    <th>問題文</th>
                    <th>章</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($questions as $question)
                    <tr>
                        <div>{{ $question->question }}</div>
                        <td>{{ $question->question_num }}</td>
                        <td>{{ $question->category_num }}</td>
                        
                        {{-- {{dd($question)}} --}}
                        {{-- @foreachは拡張for文 --}}
                        @foreach ($question->answers as $answer)
                        <input type="radio" name="answer" value="{{ $answer->choice }}">
                        {{-- <td>{{ $answer->sentence }}</td> --}}
                        @endforeach
                    </tr>
                    @endforeach
                </tbody>
            </table>
    </main>
</body>

</html>
