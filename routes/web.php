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
//     Route::get('hallo', function() 
//     {
//         return 
//         'halo ini aplikasi laravel pertama  saya
//          Dan saya harus membuat yang kedua kalinya';
// });

//     Route::get('/about', function() 
//     {
//         return '<h1>Halo</h1>'
//         .'Selamat datang di webapp saya<br>'
//         .'Laravel, emang keren.';
//     });

   
// Route::get('biodata/{nama}/{alamat}/{sekolah}/{umur}', function($a,$b,$c,$d){

//     return 'Nama : '.$a
//     .'<br>Alamat : '.$b
//     .'<br>Sekolah : '.$c
//     .'<br>Umur : '.$d;
     
// });

// Route::get('pesan/{a?}{b?}/{c?}', function($mkn =null, $mnm =null, $c=null) {
//     $pesan = '';
//     if (isset($mkn)){
//         $mkn= 'Anda Memesan  '.$mkn;
//         echo $mkn;
//     }
//     $psn='<br>ukuran : ';
//     if ($c <= 0){
//         $pesan = $psn. 'Harga Tidak Valid';
//     }
    
//     elseif ($c>=30000){
//         $pesan .= $psn. 'medium';
//     }
//     elseif ($c>=25000){
//         $pesan .= $psn. 'large';
//     }
//     elseif ($c<25000){
//         $pesan .= $psn. 'small';
//     }
// return $pesan;
// });

// Route::get('polwan/{nama?}/{bb?}/{umur?}', function($nama =null, $bb=null, $umur=null) {
//     if (isset($nama)){
//         $nama= 'Nama :  '.$nama;
//         echo $nama.'<br>';
//     }
//     if (isset($bb)){
//         $kb = 'Berat Badan :  '.$bb;
//         echo $kb;
//         if ($bb <= 100) {
//             echo '(Anda Harus Menurunkan Berat Badan Anda)';
//         }
//         elseif ($bb >= 76) {
//             echo '(Anda Harus Menurunkan Berat Badan Anda)';
//         }
//         elseif ($bb >= 65) {
//             echo '(Berat Badan Anda Ideal)';
//         }
//         elseif ($bb >= 50) {
//             echo 'Dan Size Large';
//         }
//         elseif ($bb < 50) {
//             echo '(Anda Kurang Nutrisi-!';
//         }
//     }
    
//         if (isset($umur)){
//             $usia = '<br>Umur :  '.$umur;
//             echo $usia;
//         }
//         if ($umur < 30) {
//             echo '(Maaf Umur Tidak Valid)';
//         }
//         elseif ($umur <= 60) {
//             echo '(Jabatan Anda Adalah Jendral)';
//         }
//         elseif ($umur <= 50) {
//             echo '(Jabatan Anda Adalah Laksamana)';
//         }
//         elseif ($umur >= 60) {
//             echo '(Jabatan Anda Adalah Perwira)';
//         }
// });


    // Route::get('/testmodell', function() {
    //     $query =App\post::find(1);
    //     return $query;
    //     });
    //     Route::get('/testmodelll', function() {
    //         $query =App\post::where('title','like','%cepat nikah%')->get();
    //         return $query;
    //         });
    //         Route::get('/testmodellll', function() {
    //             $query =$post = App\post::find(1);
    //             $post->title = "Ciri Keluarga Sakinah";
    //             $post->save();
    //             return $post;
    //             });
    //             Route::get('/testmodelllll', function() {
    //                 $post = App\post::find(1);
    //                 $post->delete();
    //                 return $post;
    //                 });
    //                 Route::get('/testmodellllll', function() {
    //                     $post = new App\post;
    //                     $post->title = "7 Amalan Pembuka Jodoh";
    //                     $post->content = "shalat malam, sedekah, puasa sunah, silaturahmi, senyum, doa, tobat";
    //                     $post->save();
    //                     return $post;
    //                     });

    Route::get('/', function() {
        return view("welcome");
        });
    
    
        Route::get('/tambah/{a?}/{b?}', 'LatihanController@hallo');

        Route::get('/data1', 'LatihanController@loop');
        Route::get('/data1', 'LatihanController@hm');
        Route::get('/tabung', 'TabunganController@index');
        Route::get('/tabung2', 'TabunganController@show');
        Route::get('/tambah/{id}/{nis}/{nama}/{kelas}/{jumlah}', 'TabunganController@store');


 Route::get('/pass', 'PraktisController@pass');

