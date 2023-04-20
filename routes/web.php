<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecognizationController;
use App\Http\Controllers\PagesController;




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

Route::get('/home', function () {
    return view('home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';


Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth:admin'])->name('admin.dashboard');

require __DIR__ . '/adminauth.php';

Route::post('/upload', [RecognizationController::class, 'upload'])->name('upload');
Route::get('/blog', [App\Http\Controllers\PagesController::class, 'blog'])->name('blog');


// Route::post('/recognize', [RecognizationController::class, 'recognize'])->name('recognize');

// Route::post('/upload', [RecognizationController::class, 'upload'])->name('upload');

// Route::get('/home', [App\Http\Controllers\PagesController::class, 'home'])->name('home');

// // About page
Route::get('/about', [App\Http\Controllers\PagesController::class, 'about'])->name('about');

// // Blog page
// Route::get('/blog', [App\Http\Controllers\PagesController::class, 'blog'])->name('blog');

// // Contact page
// Route::get('/contact', [App\Http\Controllers\PagesController::class, 'contact'])->name('contact');
