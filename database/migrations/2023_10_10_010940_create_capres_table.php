<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('capres', function (Blueprint $table) {
            $table->id();
            $table->string('nama_capres');
            $table->string('foto_capres');
            $table->bigInteger('nim');
            $table->string('prodi');
            $table->string('tentang');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('capres');
    }
};
