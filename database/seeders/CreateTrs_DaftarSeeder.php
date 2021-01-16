<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Transaksi;

class Trs_DaftarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $transaksi = [
            [
                'id_buku' => '1',
                'id_anggota' => '2',
                'tgl_pinjam' => '2020-12-01',
                'tgl_kembali' => '2021-01-08',
                'status' => 'Pinjam',
                'ket' => 'ok',
            ],
            [
                'id_buku' => '1',
                'id_anggota' => '2',
                'tgl_pinjam' => '2020-12-01',
                'tgl_kembali' => '2021-01-08',
                'status' => 'Pinjam',
                'ket' => 'ok',
            ],
        ];

        foreach ($transaksi as $key => $value) {
            Transaksi::create($value);
        }
    }
}
