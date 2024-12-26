<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $param = [
            'Question_category' => '1',
        ];
        DB::table('categories')->insert($param);

        $param = [
            'Question_category' => '2',
        ];
        DB::table('categories')->insert($param);

        $param = [
            'Question_category' => '3',
        ];
        DB::table('categories')->insert($param);

        $param = [
            'Question_category' => '4',
        ];
        DB::table('categories')->insert($param);

        $param = [
            'Question_category' => '5',
        ];
        DB::table('categories')->insert($param);

        $param = [
            'Question_category' => '6',
        ];
        DB::table('categories')->insert($param);

        $param = [
            'Question_category' => '7',
        ];
        DB::table('categories')->insert($param);

        $param = [
            'Question_category' => '8',
        ];
        DB::table('categories')->insert($param);

        $param = [
            'Question_category' => '9',
        ];
        DB::table('categories')->insert($param);
    }
}