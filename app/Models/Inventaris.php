<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventaris extends Model
{
    use HasFactory;
    protected $fillable = [
        'kodeInventaris',
        'kategori',
        'merk',
        'tipe',
        'nomorSeri',
        'tahunPembelian',
        'kondisi',
        'lokasiFisik',
        'bidang',
        'pengguna',
        'keterangan'
    ];
}
