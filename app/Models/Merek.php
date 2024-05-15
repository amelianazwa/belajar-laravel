<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Merek extends Model
{
    use HasFactory;
    protected $fillable = ['id','nama_merek'];
    public $timestamps = true;

    // relasi ke tabel merek
    public function produk()
{
return $this->hasMany(Produk::class);
}
}
