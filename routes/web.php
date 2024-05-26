<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('upload');
});

Route::get('/create',[\App\Http\Controllers\ArchController::class, 'createBoard']);
Route::post('/store',[\App\Http\Controllers\ArchController::class, 'storeBoard']);
Route::get('/board/{id}',[\App\Http\Controllers\ArchController::class, 'board']);
Route::get('/preview/{id}',[\App\Http\Controllers\ArchController::class, 'previewBoard']);
Route::post('/addStory',[\App\Http\Controllers\ArchController::class, 'addStory']);
Route::get('/boards',[\App\Http\Controllers\ArchController::class, 'showBoards']);
//Route::get('/download',[\App\Http\Controllers\ArchController::class, 'showBoards']);
Route::get('/home',[\App\Http\Controllers\ArchController::class, 'home']);
Route::get('/clear',[\App\Http\Controllers\ArchController::class, 'clear']);
