<?php

use App\Http\Controllers\Home;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.homepage');
});

Route::get('/home', [Home::class, 'view'])->name('home.view');
