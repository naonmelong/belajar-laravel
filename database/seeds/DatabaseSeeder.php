<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {


        $posts = [
            ['title'=>'Tips Cepat Nikah', 'content'=>'lorem ipsum'],
            ['title'=>'Haruskah Menunda Nikah?', 'content'=>'lorem ipsum'],
    ['title'=>'Membangun Visi Misi Keluarga', 'content'=>'lorem ipsum']
        ];

        $this->call(PostsTableSeeder::class);
        
        // masukkan data ke database
DB::table('posts')->insert($posts);
    }
}
