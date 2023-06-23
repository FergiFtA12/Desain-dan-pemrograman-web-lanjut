<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ArtisclesController;
use Illuminate\Support\Facades\Auth;
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

// Route::prefix('program')->group(function () {
//     Route::get('/', function () {
//         echo 'Menampilkan halaman program';
//     });
// });

// Route::resource('/contact', HomeController::class);

// Route::get('/products/marbel-edu-games', function () {
//     echo 'Menampilkan halaman marbel-edu-games';
// });

// Route::get('/products/marbel-and-friends-kids-games', function () {
//     echo 'Menampilkan halaman marbel-and-friends-kids-games';
// });

// Route::get('/products/riri-story-books', function () {
//     echo 'Menampilkan halaman riri-story-books';
// });

// Route::get('/products/kolak-kids-songs', function () {
//     echo 'Menampilkan halaman kolak-kids-songs';
// });

// Route::prefix('products')->group(function () {
//     Route::get('/', function () {
//         echo '  <a href="http://localhost/Desain%20dan%20pemrograman%20web%20lanjut/pwl_2/public/products/marbel-edu-games">marbel edu games</a><br>
//                 <a href="http://localhost/Desain%20dan%20pemrograman%20web%20lanjut/pwl_2/public/products/marbel-and-friends-kids-games">marbel-and-friends-kids-games</a><br>
//                 <a href= "http://localhost/Desain%20dan%20pemrograman%20web%20lanjut/pwl_2/public/products/riri-story-books">riri-story-books</a><br>
//                 <a href="http://localhost/Desain%20dan%20pemrograman%20web%20lanjut/pwl_2/public/products/kolak-kids-songs">kolak-kids-songs</a><br>
//         ';
//     });
// });

// Route::prefix('program')->group(function () {
//     Route::get('/', function () {
//         echo 'Menampilkan halaman program';
//     });
// });

//Route::resource('/contact', HomeController::class);

//Route::get('/news/{tittle}', function ($tittle) {
  //  return 'Menampilkan Berita tentang ' . $tittle;
//});

//Route::get('/about-us', function () {
    //  echo "Halaman About Us ";
  //  });

//Route::get('/contact-us', [HomeController::class, 'contact']);

// Pertemuan 3

// Prektikum 1
// Route::get('/', [Home2Controller::class, 'home']);

// Route::prefix('product')->group(function () {
//     Route::get('/', [Home2Controller::class, 'index']);
//     Route::get('/{product}', [Home2Controller::class, 'product']);
// });

// Route::get('/news/{id}', [Home2Controller::class, 'news']);

// Route::prefix('program')->group(function () {
//     Route::get('/', [Home2Controller::class, 'program']);
// });

// Route::get('/', [Home2Controller::class, 'aboutUs']);

// Route::resource('/contactUs', contactUsController::class);



Auth::routes();
Route::get('/logout', [LoginController::class, 'logout']);

// Route::get('/', function () {
//   return view('layout.template');
//  });

  Route::middleware(['auth'])->group(function(){


    // Route::get('/', function () {
    //   return view('layout.template');
    //  });
    Route::get('/', [DashboardController::class, 'index']);
     
     Route::get('/dashboard', [DashboardController::class, 'index']);
     Route::get('/profile', [ProfileController::class, 'index']);
     Route::get('/pengalaman', [PengalamanController::class, 'index']);
     
     Route::get('/kendaraan', [KendaraanController::class, 'index']);
     Route::get('/hobi', [HobiController::class, 'index']);
     Route::get('/keluarga', [KeluargaController::class, 'index']);
     Route::get('/matkul', [MatkulController::class, 'index']);

     Route::resource('/mahasiswa', MahasiswaController::class)->parameter('mahasiswa', 'id');
     Route::post('/mahasiswa/data', [MahasiswaController::class, 'data']);

     Route::get('/mahasiswa/{id}/nilai', [MahasiswaController::class, 'nilai']);
     
     Route::resource('articles', ArticleController::class);
});

Route::get('/', [MahasiswaController::class, 'index']);

