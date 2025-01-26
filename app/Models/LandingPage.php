<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LandingPage extends Model
{
    use HasFactory;

    protected $fillable = [
        'hero_title',
        'hero_subtitle',
        'hero_image',
        'hero_rating',
        'hero_rating_count',
        'hero_cta_primary_text',
        'hero_cta_primary_url',
        'hero_cta_secondary_text',
        'hero_cta_secondary_url',
        'is_active',

        'contact_address',
        'contact_email',
        'contact_phone',
        'contact_whatsapp',
        'social_facebook',
        'social_twitter',
        'social_instagram',
        'social_linkedin',
        'footer_description',
        'meta_title',
        'meta_description',
        'meta_keywords'
    ];

    protected $casts = [
        'is_active' => 'boolean'
    ];

    public function sections()
    {
        return $this->hasMany(LandingSection::class);
    }

    public function features()
    {
        return $this->hasMany(LandingFeature::class);
    }

    public function stats()
    {
        return $this->hasMany(LandingStat::class);
    }

    public function getHeroImageUrlAttribute()
    {
        return asset('storage/' . $this->hero_image);
    }
}
