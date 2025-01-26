<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('produk_layanan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_produk');
            $table->string('hero_title');
            $table->string('hero_subtitle')->nullable();
            $table->string('slug')->unique();
            $table->text('deskripsi');
            $table->text('deskripsi_lengkap');
            $table->json('materi')->nullable();
            $table->json('manfaat')->nullable();
            $table->json('persyaratan')->nullable();
            $table->json('alur_proses')->nullable();
            $table->json('jalur_pelatihan')->nullable();
            $table->string('gambar_banner')->nullable();
            $table->enum('status', ['aktif', 'nonaktif'])->default('aktif');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('produk_layanan');
    }
};
