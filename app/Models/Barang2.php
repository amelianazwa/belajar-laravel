<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang2 extends Model
{
    protected $fillable = ['id','nama_barang','harga','stok'];
    public $timestamps = true;

    // relasi ke tabel telepon
    public function transaksi()
{
return $this->hasMany(Transaksi::class);
}
}