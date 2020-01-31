<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PraktisController extends Controller
{
    public function pass()
    {
        $tabungan = "Tabungan";
        return view('latihan', compact ('$tabungan'));
    }
    public function pass1()
    {
        $siswa =[
            ['Nama'=>'Kasman ','Kelas'=>'XI RPL 1' ],
            ['Nama'=>'Kisman ','Kelas'=>'XI RPL 1'],
        ];   
        return view('latihan',['data'=>$siswa]);
    }
}
