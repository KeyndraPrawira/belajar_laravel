<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
            ['title'=>'Tips Cepat Kaya', 'content'=>'lorem ipsum'],
            ['title'=>'Haruskah Masuk Surga?', 'content'=>'lorem ipsum'],
            ['title'=>'Membuat Ular Tangga bertahan lama', 'content'=>'lorem ipsum'],
            ['title'=>'Membuat Ular Sanca bertahan lama', 'content'=>'lorem ipsum'],
            ['title'=>'Membuat Ular Hijau', 'content'=>'lorem ipsum']
        ];
        //masukkan data ke database
        DB::table('posts')->insert($posts);
        }
}
