<?php

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            [
                'title' => 'タイトル１',
                'body'  => '内容１',
            ],
            [
                'title' => 'タイトル2',
                'body'  => '内容2',
            ],
            [
                'title' => 'タイトル3',
                'body'  => '内容3',
            ],
        ]);
    }
}
