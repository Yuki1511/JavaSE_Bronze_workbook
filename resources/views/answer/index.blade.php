<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AnswerTable</title>
</head>

<body>
    Answerページ
    <h1>問題と解答一覧</h1>
    <table>
        <thead>
            <tr>
                <th>問題番号</th>
                <th>問題文</th>
                <th>章</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($answers as $answer)
                <tr>
                    <td>{{ $answer->answer_num }}</td>
                    <td>{{ $answer->question->question }}</td>
                    <td>{{ $answer->choice }}</td>
                    <td>{{ $answer->sentence }}</td>
                    {{-- 0(false) / 1 (true)を文字列に変換 --}}
                    <td>
                        @if ($answer->answer)
                            正解
                        @else
                            不正解
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
