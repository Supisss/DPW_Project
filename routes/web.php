<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\loginController;
use App\Http\Controllers\makananController;
use App\Http\Controllers\pesananController;
use App\Http\Controllers\PageController;
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

// Route::get('/', function () {
//     return view('pages.home', [
//         'title' => 'Halaman Home'
//     ]);
// });

Route::get('/', function() {
    return view('home', [
        'nama' => 'upi'
    ]);
});

/* Route::get('/login', function() {
    return view('login');
});
 */

 Route::get('/home', function() {
    return view('home');
});

Route::get('/menu', function() {
    return view('menu');
});

Route::get('/about', function() {
    return view('about');
});

Route::get('/signup', function() {
    return view('signup');
});

Route::get('/pesan', function() {
    return view('pesan');
});

Route::get('/pesanan', function() {
    return view('pesanan');
});

Route::get('/layout', function() {
    return view('layout');
});

Route::get('/welcome', function() {
    return view('welcome');
});

Route::get('/login', [loginController::class, 'index']);

Route::get('/makanan', [makananController::class, 'index']);

Route::get('/pesanan', [pesananController::class, 'index']);

Route::get('/', [PageController::class, 'home']);
Route::get('/menu', [PageController::class, 'menu']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/login', [PageController::class, 'login']);
