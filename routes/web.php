<?php

use App\Livewire\Auth\AuthContact;
use App\Livewire\Auth\Authhome;
use App\Livewire\Auth\Authlogin;
use App\Livewire\Auth\AuthProduct;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', Authhome::class)->name('home');
Route::get('/login', Authlogin::class)->name('login');
Route::get('/contact', AuthContact::class)->name('contact');
Route::get('/product', AuthProduct::class)->name('product');