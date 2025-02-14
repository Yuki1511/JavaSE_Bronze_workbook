<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1章-----------------------------------------------------
        $param = [
            'question' => 'Javaに関する説明として、正しいものを選びなさい。（２つ選択）',
            'category_num' => '1',
        ];
        DB::table('questions')->insert($param);

        $param = [
            'question' => 'Javaに関する説明として、正しいものを選びなさい。（２つ選択）',
            'category_num' => '1',
        ];
        DB::table('questions')->insert($param);

        $param = [
            'question' => 'Javaに関する説明として、正しいものを選びなさい。（２つ選択）',
            'category_num' => '1',
        ];
        DB::table('questions')->insert($param);

        $param = [
            'question' => 'Javaプログラムの作成から実行までの流れに関する説明として、正しいものを選びなさい。（２つ選択）',
            'category_num' => '1',
        ];
        DB::table('questions')->insert($param);

        $param = [
            'question' => 'Javaのクラスファイルに関する説明として、正しいものを選びなさい。（１つ選択）',
            'category_num' => '1',
        ];
        DB::table('questions')->insert($param);

        $param = [
            'question' => 'Javaに関する説明として、正しいものを選びなさい。（２つ選択）',
            'category_num' => '1',
        ];
        DB::table('questions')->insert($param);

        $param = [
            'question' => 'アプリケーションのエントリーポイントとなるメソッドの条件として、正しいものを選びなさい。（３つ選択）',
            'category_num' => '1',
        ];
        DB::table('questions')->insert($param);

        $param = [
            'question' => 'Javaのソースファイルに関する説明として、正しいものを選びなさい。',
            'category_num' => '1',
        ];
        DB::table('questions')->insert($param);

        $param = [
            'question' => 'JavaのエディションのうちJava SEに関する説明として、正しいものを選びなさい（2つ選択）',
            'category_num' => '1',
        ];
        DB::table('questions')->insert($param);

        $param = [
            'question' => 'JavaのエディションのうちJava EEに関する説明として、正しいものを選びなさい（2つ選択）',
            'category_num' => '1',
        ];
        DB::table('questions')->insert($param);

        $param = [
            'question' => 'JavaのエディションのうちJava MEに関する説明として、正しいものを選びなさい（2つ選択）',
            'category_num' => '1',
        ];
        DB::table('questions')->insert($param);

        // 2章-----------12問目から---------------------------------------------------
        $param = [
            'question' => 'プリミティブ型として正しいものを選びなさい。（２つ選択）',
            'category_num' => '2',
        ];
        DB::table('questions')->insert($param);
        $param = [
            'question' => '参照型として正しいものを選びなさい。（３つ選択）',
            'category_num' => '2',
        ];
        DB::table('questions')->insert($param);
        $param = [
            'question' => '整数値を代入できる型として正しいものを選びなさい。（３つ選択）',
            'category_num' => '2',
        ];
        DB::table('questions')->insert($param);$param = [
            'question' => '真偽値を保持できる型として正しいものを選びなさい。（１つ選択）',
            'category_num' => '2',
        ];
        DB::table('questions')->insert($param);
    }
}
