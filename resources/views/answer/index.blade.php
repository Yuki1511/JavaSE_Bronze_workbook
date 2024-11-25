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
                    <td>{{ $answer->answer_nam}}</td>
                    <td>{{ $answer->question_nam }}</td>
                    <td>{{ $answer->choice }}</td>
                    <td>{{ $answer->sentence }}</td>
                    <td>{{ $answer->answer }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
