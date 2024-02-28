<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NilaiController;


Route::get('/', [NilaiController::class, 'index']);
Route::post('/convert', [NilaiController::class, 'convert'])->name('convert');
