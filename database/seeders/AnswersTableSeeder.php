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
    }
}
