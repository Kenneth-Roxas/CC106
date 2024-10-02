<?php

use App\Livewire\Auth\Authhome;
use App\Livewire\Auth\Authlogin;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', Authhome::class)->name('homePage');
Route::get('/login', Authlogin::class)->name('loginPage');



