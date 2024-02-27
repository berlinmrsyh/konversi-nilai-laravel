<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['web'])->group(function () {
    Route::get('/konversi', 'NilaiController@index');
    Route::post('/konversi', 'NilaiController@konversi');
});
