<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quenstion</title>
</head>

<body>
    Quenstionページ
    <h1>問題一覧</h1>
    <table>
        <thead>
            <tr>
                <th>問題文</th>
                <th>章</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($questions as $question)
                <tr>
                    <td>{{$question->id}}</td>
                    <td>{{ $question->question }}</td>
                    <td>{{ $question->category_id }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
