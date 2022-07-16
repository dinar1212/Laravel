<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sample = [
            ['title' => 'Belajar Huruf Hijaiyah', 'content' => 'Lorem Ipsum sit amet dolor'],
            ['title' => 'Indoesia U-19 Gagal Lolos SemiFinal', 'content' => 'Lorem Ipsum sit amet dolor'],
            ['title' => 'Cara Cepat belajar Pemprograman', 'content' => 'Try & error Terus Menerus'],
        ];
        DB::table('posts')->insert($sample);
    }
}
