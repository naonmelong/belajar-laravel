<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatihanController extends Controller
{
    public function hallo($a = 0,$b = 0)
    {
        
        $c = $a + $b;

        return "$a+$b=$c";

    }
    public function loop()
    {
    $data =[
        ['Nama'=>' Hari','Kelas'=>'XI RPL 1' ,'Uang Jajan'=>50000],
        ['Nama'=>' Memet','Kelas'=>'XI RPL 1','Uang Jajan'=> 25000],
        ['Nama'=>' David','Kelas'=>'XI RPL 1','Uang Jajan'=> 10000]
        ];
            foreach($data as $val => $key){
                
                if ($key['Uang Jajan'] >= 50000) {
                    $tabungan = $key['Uang Jajan'] * 25 / 100;
                    $sisa = $key['Uang Jajan']. $tabungan;
                }elseif ($key['Uang Jajan'] >= 25000) {
                    $tabungan = $key['Uang Jajan'] * 15 / 100;
                    $sisa = $key['Uang Jajan']. $tabungan;
                }elseif ($key['Uang Jajan'] >= 10000) {
                    $tabungan = $key['Uang Jajan'] * 10 / 100;
                    $sisa = $key['Uang Jajan']. $tabungan;
            }
            echo "Nama : ". $key['Nama'].
                "Kelas  : ". $key['Kelas'].
                "Uang Jajan  : ". $key['Uang Jajan'].
                "<hr>";
        }
    }
}