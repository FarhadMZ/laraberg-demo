<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;


Route::get('/pages/create', [PageController::class, 'create'])->name('pages.create');
Route::post('/pages', [PageController::class, 'store'])->name('pages.store');
Route::get('/pages', [PageController::class, 'index'])->name('pages.index');
Route::get('/pages/{page}', [PageController::class, 'show'])->name('pages.show');