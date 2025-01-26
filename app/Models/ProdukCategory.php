<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ProdukCategory extends Model
{
    use HasFactory;

    protected $table = 'produk_categories';

    protected $fillable = [
        'name',
        'slug',
        'description',
        'is_active',
        'order',
        'external_link'
    ];

    protected $casts = [
        'is_active' => 'boolean'
    ];

    public function produks(): HasMany
    {
        return $this->hasMany(Produk::class);
    }
}
