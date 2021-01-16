<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $table = 'trs_daftar';

    protected $fillable = [
        'id',
        'id_buku',
        'id_anggota',
        'tgl_pinjam',
        'tgl_kembali',
        'status',
        'ket',
        'created_at',
        'updated_at'
    ];
}
