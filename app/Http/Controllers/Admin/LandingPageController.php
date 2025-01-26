<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\LandingPage;
use App\Models\LandingSection;
use App\Models\LandingFeature;
use App\Models\LandingStat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class LandingPageController extends Controller
{

    public function edit()
    {
        $landingPage = LandingPage::firstOrFail()->load(['sections', 'features', 'stats']);
        return view('admin.landing-pages.edit', compact('landingPage'));
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'hero_title' => 'required|string|max:255',
            'hero_subtitle' => 'required|string',
            'hero_image' => 'nullable|image|max:2048',
            'hero_rating' => 'required|numeric|min:0|max:5',
            'hero_rating_count' => 'required|integer|min:0',
            'hero_cta_primary_text' => 'required|string|max:255',
            'hero_cta_primary_url' => 'required|string|max:255',
            'hero_cta_secondary_text' => 'required|string|max:255',
            'hero_cta_secondary_url' => 'required|string|max:255',
            'is_active' => 'boolean',

            'contact_address' => 'nullable|string',
            'contact_email' => 'nullable|email',
            'contact_phone' => 'nullable|string',
            'contact_whatsapp' => 'nullable|string',
            'social_facebook' => 'nullable|url',
            'social_twitter' => 'nullable|url',
            'social_instagram' => 'nullable|url',
            'social_linkedin' => 'nullable|url',
            'footer_description' => 'required|string',
            'meta_title' => 'required|string|max:255',
            'meta_description' => 'nullable|string',
            'meta_keywords' => 'nullable|string'
        ]);

        $landingPage = LandingPage::firstOrFail();

        if ($request->hasFile('hero_image')) {
            // Delete old image
            if ($landingPage->hero_image) {
                Storage::disk('public')->delete($landingPage->hero_image);
            }

            $image = $request->file('hero_image');
            $filename = 'landing/hero/' . time() . '.' . $image->getClientOriginalExtension();

            // Store original image
            Storage::disk('public')->put($filename, file_get_contents($image));

            $validated['hero_image'] = $filename;
        }
        $landingPage->update($validated);

        return redirect()
            ->route('admin.landing-pages.edit', $landingPage)
            ->with('success', 'Landing page berhasil diperbarui.');
    }


    // Sections
    public function createSection()
    {
        return view('admin.landing.sections.create');
    }

    public function storeSection(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'subtitle' => 'nullable|string',
            'content' => 'nullable|string',
            'image' => 'nullable|image|max:2048',
            'type' => 'required|string|in:content,features,stats',
            'order' => 'required|integer',
            'is_active' => 'boolean'
        ]);

        $landingPage = LandingPage::firstOrFail();

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('landing/sections', 'public');
            $validated['image'] = $path;
        }

        $landingPage->sections()->create($validated);

        return redirect()->route('admin.landing-pages.edit')
            ->with('success', 'Section created successfully');
    }

    public function editSection(LandingSection $section)
    {
        return view('admin.landing.sections.edit', compact('section'));
    }

    public function updateSection(Request $request, LandingSection $section)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'subtitle' => 'nullable|string',
            'content' => 'nullable|string',
            'image' => 'nullable|image|max:2048',
            'type' => 'required|string|in:content,features,stats',
            'order' => 'required|integer',
            'is_active' => 'boolean'
        ]);

        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($section->image) {
                Storage::disk('public')->delete($section->image);
            }
            $path = $request->file('image')->store('landing/sections', 'public');
            $validated['image'] = $path;
        }

        $section->update($validated);

        return redirect()->route('admin.landing-pages.edit')
            ->with('success', 'Section updated successfully');
    }

    public function deleteSection(LandingSection $section)
    {
        if ($section->image) {
            Storage::disk('public')->delete($section->image);
        }
        $section->delete();

        return redirect()->route('admin.landing-pages.edit')
            ->with('success', 'Section deleted successfully');
    }

    // Features
    public function createFeature()
    {
        return view('admin.landing.features.create');
    }

    public function storeFeature(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'icon' => 'nullable|string',
            'image' => 'nullable|image|max:2048',
            'order' => 'required|integer',
            'is_active' => 'boolean'
        ]);

        $landingPage = LandingPage::firstOrFail();

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('landing/features', 'public');
            $validated['image'] = $path;
        }

        $landingPage->features()->create($validated);

        return redirect()->route('admin.landing-pages.edit')
            ->with('success', 'Feature created successfully');
    }

    public function editFeature(LandingFeature $feature)
    {
        return view('admin.landing.features.edit', compact('feature'));
    }

    public function updateFeature(Request $request, LandingFeature $feature)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'icon' => 'nullable|string',
            'image' => 'nullable|image|max:2048',
            'order' => 'required|integer',
            'is_active' => 'boolean'
        ]);

        if ($request->hasFile('image')) {
            if ($feature->image) {
                Storage::disk('public')->delete($feature->image);
            }
            $path = $request->file('image')->store('landing/features', 'public');
            $validated['image'] = $path;
        }

        $feature->update($validated);

        return redirect()->route('admin.landing-pages.edit')
            ->with('success', 'Feature updated successfully');
    }

    public function deleteFeature(LandingFeature $feature)
    {
        if ($feature->image) {
            Storage::disk('public')->delete($feature->image);
        }
        $feature->delete();

        return redirect()->route('admin.landing-pages.edit')
            ->with('success', 'Feature deleted successfully');
    }

    // Stats
    public function createStat()
    {
        return view('admin.landing.stats.create');
    }

    public function storeStat(Request $request)
    {
        $validated = $request->validate([
            'label' => 'required|string|max:255',
            'value' => 'required|string',
            'icon' => 'nullable|string',
            'order' => 'required|integer',
            'is_active' => 'boolean'
        ]);

        $landingPage = LandingPage::firstOrFail();
        $landingPage->stats()->create($validated);

        return redirect()->route('admin.landing-pages.edit')
            ->with('success', 'Statistic created successfully');
    }

    public function editStat(LandingStat $stat)
    {
        return view('admin.landing.stats.edit', compact('stat'));
    }

    public function updateStat(Request $request, LandingStat $stat)
    {
        $validated = $request->validate([
            'label' => 'required|string|max:255',
            'value' => 'required|string',
            'icon' => 'nullable|string',
            'order' => 'required|integer',
            'is_active' => 'boolean'
        ]);

        $stat->update($validated);

        return redirect()->route('admin.landing-pages.edit')
            ->with('success', 'Statistic updated successfully');
    }

    public function deleteStat(LandingStat $stat)
    {
        $stat->delete();

        return redirect()->route('admin.landing-pages.edit')
            ->with('success', 'Statistic deleted successfully');
    }
}
