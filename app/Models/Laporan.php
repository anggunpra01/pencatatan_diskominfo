<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Laporan extends Model
{
    use HasFactory;

    protected $fillable = [
        'token',
        'nippencatat',
        'namapencatat',
        'tanggalmencatat',
        'namapelapor',
        'namabidang',
        'nomorhp',
        'permasalahan',
        'nipeksekutor',
        'namaeksekutor',
        'kategori',
        'status',
        'tanggalselesai',
        'solusi',
        'namavendor',
        'mulaiservice',
        'selesaiservice',
    ];
    // public function sluggable(): array
    // {
    //     return [
    //         'slug' => [
    //             'source' => 'title'
    //         ]
    //     ];
    // }
    // public function getRouteKeyName()
    // {
    // return 'slug';
    // }
}
