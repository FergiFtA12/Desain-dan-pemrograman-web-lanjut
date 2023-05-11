<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class prodiModel extends Model
{
    use HasFactory;
    protected $table = 'prodi';
    protected $primarikey = 'prodi_id';
    protected $fillable = ['prodi'];
          
    public function mahasiswa(){
        return $this->hasOne(Mahasiswa::class);
    }

}