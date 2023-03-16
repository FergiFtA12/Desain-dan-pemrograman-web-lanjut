<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HobiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hobi')->insert([[
            'hobi' => 'Futsal',
            'deskripsi' => 'Sehat'
        ],
        [
            'hobi' => 'Renang',
            'deskripsi' => 'Sehat'
        ],
        [
            'hobi' => 'Bulutangkis',
            'deskripsi' => 'Sehat'
        ],
        [
            'hobi' => 'Jogiing',
            'deskripsi' => 'Menambah Daya Tahan Tubuh'
        ]
    ]);
    }
}
