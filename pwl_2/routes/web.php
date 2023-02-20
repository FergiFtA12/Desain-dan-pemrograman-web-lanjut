<?php

use App\Http\Controllers;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//  return view('welcome');
//});

//Route::get('/', function () {
//  echo "Selamat Datang";
//});

//Route::get('/about', function () {
//  echo "Nim: 2141720211, Nama: Fergie Fatah Ardiansyah";
//});

//Route::get('/articles/{id}', function ($id) {
//  echo "Halaman Artikel dengan ID $id";
//});

//Route::get('/', [PageController::class, 'index']);
//Route::get('/about', [PageController::class, 'about']);
//Route::get('/articles/{id}', [PageController::class, 'article']);

//Route::get('/', [HomeController::class]);
//Route::get('/about', [AboutController::class]);
//Route::get('/articles/{$id}', [ArticleController::class]);

//Route::get('/', function () {
//    echo 'Menampilkan halaman awal website';
//});

Route::prefix('program')->group(function () {
    Route::get('/', function () {
        echo 'Menampilkan halaman program';
    });
});

Route::resource('/contact', HomeController::class);

Route::get('/products/marbel-edu-games', function () {
    echo 'Menampilkan halaman marbel-edu-games';
});

Route::get('/products/marbel-and-friends-kids-games', function () {
    echo 'Menampilkan halaman marbel-and-friends-kids-games';
});

Route::get('/products/riri-story-books', function () {
    echo 'Menampilkan halaman riri-story-books';
});

Route::get('/products/kolak-kids-songs', function () {
    echo 'Menampilkan halaman kolak-kids-songs';
});

Route::prefix('products')->group(function () {
    Route::get('/', function () {
        echo '  <a href="http://localhost/Desain%20dan%20pemrograman%20web%20lanjut/pwl_2/public/products/marbel-edu-games">marbel edu games</a><br>
                <a href="http://localhost/Desain%20dan%20pemrograman%20web%20lanjut/pwl_2/public/products/marbel-and-friends-kids-games">marbel-and-friends-kids-games</a><br>
                <a href= "http://localhost/Desain%20dan%20pemrograman%20web%20lanjut/pwl_2/public/products/riri-story-books">riri-story-books</a><br>
                <a href="http://localhost/Desain%20dan%20pemrograman%20web%20lanjut/pwl_2/public/products/kolak-kids-songs">kolak-kids-songs</a><br>
        ';
    });
});

Route::prefix('program')->group(function () {
    Route::get('/', function () {
        echo 'Menampilkan halaman program';
    });
});

Route::resource('/contact', HomeController::class);

Route::get('/news/{tittle}', function ($tittle) {
    return 'Menampilkan Berita tentang ' . $tittle;
});

Route::get('/about-us', function () {
      echo "Halaman About Us ";
    });

Route::get('/contact-us', [HomeController::class, 'contact']);
