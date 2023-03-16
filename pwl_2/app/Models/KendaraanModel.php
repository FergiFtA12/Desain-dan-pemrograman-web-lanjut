<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KendaraanModel extends Model
{
    use HasFactory;
    protected $table = 'kendaraan';
    protected $primarykey = 'no_pol';
    protected $keyType = 'string';
}
