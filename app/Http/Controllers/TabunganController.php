<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\tabungan;
class TabunganController extends Controller
{
    public function index()
    {
        $tabungan = tabungan::all();
        return $tabungan;
    }

    public function show()
    {
        $tabungan = tabungan::find(1);
        return $tabungan;
    }
    public function store($id,$nis=null,$nama=null,$kelas=null,$jumlah=null)
    {
        $tabungan = new tabungan();
        $tabungan->nis ="$nis";
        $tabungan->nama ="$nama";
        $tabungan->kelas ="$kelas";
        $tabungan->jumlah ="$jumlah";
        $tabungan->save();
        return $tabungan;
    }
}
