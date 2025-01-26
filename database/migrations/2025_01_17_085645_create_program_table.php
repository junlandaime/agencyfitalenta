<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('produk', function (Blueprint $table) {
            $table->id();
            $table->foreignId('produk_layanan_id')->constrained('produk_layanan')->onDelete('cascade');
            $table->foreignId('produk_category_id')->constrained()->onDelete('cascade');
            $table->string('nama_produk');
            $table->string('external_link')->nullable();
            $table->enum('status', ['draft', 'aktif'])->default('draft');
            $table->json('fitur')->nullable();
            $table->json('keunggulan')->nullable();
            $table->text('catatan_produk')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('produk');
    }
};
