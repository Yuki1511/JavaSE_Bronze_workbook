<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&family=Shippori+Mincho&display=swap"
        rel="stylesheet">
    <title>Quenstion</title>
</head>

<body class="font_ja">
    <header>
        <div class="wrapper">
            <div class="site_top">
                <h1>Java SE11 Bronze 資格対策</h1>
                <div class="login_btn"><a href="#">ログイン</a></div>
            </div>
            <ul class="main_nav ">
                <li><a href="#">学習開始</a></li>
                <li><a href="#">章選択</a></li>
                <li><a href="#">試験概要</a></li>
            </ul>
        </div>
    </header>
    <main class="wrapper">
        {{ $slot }}
    </main>
</body>

</html>
