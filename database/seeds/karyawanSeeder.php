<?php

use Illuminate\Database\Seeder;

class karyawanSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {


        $posts = [
            [ 'nama'=>'Sara','jenis_kelamin'=>'Perempuan', 'alamat'=>'kp.Bojong Citepus', 'agama'=>'islam','umur'=>'16thn', 'no_tlpn'=>'089000976',' jabatan'=>'Menejer'],
            [ 'nama'=>'Rizna','jenis_kelamin'=>'Laki Laki', 'alamat'=>'kp.Cilebak       ',  'agama'=>'islam','umur'=>'17thn','no_tlpn'=>'0890986798','jabatan'=>'Menejer Keuangan'],
            [ 'nama'=>'Adit','jenis_kelamin'=>'Perempuan', 'alamat'=>'kp.Ciparai       ',  'agama'=>'islam','umur'=>'18thn', 'no_tlpn'=>'0890878764','jabatan'=>'sekertaris'],
            [ 'nama'=>'Sopo','jenis_kelamin'=>'Laki Laki', 'alamat'=>'kp.Sekeandur     ',  'agama'=>'islam','umur'=>'19thn', 'no_tlpn'=>'0892335226','jabatan'=>'Karyawan'],
            [ 'nama'=>'Jarwo','jenis_kelamin'=>'Laki Laki', 'alamat'=>'kp.Palasari     ',  'agama'=>'islam','umur'=>'15thn', 'no_tlpn'=>'0895586389','jabatan'=>'Karyawan'],
            [ 'nama'=>'Selvia','jenis_kelamin'=>'Perempuan', 'alamat'=>'kp.Bojong Citepus',  'agama'=>'islam','umur'=>'16thn','no_tlpn'=>'0896443577','jabatan'=>'Karyawan'],
            [ 'nama'=>'Ahmad','jenis_kelamin'=>'Laki Laki', 'alamat'=>'kp.Cilebak       ',  'agama'=>'islam','umur'=>'17thn','no_tlpn'=>'0899655875','jabatan'=>'Karyawan'],
            [ 'nama'=>'Alya','jenis_kelamin'=>'Perempuan', 'alamat'=>'kp.Ciparai       ',  'agama'=>'islam','umur'=>'18thn', 'no_tlpn'=>'0894366957','jabatan'=>'Karyawan'],
            [ 'nama'=>'Obay','jenis_kelamin'=>'Laki Laki', 'alamat'=>'kp.Sekeandur     ',  'agama'=>'islam','umur'=>'19thn', 'no_tlpn'=>'0897863466','jabatan'=>'karwayan'],
            [ 'nama'=>'Cahya','jenis_kelamin'=>'Laki Laki', 'alamat'=>'kp.Palasari     ',  'agama'=>'islam','umur'=>'15thn', 'no_tlpn'=>'0897649845','jabatan'=>'karyawan'],
        ];

        
        // masukkan data ke database
DB::table('karyawan')->insert($posts);
    }
}
