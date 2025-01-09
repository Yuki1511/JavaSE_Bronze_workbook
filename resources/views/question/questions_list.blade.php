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
    <header class="wrapper">
        <div class="site_top">
            <h2>Java SE11 Bronze 資格対策</h2>
            <p>ログイン</p>
        </div>
        <ul class="main_nav ">
            <a href="#">
                <li>学習開始</li>
            </a>
            <a href="#">
                <li>章選択</li>
            </a>
            <a href="#">
                <li>試験概要</li>
            </a>
        </ul>
    </header>
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
