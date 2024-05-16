<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\Barang;
use App\Models\Siswa;
use App\Models\Pengguna;
use App\Models\Telepon;
use App\Models\Merek;
use App\Models\Produk;
use App\Models\Pembeli;
use App\Models\Barang2;
use App\Models\Transaksi;
use App\Models\Template;
use App\Models\Template2;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\MerekController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ProductController;


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
// Route::get('product/{name}', function ($name) {
//     return "product:$name";
// });

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

// posts



// barangs
Route::get('/testbarang', function () {
    $barang = Barang::all();
    return view('tampil_barang', compact('barang'));
    });

//siswas
Route::get('/testsiswa', function () {
      $siswa = Siswa::all();
      return view('tampil_siswa', compact('siswa'));
    // $siswa = Siswa::where('alamat', 'like','Cibogo%')->get();
    // $siswa = new Siswa;
    // $siswa->nama = "Surya";
    // $siswa->jenis_kelamin = "Laki-laki";
    // $siswa->alamat = "Kopo";
    // $siswa->agama = "Kristen";
    // $siswa->telepon = 892020;
    // $siswa->email = "surya@gmail.com";
    // $siswa->save();


    });
// pengguna
    Route::get('/testpengguna', function () {
        $pengguna = Pengguna::all();
        return view('tampil_pengguna', compact('pengguna'));
        
        });
// 
Route::get('/testtelepon', function () {
    $telepon = Telepon::all();
    return view('tampil_telepon', compact('telepon'));
    
    });

    // merek
    Route::get('/testmerek', function () {
        $merek = Merek::all();
        return view('tampil_mereks', compact('merek'));
        
        });
        // produksi
        Route::get('/testproduk', function () {
            $produk = Produk::all();
            return view('tampil_produk', compact('produk'));
            
            });

    // 
    Route::get('/testpembeli', function () {
        $pembeli = Pembeli::all();
        return view('tampil_pembeli', compact('pembeli'));
        
        });
        // 
        Route::get('/testtransaksi', function () {
            $transaksi = Transaksi::all();
            return view('tampil_transaksi', compact('transaksi'));
            
            });

        // 
        Route::get('/testbarang', function () {
            $barang2 = Barang2::all();
            return view('tamppil_barang2', compact('barang2'));
            
            });


                // template 2
                Route::get('produk',[ProdukController::class,'menampilkan']); 
                Route::get('produk/{id}',[ProdukController::class,'show']);
                

                    // controller
            Route::get('post',[PostController::class,'menampilkan']); 
            Route::get('post/{id}',[PostController::class,'show']);
            // 
            Route::get('merek',[MerekController::class,'menampilkan']); 
            Route::get('merek/{id}',[MerekController::class,'show']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// 
Route::resource('brand', BrandController::class);
// 
Route::resource('product', ProductController::class);
