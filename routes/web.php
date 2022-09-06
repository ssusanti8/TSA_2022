<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProductController;

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
// Route::get('/', function () {
//     echo "Selamat Datang";
// });

// Route::get('/about', function () {
//     echo "NIM: 2241727032 <br> Nama: SUSANTI <br> Kelas: TSA WEB B";
// });

// Route::get('/articles/{id}', function ($id) {
//     echo "Halaman Artikel dengan ID " .$id;
// });

// Route::get('/articles/{id}', function ($id) {
//     echo "Ini merupakan halaman artikel dengan id " .$id;
// });

// Konsep Controller
// Route::get('/', [PageController::class, 'index']);

// Route::get('/about', [PageController::class, 'about']);

// Route::get('/articles/{id}', [PageController::class, 'articles']);

// konsep masing-masing Controller 
// Route::get('/', [HomeController::class, 'index']);

// Route::get('/about', [AboutController::class, 'index']);

// Route::get('/articles/{id}', [ArticleController::class, 'show']);

// konsep Single Action Controller hanya 1 function dengan --invoke
// Route::get('/blog', BlogController::class);

// Halaman Home
Route::get('/', [HomeController::class, 'index']);

// Halaman Product Route Prefix
Route::prefix('category')->group(function (){
    Route::get('/{id}', [ProductController::class, 'show']);
});
