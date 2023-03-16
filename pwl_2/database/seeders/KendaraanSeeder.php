<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KendaraanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kendaraan')->insert([[
            'no_pol' => 'AG 01 FS',
            'merk' => 'Honda',
            'jenis' => 'PCX 150',
            'tahun_buat' => '2019',
            'warna' => 'Putih',
        ],
        [
            'no_pol' => 'AG 02 RS',
            'merk' => 'Mitsubishi',
            'jenis' => 'Pajero',
            'tahun_buat' => '2022',
            'warna' => 'Hitam',
        ]
        ]);
    }
}
