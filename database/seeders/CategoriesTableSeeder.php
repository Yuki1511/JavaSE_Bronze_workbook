<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $param = [
            'category_num' => '1章',
        ];
        DB::table('categories')->insert($param);

        $param = [
            'category_num' => '2章',
        ];
        DB::table('categories')->insert($param);

        $param = [
            'category_num' => '3章',
        ];
        DB::table('categories')->insert($param);

        $param = [
            'category_num' => '4章',
        ];
        DB::table('categories')->insert($param);

        $param = [
            'category_num' => '5章',
        ];
        DB::table('categories')->insert($param);

        $param = [
            'category_num' => '6章',
        ];
        DB::table('categories')->insert($param);

        $param = [
            'category_num' => '7章',
        ];
        DB::table('categories')->insert($param);

        $param = [
            'category_num' => '8章',
        ];
        DB::table('categories')->insert($param);

        $param = [
            'category_num' => '9章',
        ];
        DB::table('categories')->insert($param);
    }
}
