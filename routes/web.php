<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/url', function () {
    return view('url');
});

Route::get('/geo', function () {
    return view('geo');
});

Route::get('/phone', function () {
    return view('phone');
});

Route::get('/mail', function () {
    return view('mail');
});

Route::get('/sms', function () {
    return view('sms');
});

Route::get('/whatsapp', function () {
    return view('whatsapp');
});

Route::get('/wifi', function () {
    return view('wifi');
});

Route::get('/product', function () {
    return view('product');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
