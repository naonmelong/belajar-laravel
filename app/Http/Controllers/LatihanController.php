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
                    $tabungan = $key['Uang Jajan'] * 25/100;
                    $sisa = $key['Uang Jajan'] - $tabungan;
                }elseif ($key['Uang Jajan'] >= 25000) {
                    $tabungan = $key['Uang Jajan'] * 15/100;
                    $sisa = $key['Uang Jajan'] - $tabungan;
                }elseif ($key['Uang Jajan'] >= 10000) {
                    $tabungan = $key['Uang Jajan'] * 10/100;
                    $sisa = $key['Uang Jajan'] - $tabungan;
            }
            echo "<br>Nama : ". $key['Nama'].
                "<br>Kelas  : ". $key['Kelas'].
                "<br>Uang Jajan  : ". $key['Uang Jajan'].
                "<br>Uang Tabungan :" . $tabungan,
                "<br>Uang Sisa :" . $sisa;
                echo "<hr>";
        }
    }
    public function hm()
    {
    $data =[
        ['Nama'=>'Sara','Agama'=>'Islam','Alamat'=>'Kp.Bojong Citepus','Jenis Kelamin'=>'P','Jabatan'=>'Meneger','Jam Kerja'=>250],
        ['Nama'=>'Selvi','Agama'=>'Islam','Alamat'=>'Kp.Bojong Citepus','Jenis Kelamin'=>'P','Jabatan'=>'Sekertaris','Jam Kerja'=>200],
        ['Nama'=>'Aira','Agama'=>'Islam','Alamat'=>'Kp.Bojong Citepus','Jenis Kelamin'=>'P','Jabatan'=>'Staff','Jam Kerja'=>250]
        ];
            foreach($data as $val => $key){
                
                if ($key['Jam Kerja'] >= 50000) {
                    $tabungan = $key['Jam Kerja'] * 25/100;
                    $sisa = $key['Jam Kerja'] - $tabungan;
                }elseif ($key['Jam Kerja'] >= 25000) {
                    $tabungan = $key['Jam Kerja'] * 15/100;
                    $sisa = $key['Jam Kerja'] - $tabungan;
                }elseif ($key['Jam Kerja'] >= 10000) {
                    $bonus = 4000000 + 400000 ;
                    $gajib = $bonus - 22000;
            }
            echo "<br>Nama : ". $key['Nama'].
                "<br>Kelas  : ". $key['Kelas'].
                "<br>Uang Jajan  : ". $key['Uang Jajan'].
                "<br>Uang Tabungan :" . $tabungan,
                "<br>Uang Sisa :" . $sisa;
                echo "<hr>";
        }
    }
}