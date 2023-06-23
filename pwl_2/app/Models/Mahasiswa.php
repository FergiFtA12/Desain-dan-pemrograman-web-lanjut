<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $table = 'mahasiswa';
    protected $fillable = [
            'nim',
            'nama',
            'prodi_id',
            'jk',
            'tempat_lahir',
            'tanggal_lahir',
            'alamat',
            'hp'
    ];

    public function prodi(){
        return $this->belongsTo(prodiModel::class);
    }

    public function mahasiswa_matakuliah()
    {
        return $this->hasMany(mahasiswa_matakuliah::class);
    }
}