<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::statement('ALTER TABLE ormawa CHANGE nama_prodi nama_ormawa VARCHAR(255)');
        DB::statement('ALTER TABLE ormawa CHANGE waktu_pemilihan foto VARCHAR(255)');
        DB::statement('ALTER TABLE ormawa CHANGE gedung_pemilihan koalisi VARCHAR(255)');

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement('ALTER TABLE ormawa CHANGE foto waktu_pemilihan VARCHAR(255)');
        DB::statement('ALTER TABLE ormawa CHANGE nama_ormawa nama_prodi VARCHAR(255)');
        DB::statement('ALTER TABLE ormawa CHANGE koalisi gedung_pemilihan VARCHAR(255)');
    }
};
