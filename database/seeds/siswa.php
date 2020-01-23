<?php

use Illuminate\Database\Seeder;

class siswa extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(siswaSeeder::class);
        
        // masukkan data ke database
DB::table('siswa')->insert($siswa);
    }
}
