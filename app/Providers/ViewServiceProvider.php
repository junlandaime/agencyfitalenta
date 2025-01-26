<?php

namespace App\Providers;

use App\Models\ProdukLayanan;
use Illuminate\Support\Facades\View;
use Illuminate\View\View as ViewInstance;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        // Make sure to use the correct view path
        View::composer('layouts.front.header', function (ViewInstance $view) {
            $produk = ProdukLayanan::query()
                ->where('status', 'aktif')
                ->orderBy('id', 'asc')
                ->get();

            // $abouts = About::query()
            //     ->where('is_active', true)
            //     ->orderBy('title', 'asc')
            //     ->get();


            $view->with([
                'headerProduk' => $produk,
                // 'headerAbouts' => $abouts
            ]);
        });

        // View::composer('layouts.footer', function (ViewInstance $view) {
        //     $landingpage = LandingPage::firstOrFail();
        //     $programs = ProgramLayanan::query()
        //         ->where('status', 'aktif')
        //         ->orderBy('id', 'asc')
        //         ->get();

        //     $view->with([
        //         'footerLandingPage' => $landingpage,
        //         'footerPrograms' => $programs
        //     ]);
        // });

        // View::composer('layouts.front', function (ViewInstance $view) {
        //     $landingpage = LandingPage::firstOrFail();

        //     $view->with([
        //         'frontLandingPage' => $landingpage
        //     ]);
        // });
    }
}
