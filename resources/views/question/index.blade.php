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
        {{-- 選択した組み合わせが正しいか確認 --}}



        <h4>解説</h4>
        <button class="nextQestion_btn">次へ</button>
    </main>
    
    <script>
        const Button = document.querySelector('.answer_btn'); //-------正誤判定ボタン取得
        const answers = document.querySelectorAll('.answer_btn_all'); //----------全選択肢取得
        const correctAnswers = document.querySelectorAll('.answer_1') //-------正解選択肢取得
        const rightEffect = document.querySelector('.maru') //-----------正解エフェクト取得 
        const wrongEffect = document.querySelector('.batu') //-----------不正解エフェクト取得

        let checkboxes = document.querySelectorAll('input[type="checkbox"]') //-------input要素取得(CheckBox)

        let correctCount = 0; //-------正答数カウント

        console.log(Button);


        Button.onclick = () => {
            correctCount = 0;

            answers.forEach((answer, index) => {
                if (checkboxes[index].checked && answer.classList.contains('answer_1')) {
                    correctCount++;
                }
            });

            if (correctCount === correctAnswers.length) {
                rightEffect.style.display = 'block';
            } else {
                wrongEffect.style.display = 'block';
            }
        };
    </script>


</body>
<style>

</style>

</html>
