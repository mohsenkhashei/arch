<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('home');
});

Route::get('/download/{id}',[\App\Http\Controllers\ArchController::class, 'download']);
Route::get('/about',[\App\Http\Controllers\ArchController::class, 'about']);
Route::get('/create',[\App\Http\Controllers\ArchController::class, 'createBoard']);
Route::post('/store',[\App\Http\Controllers\ArchController::class, 'storeBoard']);
Route::get('/board/{id}',[\App\Http\Controllers\ArchController::class, 'board']);
Route::get('/delete/{id}',[\App\Http\Controllers\ArchController::class, 'deleteBoard']);
Route::post('/addStory',[\App\Http\Controllers\ArchController::class, 'addStory']);
Route::get('/boards',[\App\Http\Controllers\ArchController::class, 'showBoards']);
Route::get('/home',[\App\Http\Controllers\ArchController::class, 'home']);
Route::get('/clear',[\App\Http\Controllers\ArchController::class, 'clear']);
