<x-app-layout>
    <div class="main-contents">
        <h4 class="title">問題</h4>
        <div class="question-text">
            <p>{{ $question->question }}</p>
        </div>
        <h4 class="title">選択肢</h4>
        <ul class="answers_list">
            @foreach ($question->answers as $answer)
                <li>
                    <label>
                        <input type="checkbox" class="{{ 'answer_' . $answer->answer }} choice_btn_all">
                        {{ $answer->choice }}</input>&ensp;{{ $answer->sentence }}
                    </label>
                </li>
            @endforeach
        </ul>
    </div>

    <button class="check_btn">Check!</button>
    <h4 class="title">解説</h4>
    <div class="{{ 'page_' . $question->question_num }}  page_btn">
        <a href="http://127.0.0.1:8000/question/index/{{ $question->question_num - 1 }}">
            <button class="backQestion_btn">Back</button></a>
        <a href="http://127.0.0.1:8000/question/index/{{ $question->question_num + 1 }}">
            <button class="nextQestion_btn">Next</button></a>
    </div>
    <script>
        const ckeckButton = document.querySelector('.check_btn'); //-------正誤判定ボタン
        const allChoices = document.querySelectorAll('.choice_btn_all'); //----------全選択肢
        const correctAnswers = document.querySelectorAll('.answer_1') //-------正解の選択肢
        const wrongAnswers = document.querySelectorAll('.answer_0') //--------不正解の選択肢
        //-----------正解エフェクト 
                    function showConfetti() {
            confetti({
                particleCount: 100,
                spread: 70,
                origin: {
                    y: 0.8
                }
            });
        }

        // const wrongEffect = document.querySelector('.batu') //-----------不正解エフェクト

        let checkboxes = document.querySelectorAll('input[type="checkbox"]') //-------input要素取得(CheckBox)


        // 正解をチェック->count++、不正解をチェック->count--
        ckeckButton.onclick = () => {
            let correctCount = 0; //----------カウントリセット


            for (let i = 0; i < allChoices.length; i++) {
                if (allChoices[i].checked === true && allChoices[i].getAttribute('class').split(' ')[0] ===
                    'answer_1') {
                    correctCount++;
                }
                if (allChoices[i].checked === true && allChoices[i].getAttribute('class').split(' ')[0] ===
                    'answer_0') {
                    correctCount--;
                }
                console.log(correctCount)
            }

            if (correctCount === correctAnswers.length) {
                alert('正解！')
                confetti();
            } else {
                alert('不正解！！')
            }
        };
    </script>


</x-app-layout>
