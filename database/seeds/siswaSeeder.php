<?php

use Illuminate\Database\Seeder;

class siswaa extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $siswa = [
            ['nis'=>'11111', 'nama'=>'Sara','jenis_kelamin'=>'Perempuan', 'alamat'=>'kp.Bojong Citepus','tgl_lahir'=>'2003-07-09', 'umur'=>'16thn'],
            ['nis'=>'22222', 'nama'=>'Rizna','jenis_kelamin'=>'Laki Laki', 'alamat'=>'kp.Cilebak       ','tgl_lahir'=>'2002-07-09', 'umur'=>'17thn'],
            ['nis'=>'33333', 'nama'=>'Adit','jenis_kelamin'=>'Perempuan', 'alamat'=>'kp.Ciparai       ','tgl_lahir'=>'2001-07-09', 'umur'=>'18thn'],
            ['nis'=>'44444', 'nama'=>'Sopo','jenis_kelamin'=>'Laki Laki', 'alamat'=>'kp.Sekeandur     ','tgl_lahir'=>'2000-07-09', 'umur'=>'19thn'],
            ['nis'=>'55555', 'nama'=>'Jarwo','jenis_kelamin'=>'Laki Laki', 'alamat'=>'kp.Palasari     ','tgl_lahir'=>'2004-07-09', 'umur'=>'15thn']
        ];
        $this->call(siswaa::class);
        
        // masukkan data ke database
DB::table('siswaa')->insert($siswa);
    }
}
