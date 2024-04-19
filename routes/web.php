<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

// rout saya 
Route::get('/about', function () {
    return '<h1>Hallo</h1>'
    . 'selamat datang di webb app saya <br>'
    . 'laravel, memang keren.' ;

});
// buat basic to view
Route::get('animals', function() {
    $king = 'lion';
    $hewan = ['monkey', 'dragonfly', 'tiger', 'butterfly', 'crocodile'];
    return view('animals_page', compact('king', 'hewan'));
});

// rout parameter
Route::get('product/{name}', function ($name) {
    return "product:$name";
});

// tugas nama, berat badan, tinggi badan 
Route::get('myself/{name}/{bb}/{tb}', function ($name, $bb, $tb) {
    $bmi = $bb / (($tb / 100) ** 2);
    if ($bmi > 30) {
        $ket = "Obesitas";
    } elseif ($bmi > 25) {
        $ket = "kelebihan";
    } elseif ($bmi > 18.5) {
        $ket = "kekurangan berat badan";
    }
    return "nama:$name<br>"
    . "berat badan:$bb<br>"
    . "tinggi badan:$tb<br>"
    . "tinggi BMI:$bmi<br>"
    . "keterangan:$ket<br>"
    ;
});

// route optional parameter
Route::get('myname/{nama?}',function($a = "Nazwa"){
    return "my name is $a";
}); 