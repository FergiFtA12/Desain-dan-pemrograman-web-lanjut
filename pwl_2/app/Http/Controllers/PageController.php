<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        echo "Selamat Datang";
    }

    public function about(){
        echo "Nim: 2141720211, Nama: Fergie Fatah Ardiansyah";
    }

    public function article($id){
        echo "Halaman Artikel dengan ID $id";
    }
}
