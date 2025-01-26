<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProdukLayananController as AdminProdukLayananController;
use App\Http\Controllers\Front\ProdukLayananController as FrontProdukLayananController;
use App\Http\Controllers\Admin\ProdukCategoryController as AdminProdukCategoryController;
use App\Http\Controllers\Front\ProdukCategoryController as FrontProdukCategoryController;
use App\Http\Controllers\Admin\ProdukLayananSectionController as AdminProdukLayananSectionController;
use App\Http\Controllers\Admin\ProdukController as AdminProdukController;
use App\Http\Controllers\Front\ProdukController as FrontProdukController;
use App\Http\Controllers\Admin\ProdukSectionController as AdminProdukSectionController;
use App\Http\Controllers\Admin\UserController as AdminUserController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\LandingPageController as AdminLandingPageController;


// Route::get('/', function () {
//     return view('front.index');
// })->name('home');
// Route::get('/business', function () {
//     return view('front.business');
// })->name('business');
// Route::get('/about', function () {
//     return view('front.about');
// })->name('about');
// Route::get('/article', function () {
//     return view('front.article');
// })->name('article');

// Route::get('admin/dashboard', function () {
//     return view('admin.dashboard');
// })->name('admin.dashboard');

// Route::get('admin/article', function () {
//     return view('admin.article');
// })->name('admin.article');
// Route::get('admin/article/create', function () {
//     return view('admin.article-create');
// })->name('admin.article.create');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::name('front.')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');

    // Product Categories Routes
    Route::get('/kategori', [FrontProdukCategoryController::class, 'index'])
        ->name('produk-category.index');
    Route::get('/kategori/{slug}', [FrontProdukCategoryController::class, 'show'])
        ->name('produk-category.show');

    // Product Services Routes
    Route::get('/produk-layanan', [FrontProdukLayananController::class, 'index'])
        ->name('produk-layanan.index');
    Route::get('/produk-layanan/kategori/{slug}', [FrontProdukLayananController::class, 'byCategory'])
        ->name('produk-layanan.category');
    Route::get('/produk-layanan/{slug}', [FrontProdukLayananController::class, 'show'])
        ->name('produk-layanan.show');

    // Products Routes
    Route::get('/produk', [FrontProdukController::class, 'index'])
        ->name('produk.index');
    Route::get('/produk/kategori/{category:slug}', [FrontProdukController::class, 'byCategory'])
        ->name('produk.category');
    Route::get('/produk/{produk}', [FrontProdukController::class, 'show'])
        ->name('produk.show');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    // Admin Routes
    Route::middleware(['auth', 'role:owner'])->prefix('admin')->name('admin.')->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

        Route::resource('produk-category', AdminProdukCategoryController::class);
        Route::resource('produk-layanan', AdminProdukLayananController::class);
        Route::resource('produk', AdminProdukController::class);

        // Produk Layanan Sections Routes
        Route::prefix('produk-layanan/{produkLayanan}')->name('produk-layanan.')->group(function () {
            Route::get('sections', [AdminProdukLayananSectionController::class, 'index'])->name('sections.index');
            Route::get('sections/create', [AdminProdukLayananSectionController::class, 'create'])->name('sections.create');
            Route::post('sections', [AdminProdukLayananSectionController::class, 'store'])->name('sections.store');
            Route::get('sections/{section}/edit', [AdminProdukLayananSectionController::class, 'edit'])->name('sections.edit');
            Route::put('sections/{section}', [AdminProdukLayananSectionController::class, 'update'])->name('sections.update');
            Route::delete('sections/{section}', [AdminProdukLayananSectionController::class, 'destroy'])->name('sections.destroy');
            Route::post('sections/reorder', [AdminProdukLayananSectionController::class, 'reorder'])->name('sections.reorder');
        });

        // Produk Sections Routes
        Route::prefix('produk/{produk}')->name('produk.')->group(function () {
            Route::get('sections', [AdminProdukSectionController::class, 'index'])->name('sections.index');
            Route::get('sections/create', [AdminProdukSectionController::class, 'create'])->name('sections.create');
            Route::post('sections', [AdminProdukSectionController::class, 'store'])->name('sections.store');
            Route::get('sections/{section}/edit', [AdminProdukSectionController::class, 'edit'])->name('sections.edit');
            Route::put('sections/{section}', [AdminProdukSectionController::class, 'update'])->name('sections.update');
            Route::delete('sections/{section}', [AdminProdukSectionController::class, 'destroy'])->name('sections.destroy');
            Route::post('sections/reorder', [AdminProdukSectionController::class, 'reorder'])->name('sections.reorder');
        });

        Route::resource('users', AdminUserController::class);

        // Landing Page Management
        Route::get('/landing-pages/edit', [AdminLandingPageController::class, 'edit'])->name('landing-pages.edit');
        Route::put('/landing-pages/update', [AdminLandingPageController::class, 'update'])->name('landing-pages.update');
        Route::prefix('admin/landing-pages')->name('landing-pages.')->group(function () {
            // Sections
            Route::get('sections/create', [AdminLandingPageController::class, 'createSection'])->name('sections.create');
            Route::post('sections', [AdminLandingPageController::class, 'storeSection'])->name('sections.store');
            Route::get('sections/{section}/edit', [AdminLandingPageController::class, 'editSection'])->name('sections.edit');
            Route::put('sections/{section}', [AdminLandingPageController::class, 'updateSection'])->name('sections.update');
            Route::delete('sections/{section}', [AdminLandingPageController::class, 'deleteSection'])->name('sections.delete');

            // Features
            Route::get('features/create', [AdminLandingPageController::class, 'createFeature'])->name('features.create');
            Route::post('features', [AdminLandingPageController::class, 'storeFeature'])->name('features.store');
            Route::get('features/{feature}/edit', [AdminLandingPageController::class, 'editFeature'])->name('features.edit');
            Route::put('features/{feature}', [AdminLandingPageController::class, 'updateFeature'])->name('features.update');
            Route::delete('features/{feature}', [AdminLandingPageController::class, 'deleteFeature'])->name('features.delete');

            // Stats
            Route::get('stats/create', [AdminLandingPageController::class, 'createStat'])->name('stats.create');
            Route::post('stats', [AdminLandingPageController::class, 'storeStat'])->name('stats.store');
            Route::get('stats/{stat}/edit', [AdminLandingPageController::class, 'editStat'])->name('stats.edit');
            Route::put('stats/{stat}', [AdminLandingPageController::class, 'updateStat'])->name('stats.update');
            Route::delete('stats/{stat}', [AdminLandingPageController::class, 'deleteStat'])->name('stats.delete');
        });
    });
});

require __DIR__ . '/auth.php';
