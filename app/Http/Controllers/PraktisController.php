<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PraktisController extends Controller
{
    public function pass()
    {
        $data = "Sara Azzahra";
        return view('latihan', compact ('$data'));
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
