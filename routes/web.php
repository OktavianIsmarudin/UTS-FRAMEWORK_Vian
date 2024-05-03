<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/homes', function () {
    return view('home');
});

Route::get('home', [HomeController::class, 'index'])->name('home');

Route::get('profile', [ProfileController::class])->name('profile');

Route::resource('barangs', BarangController::class);

Route::redirect('/', '/homes');
