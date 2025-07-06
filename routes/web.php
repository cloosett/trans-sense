<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;

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

// Маршрути для обробки форм
Route::post('/submit-call-request', [FormController::class, 'submitCallRequest'])->name('submit.call.request');
Route::post('/submit-quote-request', [FormController::class, 'submitQuoteRequest'])->name('submit.quote.request');
Route::post('/submit-contact-message', [FormController::class, 'submitContactMessage'])->name('submit.contact.message');

// Dashboard route - перенаправляємо на адмін-панель
Route::get('/dashboard', function () {
    return redirect()->route('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Profile routes (для Breeze)
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Адмін-панель
Route::middleware('auth')->prefix('admin-panel')->name('admin.')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('dashboard');
    Route::get('/call-requests', [AdminController::class, 'callRequests'])->name('call-requests');
    Route::get('/quote-requests', [AdminController::class, 'quoteRequests'])->name('quote-requests');
    Route::get('/contact-messages', [AdminController::class, 'contactMessages'])->name('contact-messages');
    
    // Оновлення статусів
    Route::patch('/call-requests/{callRequest}/status', [AdminController::class, 'updateCallRequestStatus'])->name('call-requests.update-status');
    Route::patch('/quote-requests/{quoteRequest}/status', [AdminController::class, 'updateQuoteRequestStatus'])->name('quote-requests.update-status');
    Route::patch('/contact-messages/{contactMessage}/status', [AdminController::class, 'updateContactMessageStatus'])->name('contact-messages.update-status');
});

require __DIR__.'/auth.php';
