<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ProdukLayanan extends Model
{
    use HasFactory;

    protected $table = 'produk_layanan';

    protected $fillable = [
        'nama_produk',
        'hero_title',
        'hero_subtitle',
        'slug',
        'deskripsi',
        'deskripsi_lengkap',
        'materi',
        'manfaat',
        'persyaratan',
        'alur_proses',
        'jalur_pelatihan',
        'gambar_banner',
        'status'
    ];

    protected $casts = [
        'materi' => 'array',
        'manfaat' => 'array',
        'persyaratan' => 'array',
        'alur_proses' => 'array',
        'jalur_pelatihan' => 'array'
    ];

    public function produks(): HasMany
    {
        return $this->hasMany(Produk::class);
    }

    public function sections(): HasMany
    {
        return $this->hasMany(ProdukLayananSection::class);
    }
}
