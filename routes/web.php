<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

Route::get('/', function () {
    return view('welcome');
});

// route dengan get
// Route::get('posts', [PostController::class, 'index']);
// Route::get('posts/{id}', [PostController::class, 'show']);

// route dengan resource
// Route::resource('posts', PostController::class);

// route grouping dari laravel 9
// Route::controller(PostController::class) -> group(function()
// {
//     Route::get('posts', 'index');
//     Route::get('posts/{id}', 'show');
// });

// Anymous function
Route::get('/', function () {
    echo "Selamat Datang";
});

Route::get('/about', function () {
    echo "NIM: 2241727032 <br> Nama: SUSANTI <br> Kelas: TSA WEB B";
});

// Route::get('/articles/{id}', function ($id) {
//     echo "Halaman Artikel dengan ID " .$id;
// });

Route::get('/articles/{id}', function ($id) {
    echo "Ini merupakan halaman artikel dengan id " .$id;
});





