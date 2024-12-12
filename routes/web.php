<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('front.index');
})->name('home');
Route::get('/business', function () {
    return view('front.business');
})->name('business');
Route::get('/about', function () {
    return view('front.about');
})->name('about');
Route::get('/article', function () {
    return view('front.article');
})->name('article');

Route::get('admin/dashboard', function () {
    return view('admin.dashboard');
})->name('admin.dashboard');

Route::get('admin/article', function () {
    return view('admin.article');
})->name('admin.article');
Route::get('admin/article/create', function () {
    return view('admin.article-create');
})->name('admin.article.create');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
