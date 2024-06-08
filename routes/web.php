<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArchController;
use App\Http\Controllers\Auth\LoginController;

Route::get('/', function () {
    return redirect('home');
});

Route::middleware('auth')->group(function () {
    Route::get('/download/{id}', [ArchController::class, 'download']);
    Route::get('/create', [ArchController::class, 'createBoard']);
    Route::post('/store', [ArchController::class, 'storeBoard']);
    Route::get('/board/{id}', [ArchController::class, 'board']);
    Route::get('/delete/{id}', [ArchController::class, 'deleteBoard']);
    Route::post('/addStory', [ArchController::class, 'addStory']);
    Route::get('/boards', [ArchController::class, 'showBoards']);
    Route::get('/clear', [ArchController::class, 'clear']);
});
Route::get('/contact', [ArchController::class, 'contact']);
Route::get('/about', [ArchController::class, 'about']);
Route::get('/home', [ArchController::class, 'home']);


Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('register', [\App\Http\Controllers\Auth\RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [\App\Http\Controllers\Auth\RegisterController::class, 'register']);
