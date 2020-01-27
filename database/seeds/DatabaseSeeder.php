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


       
        $this->call(PostsTableseeder::class);
        factory (App/Tabungan::class , 100)->create();
        factory (App/Costumer::class , 100)->create();
    }
}
