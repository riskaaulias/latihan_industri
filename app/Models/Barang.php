<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'nama_barang', 'merek', 'harga', 'stok'];
    public $timestamp   = true;

     public function transaksi()
    {
        return $this->hasMany(Transaksi::class);
    }
}
