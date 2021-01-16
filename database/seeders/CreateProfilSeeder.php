<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Profil;

class ProfilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $profil = [
            [
                'nama' => 'STMIK Sumedang',
                'alamat' => 'Jl.Angkrek Situ No.19 Sumedang',
                'google_maps' => 'https://goo.gl/maps/xeYbmgLYcCiYUrtTA',
                'email' => 'perpustakaan@stmik-sumedang.ac.id',
                'tlp' => '(0261) 207395',
                'situs' => 'https://stmik-sumedang.ac.id/',
            ],
        ];

        foreach ($profil as $key => $value) {
            Profil::create($value);
        }
    }
}
