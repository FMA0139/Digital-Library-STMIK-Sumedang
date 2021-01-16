<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;

    protected $table = 'bku_daftar';

    protected $fillable = [
        'judul',
        'isbnissn',
        'pengarang',
        'penerbit',
        'tahun',
        'kategori',
        'jenis',
        'jumlah',
        'deskripsi',
        'lokasi',
        'cover',
        'created_at',
        'updated_at'
    ];
}
