<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biodata extends Model
{
    use Hasfactory;

    protected $fillable = ['id', 'nama_lengkap','jenis_kelamin', 'tanggal_lahir', 'tempat_lahir', 'agama','alamat', 'telepon', 'email','cover'];
    public $timestamp = true;
}
