<?php

use App\Models\Service;
use Illuminate\Support\Facades\Route;

Route::get('/', fn () => view('welcome', [
    'services' => Service::query()->orderBy('sort_order')->get(),
]))->name('home');
