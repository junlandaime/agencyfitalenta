<?php

namespace App\Http\Controllers;

use App\Models\LandingPage;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        $landingPage = LandingPage::where('is_active', true)
            ->with(['sections' => function ($query) {
                $query->where('is_active', true)->orderBy('order');
            }, 'features' => function ($query) {
                $query->where('is_active', true)->orderBy('order');
            }, 'stats' => function ($query) {
                $query->where('is_active', true)->orderBy('order');
            }])
            ->firstOrFail();

        return view('landing-page', compact('landingPage'));
    }
}
