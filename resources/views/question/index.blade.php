<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@1,600&family=Yusei+Magic&display=swap"
        rel="stylesheet">
    <title>Quenstion</title>
</head>

<body class="font_ja">
    <header>
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
    <main>
        <p class="title">問題</p>
        <div class="question-text">
            <p>{{ $question->question }}</p>
        </div>
        <p class="title">選択肢</p>
        <ul>
            @foreach ($question->answers as $answer)
                <li>
                    <label>
                        <input type="checkbox" class="{{ 'answer_' . $answer->answer }} choice_btn_all">
                        {{ $answer->choice }}</input>&ensp;{{ $answer->sentence }}
                    </label>
                </li>
            @endforeach
        </ul>
        <button class="check_btn">Check!</button>

        <p class="title">解説</p>
        <div></div>
        <div class="{{ 'page_' . $question->question_num }}  page_btn">
            <a href="http://127.0.0.1:8000/question/index/{{ $question->question_num - 1 }}">
                <button class="backQestion_btn">Back</button></a>
            <a href="http://127.0.0.1:8000/question/index/{{ $question->question_num + 1 }}">
                <button class="nextQestion_btn">Next</button></a>
        </div>
    </main>

    <script>
        const ckeckButton = document.querySelector('.check_btn'); //-------正誤判定ボタン
        const allChoices = document.querySelectorAll('.choice_btn_all'); //----------全選択肢
        const correctAnswers = document.querySelectorAll('.answer_1') //-------正解の選択肢
        const wrongAnswers = document.querySelectorAll('.answer_0') //--------不正解の選択肢
        // const rightEffect = document.querySelector('.maru') //-----------正解エフェクト 
        // const wrongEffect = document.querySelector('.batu') //-----------不正解エフェクト

        let checkboxes = document.querySelectorAll('input[type="checkbox"]') //-------input要素取得(CheckBox)

        let correctCount = 0; //-------正答数カウント

        ckeckButton.onclick = () => {

            for (let i = 0; i < allChoices.length; i++) {
                if (allChoices[i].checked === true && allChoices[i].getAttribute('class').split(' ')[0] ===
                    'answer_1') {
                    correctCount++;
                }
                console.log(correctCount)
            }


            if (correctCount === correctAnswers.length) {
                alert('正解！') //--------正解
            } else {
                alert('不正解！！') //--------不正解
            }
        };
    </script>


</body>
<style>

</style>

</html>
