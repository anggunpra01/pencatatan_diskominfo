<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventaris extends Model
{
    use HasFactory;
    protected $fillable = [
        'kode_inventaris',
        'nomor_seri',
        'tahun pembelian',
        'kondisi',
        'keterangan',
        'bidang',
        'pengguna',
        'lokasi_fisik',
        'merk',
        'tipe',
        'kategori'
    ];
}
