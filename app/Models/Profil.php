<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    use HasFactory;

    protected $table = 'profil';

    protected $fillable = [
        'nama',
        'alamat',
        'google_maps',
        'email',
        'tlp',
        'situs',
        'create_at',
        'updated_at'
    ];
}
