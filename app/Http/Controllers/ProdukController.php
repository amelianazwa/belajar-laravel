<?php

namespace App\Http\Controllers;
use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function menampilkan(){
       
    
    $produk = Produk::all();
    return view('produks/index2',compact('produk'));
    }

    public function show($id){
        $produk = Produk::findOrFail($id);
        return view('produks.showproduk',compact('produk'));
    }
}
