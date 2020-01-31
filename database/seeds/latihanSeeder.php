<?php

use Illuminate\Database\Seeder;

class latihanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bus = [
            ['jenis_bus'=>'Bus High Deck','nama_bus'=>'Queen Trans','merk_bus'=>'Hino','no_mesin'=>' OH 1526','tahun_dibuat'=>'2000-09-08','deskripsi'=>''],
            ['jenis_bus'=>'Bus Super High Deck','nama_bus'=>'Rezeki Baru','merk_bus'=>'scania','no_mesin'=>'OH 1626','tahun_dibuat'=>'2001-08-09','deskripsi'=>''],
            ['jenis_bus'=>'Bus Double Decker','nama_bus'=>'Royal Platinum','merk_bus'=>'brilian','no_mesin'=>'OF 917','tahun_dibuat'=>'2002-07-06','deskripsi'=>''],
            ['jenis_bus'=>'Airport Bus','nama_bus'=>' Rosalia Indah Pariwisata','merk_bus'=>'Mercedes-Benz OC 500 RF 2542','no_mesin'=>'OF 1623 RF','tahun_dibuat'=>'2000-02-04','deskripsi'=>''],
            ['jenis_bus'=>'Apron Bus','nama_bus'=>'Sahabat Kita','merk_bus'=>'MAN R37','no_mesin'=>'O 500 RS 1836','tahun_dibuat'=>'2006-08-11','deskripsi'=>''],
            ['jenis_bus'=>'Aero Queen','nama_bus'=>'Semanta','merk_bus'=>'Volvo B11R','no_mesin'=>'O 500 U 1726 ','tahun_dibuat'=>'2009-11-12','deskripsi'=>''],
            ['jenis_bus'=>'Star Liner','nama_bus'=>'Shantika','merk_bus'=>'chassis','no_mesin'=>'OC 500 RF 2542','tahun_dibuat'=>'210-10-10','deskripsi'=>'']
        ];

        // masukkan data ke database
DB::table('latihans')->insert($bus);
    }
}
