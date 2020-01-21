<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
    Route::get('hallo', function() 
    {
        return 
        'halo ini aplikasi laravel pertama  saya
         Dan saya harus membuat yang kedua kalinya';
});

    Route::get('/about', function() 
    {
        return '<h1>Halo</h1>'
        .'Selamat datang di webapp saya<br>'
        .'Laravel, emang keren.';
    });

   
Route::get('biodata/{nama}/{alamat}/{sekolah}/{umur}', function($a,$b,$c,$d){

    return 'Nama : '.$a
    .'<br>Alamat : '.$b
    .'<br>Sekolah : '.$c
    .'<br>Umur : '.$d;
     


});
