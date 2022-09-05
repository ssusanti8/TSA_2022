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

Route::get('/', function ($id) {
    echo "Selamat Datang";
});

