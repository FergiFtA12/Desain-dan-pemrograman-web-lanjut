<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KeluargaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('keluarga')->insert([[
            'nama' => 'Mardi',
            'status' => 'Ayah',
            'umur' => '44',
            'jenis_kelamin' => 'Laki-Laki',
            'pekerjaan' => 'PNS' 
        ],
        [
            'nama' => 'Tumsiyah',
            'status' => 'Ibu',
            'umur' => '44',
            'jenis_kelamin' => 'Perempuan',
            'pekerjaan' => 'PNS'
        ],
        [
            'nama' => 'Ayliyakhsani Ardiansyah',
            'status' => 'Anak ke1',
            'umur' => '24',
            'jenis_kelamin' => 'Perempuan',
            'pekerjaan' => 'Guru'
        ],
        [
            'nama' => 'Fergie Fatah Ardiansyah',
            'status' => 'Anak ke2',
            'umur' => '22',
            'jenis_kelamin' => 'Laki-Laki',
            'pekerjaan' => 'Mahasiswa'
        ],
        [
            'nama' => 'Krida Aini Ardiansyah',
            'status' => 'Anak ke3',
            'umur' => '17',
            'jenis_kelamin' => 'Perempuan',
            'pekerjaan' => 'Pelajar'
        ],
        [
            'nama' => 'Mochammad Fathir Ranierri Ardiansyah',
            'status' => 'Anak ke3',
            'umur' => '12',
            'jenis_kelamin' => 'Laki-Laki',
            'pekerjaan' => 'Pelajar'
        ]
    ]);
    }
}
