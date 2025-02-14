<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnswersTable2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //-----2章-------------------------------------
        $param = [
            'question_num' => '12',
            'choice' => 'A',
            'sentence' => 'integer',
            'answer' => '0',
        ];
        DB::table('answers')->insert($param);
        $param = [
            'question_num' => '12',
            'choice' => 'B',
            'sentence' => 'double',
            'answer' => '1',
        ];
        DB::table('answers')->insert($param);
        $param = [
            'question_num' => '12',
            'choice' => 'C',
            'sentence' => 'Number',
            'answer' => '0',
        ];
        DB::table('answers')->insert($param);
        $param = [
            'question_num' => '12',
            'choice' => 'D',
            'sentence' => 'byte',
            'answer' => '1',
        ];
        DB::table('answers')->insert($param);
        $param = [
            'question_num' => '12',
            'choice' => 'E',
            'sentence' => 'Character',
            'answer' => '0',
        ];
        DB::table('answers')->insert($param);
        $param = [
            'question_num' => '13',
            'choice' => 'A',
            'sentence' => 'String',
            'answer' => '1',
        ];
        DB::table('answers')->insert($param);
        $param = [
            'question_num' => '13',
            'choice' => 'B',
            'sentence' => 'Date',
            'answer' => '1',
        ];
        DB::table('answers')->insert($param);
        $param = [
            'question_num' => '13',
            'choice' => 'C',
            'sentence' => 'int',
            'answer' => '0',
        ];
        DB::table('answers')->insert($param);
        $param = [
            'question_num' => '13',
            'choice' => 'D',
            'sentence' => 'boolean',
            'answer' => '0',
        ];
        DB::table('answers')->insert($param);
        $param = [
            'question_num' => '13',
            'choice' => 'E',
            'sentence' => 'char[]',
            'answer' => '1',
        ];
        DB::table('answers')->insert($param);
        $param = [
            'question_num' => '14',
            'choice' => 'A',
            'sentence' => 'double',
            'answer' => '0',
        ];
        DB::table('answers')->insert($param);
        $param = [
            'question_num' => '14',
            'choice' => 'B',
            'sentence' => 'char',
            'answer' => '1',
        ];
        DB::table('answers')->insert($param);
        $param = [
            'question_num' => '14',
            'choice' => 'C',
            'sentence' => 'short',
            'answer' => '1',
        ];
        DB::table('answers')->insert($param);
        $param = [
            'question_num' => '14',
            'choice' => 'D',
            'sentence' => 'int',
            'answer' => '1',
        ];
        DB::table('answers')->insert($param);
        $param = [
            'question_num' => '14',
            'choice' => 'E',
            'sentence' => 'float',
            'answer' => '0',
        ];
        DB::table('answers')->insert($param);
    }
}
