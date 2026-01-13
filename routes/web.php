<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('amenities.index');
});

Route::resource('amenities', \App\Http\Controllers\AmenityController::class);
