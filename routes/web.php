<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

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
    return redirect('/home');
})->name('index');


Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::prefix('action')->group(function () {
    Route::post('/login', [LoginController::class, 'process_login'])->name('process_login');
});

Route::middleware(['auth'])->group(function () {
    Route::middleware(['checklogin:admin'])->group(function () {
        Route::get('/book/add', [BookController::class, 'create'])->name('add-book');
        Route::resource('book', BookController::class)->names('book')->except(['show']);
    });

    Route::get('/home', [BookController::class, 'index'])->name('home');
    Route::get('/detail-book/{slug}', [BookController::class, 'show'])->name('detail-book');


    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});
