<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnswersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */ 
    public function run(): void
    {
// 1章-----------------------------------------------------
        $param = [
            'question_num' => '1',
            'choice' => 'A',
            'sentence' => 'すべての変数は、型の宣言をしなければならない',
            'answer' => '1',
        ];
        DB::table('answers')->insert($param);
        $param = [
            'question_num' => '1',
            'choice' => 'B',
            'sentence' => 'すべての式は、型を持たない',
            'answer' => '0',
        ];
        DB::table('answers')->insert($param);
        $param = [
            'question_num' => '1',
            'choice' => 'C',
            'sentence' => '式の型はコンパイル時に解釈される',
            'answer' => '1',
        ];
        DB::table('answers')->insert($param);
        $param = [
            'question_num' => '1',
            'choice' => 'D',
            'sentence' => '実行時にエラーを発生させることで、型の整合性を確認する',
            'answer' => '0',
        ];
        DB::table('answers')->insert($param);

        $param = [
            'question_num' => '2',
            'choice' => 'A',
            'sentence' => 'マルチスレッドによる並行処理をサポートする',
            'answer' => '1',
        ];
        DB::table('answers')->insert($param);
        $param = [
            'question_num' => '2',
            'choice' => 'B',
            'sentence' => 'マルチプロセスによる並行処理をサポートする',
            'answer' => '0',
        ];
        DB::table('answers')->insert($param);
        $param = [
            'question_num' => '2',
            'choice' => 'C',
            'sentence' => 'シングルスレッドアプリケーションのみをサポートする',
            'answer' => '0',
        ];
        DB::table('answers')->insert($param);
        $param = [
            'question_num' => '2',
            'choice' => 'D',
            'sentence' => '並行処理を完全に制御できる',
            'answer' => '0',
        ];
        DB::table('answers')->insert($param);
        $param = [
            'question_num' => '2',
            'choice' => 'E',
            'sentence' => '並行処理を部分的に制御できる',
            'answer' => '1',
        ];
        DB::table('answers')->insert($param);

        $param = [
            'question_num' => '3',
            'choice' => 'A',
            'sentence' => '特定のOSに特化したプログラミング言語である',
            'answer' => '0',
        ];
        DB::table('answers')->insert($param);
        $param = [
            'question_num' => '3',
            'choice' => 'B',
            'sentence' => 'ほかのプログラミング言語に比べて高速に実行できる',
            'answer' => '0',
        ];
        DB::table('answers')->insert($param);
        $param = [
            'question_num' => '3',
            'choice' => 'C',
            'sentence' => 'あらかじめ機械語にコンパイルされる',
            'answer' => '0',
        ];
        DB::table('answers')->insert($param);
        $param = [
            'question_num' => '3',
            'choice' => 'D',
            'sentence' => 'メモリ管理が自動化される',
            'answer' => '1',
        ];
        DB::table('answers')->insert($param);
        $param = [
            'question_num' => '3',
            'choice' => 'E',
            'sentence' => 'セキュリティが向上する実行方式を取り入れている',
            'answer' => '1',
        ];
        DB::table('answers')->insert($param);
        $param = [
            'question_num' => '4',
            'choice' => 'A',
            'sentence' => 'コンパイラによって機械語にコンパイルされる',
            'answer' => '0',
        ];
        DB::table('answers')->insert($param);
        $param = [
            'question_num' => '4',
            'choice' => 'B',
            'sentence' => 'コンパイラによって中間コードにコンパイルされる',
            'answer' => '1',
        ];
        DB::table('answers')->insert($param);
        $param = [
            'question_num' => '4',
            'choice' => 'C',
            'sentence' => '実行可能ファイルを作成する',
            'answer' => '0',
        ];
        DB::table('answers')->insert($param);
        $param = [
            'question_num' => '4',
            'choice' => 'D',
            'sentence' => 'JVMにクラスファイルを読み込ませる',
            'answer' => '1',
        ];
        DB::table('answers')->insert($param);
        $param = [
            'question_num' => '5',
            'choice' => 'A',
            'sentence' => 'プラットフォームに依存したネイティブコードが記述されている',
            'answer' => '0',
        ];
        DB::table('answers')->insert($param);
        $param = [
            'question_num' => '5',
            'choice' => 'B',
            'sentence' => 'プラットフォームに依存しないネイティブコードが記述されている',
            'answer' => '0',
        ];
        DB::table('answers')->insert($param);
        $param = [
            'question_num' => '5',
            'choice' => 'C',
            'sentence' => 'JVMだけが理解できるコードが記述されている',
            'answer' => '1',
        ];
        DB::table('answers')->insert($param);
        $param = [
            'question_num' => '5',
            'choice' => 'D',
            'sentence' => '人間が理解できるコードが記述されている',
            'answer' => '0',
        ];
        DB::table('answers')->insert($param);
        $param = [
            'question_num' => '6',
            'choice' => 'A',
            'sentence' => '自動的にメモリを解放する',
            'answer' => '1',
        ];
        DB::table('answers')->insert($param);
        $param = [
            'question_num' => '6',
            'choice' => 'B',
            'sentence' => 'メモリを任意のタイミングで解放できる',
            'answer' => '0',
        ];
        DB::table('answers')->insert($param);
        $param = [
            'question_num' => '6',
            'choice' => 'C',
            'sentence' => 'ポインタを使ってメモリを自由に操作できる',
            'answer' => '0',
        ];
        DB::table('answers')->insert($param);
        $param = [
            'question_num' => '6',
            'choice' => 'D',
            'sentence' => 'メモリの効率的な利用を自動化する',
            'answer' => '1',
        ];
        DB::table('answers')->insert($param);
        $param = [
            'question_num' => '7',
            'choice' => 'A',
            'sentence' => 'publicであること',
            'answer' => '1',
        ];
        DB::table('answers')->insert($param);
        $param = [
            'question_num' => '7',
            'choice' => 'B',
            'sentence' => 'staticであること',
            'answer' => '1',
        ];
        DB::table('answers')->insert($param);
        $param = [
            'question_num' => '7',
            'choice' => 'C',
            'sentence' => '１つのソースファイルに複数記述できる',
            'answer' => '0',
        ];
        DB::table('answers')->insert($param);
        $param = [
            'question_num' => '7',
            'choice' => 'D',
            'sentence' => '戻り値型はintであること',
            'answer' => '0',
        ];
        DB::table('answers')->insert($param);
        $param = [
            'question_num' => '7',
            'choice' => 'E',
            'sentence' => '引数はString配列型もしくはString型の可変長引数であること',
            'answer' => '1',
        ];
        DB::table('answers')->insert($param);
        $param = [
            'question_num' => '7',
            'choice' => 'F',
            'sentence' => '戻り値として0、もしくは1を戻すこと',
            'answer' => '0',
        ];
        DB::table('answers')->insert($param);
    }
}
