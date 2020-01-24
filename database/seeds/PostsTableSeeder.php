<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PostsTableSeeder::class);
        
        // masukkan data ke database
DB::table('posts')->insert($posts);
    }
}
