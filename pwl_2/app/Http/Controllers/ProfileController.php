<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(){
        return view('profile')
            ->with('nama', 'Fergie Fatah Ardiansyah')
            ->with('panggilan', 'Fergi')
            ->with('nim', '2141720211')
            ->with('kelas', 'TI-2B')
            ->with('absen', '08')
            ->with('prodi', 'D-IV Teknik Informatika')
            ->with('jurusan', 'Teknologi Informasi')
            ->with('univ', 'Politeknik Negeri Malang');
    }
}
