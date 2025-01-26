<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Produk extends Model
{
    use HasFactory;

    protected $table = 'produk';

    protected $fillable = [
        'produk_layanan_id',
        'produk_category_id',
        'nama_produk',
        'external_link',
        'status',
        'fitur',
        'keunggulan',
        'catatan_produk'
    ];

    protected $casts = [
        'fitur' => 'array',
        'keunggulan' => 'array'
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(ProdukCategory::class, 'produk_category_id');
    }

    public function layanan(): BelongsTo
    {
        return $this->belongsTo(ProdukLayanan::class, 'produk_layanan_id');
    }

    public function sections(): HasMany
    {
        return $this->hasMany(ProdukSection::class)->orderBy('order');
    }
}
