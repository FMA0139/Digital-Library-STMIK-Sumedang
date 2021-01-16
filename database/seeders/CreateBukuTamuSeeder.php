<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\BukuTamu;

class BukuTamuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bukutamu = [
            [
                'nim' => '1',
                'nama' => 'tes1',
                'kelas' => 'a',
                'prodi' => 'ti',
            ],
            [
                'nim' => '1',
                'nama' => 'tes1',
                'kelas' => 'a',
                'prodi' => 'ti',
            ],
            [
                'nim' => '2',
                'nama' => 'tes2',
                'kelas' => 'b',
                'prodi' => 'si',
            ],
            [
                'nim' => '3',
                'nama' => 'tes3',
                'kelas' => 'c',
                'prodi' => 'mi',
            ],
        ];

        foreach ($bukutamu as $key => $value) {
            BukuTamu::create($value);
        }
    }
}
