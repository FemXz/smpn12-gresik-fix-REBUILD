<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('ppdb_settings', function (Blueprint $table) {
            $table->id();

            // Halaman PPDB (detail)
            $table->string('title')->nullable();
            $table->date('publish_date')->nullable();
            $table->string('poster')->nullable(); // path di storage

            $table->longText('alur')->nullable();
            $table->longText('syarat')->nullable();
            $table->longText('jadwal')->nullable();
            $table->longText('jalur')->nullable();
            $table->longText('faq')->nullable();
            $table->string('link_resmi')->nullable();

            // Section PPDB (homepage)
            $table->string('section_badge')->nullable();
            $table->string('section_title')->nullable();
            $table->text('section_description')->nullable();

            $table->string('section_jalur_afirmasi')->nullable();
            $table->string('section_jalur_pindah')->nullable();
            $table->string('section_jalur_prestasi')->nullable();
            $table->string('section_jalur_zonasi')->nullable();

            $table->string('button_panduan_text')->nullable();
            $table->string('button_panduan_link')->nullable();
            $table->string('button_wa_text')->nullable();
            $table->string('button_wa_link')->nullable();

            // Slider images: simpan path file di storage
            $table->string('slider_1')->nullable();
            $table->string('slider_2')->nullable();
            $table->string('slider_3')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('ppdb_settings');
    }
};
