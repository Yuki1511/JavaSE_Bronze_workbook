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
        <ul class="main_nav">
            <a href="#">
                <li>学習開始</li>
            </a>
            <a href="#">
                <li>章選択</li>
            </a>
            <a href="#">
                <li>ログイン</li>
            </a>
        </ul>
        <div class="test_day">
            <p>試験日</p>
        </div>
    </header>
    <main>
        <h3>問題</h3>
        <div class="question-text">
            <p>{{ $question->question }}</p>
        </div>
        <h4>選択肢</h4>
        <ul style="list-style: none">
            @foreach ($question->answers as $answer)
                <li class="answer_btn_all">
                    <label>
                        <input type="checkbox" class="{{ 'answer_' . $answer->answer }}">
                        {{ $answer->choice }}</input>&ensp;{{ $answer->sentence }}
                    </label>
                </li>
            @endforeach
        </ul>
        <button class="answer_btn">正解を確認</button>

        <h4>解説</h4>
        <div class="{{ 'page_' . $question->question_num }} ">
            <a href="http://127.0.0.1:8000/question/index/{{ $question->question_num - 1 }}">
                <button class="backQestion_btn">前の問題</button></a>
            <a href="http://127.0.0.1:8000/question/index/{{ $question->question_num + 1 }}">
                <button class="nextQestion_btn">次の問題</button></a>
        </div>
    </main>

    <script>
        // page1の時は「前の問題」ボタンを非表示する
       const currentPage = document.querySelector('.page_1');
       const backButton = document.querySelector('.backQuestion_btn');

       if(currentPage === 'page_1'){
        backButton.style.display = 'none';
       }

       
        // 選択肢の正否


    </script>


</body>
<style>

</style>

</html>
