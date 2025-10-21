<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExampleController;

Route::get('/', [ExampleController::class, 'home'])->name('home');
Route::get('/about', [ExampleController::class, 'about'])->name('about');
