<?php
// routes/web.php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BahanBakuController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('bahanbaku', BahanBakuController::class);
