<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;

    // kolom/field yang boleh diisi
    protected $fillable = ['id', 'title', 'content','cover'];
    public $timestamp   = true; 
}
