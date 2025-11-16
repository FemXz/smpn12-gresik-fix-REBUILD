<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('welcome_heads', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();      // foto kepala sekolah
            $table->string('subtitle')->nullable();   // Sambutan Kepala Sekolah
            $table->string('title')->nullable();      // Selamat Datang di Sekolah Kami
            $table->text('text1')->nullable();        // paragraf 1
            $table->text('text2')->nullable();        // paragraf 2
            $table->string('name')->nullable();       // nama kepsek
            $table->string('position')->nullable();   // jabatan
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('welcome_heads');
    }
};
