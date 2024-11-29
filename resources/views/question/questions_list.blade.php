<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quenstion</title>
</head>

<body>
    <h2>問題一覧</h2>
    <table>
        <thead>
            <tr>
                <th>問題番号</th>
                <th>問題文</th>
                <th>章</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($questions as $list)
                <tr>
                    <td>{{ $list->question }}</td>
                    <td>{{ $list->question_num }}</td>
                    <td>{{ $list->category_num }}</td>

                    {{-- {{dd($question)}} --}}
                    {{-- @foreachは拡張for文 --}}
                    @foreach ($list->answers as $answer)
                        <td>{{ $answer->sentence }}</td>
                    @endforeach
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
