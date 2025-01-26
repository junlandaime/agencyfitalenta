<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProdukLayananSection extends Model
{
    use HasFactory;

    protected $fillable = [
        'produk_layanan_id',
        'title',
        'content',
        'image',
        'order',
        'is_active'
    ];

    protected $casts = [
        'is_active' => 'boolean'
    ];

    public function produkLayanan(): BelongsTo
    {
        return $this->belongsTo(ProdukLayanan::class);
    }
}
