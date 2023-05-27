<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class truk extends Model
{
    use HasFactory;
    protected $table = 'truks';
    protected $fillable = [
        'jenis_truk',
        'plat_nomor',
        'kapasitas',
    ];
}
