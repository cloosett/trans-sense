<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/pricing', function () {
    return view('pricing');
})->name('pricing');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/reviews', function () {
    return view('reviews');
})->name('reviews');

Route::get('/faq', function () {
    return view('faq');
})->name('faq');