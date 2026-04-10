<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // 1. Tombol Apply (Saat kita ketik: php artisan migrate)
    public function up(): void
    {
        Schema::table('destinations', function (Blueprint $table) {
            $table->text('description')->nullable()->change(); // Membuatnya boleh kosong
        });
    }

    // 2. Tombol Undo (Saat kita ketik: php artisan migrate:rollback)
    public function down(): void
    {
        Schema::table('destinations', function (Blueprint $table) {
            $table->text('description')->change(); // Mengembalikan seperti semula
        });
    }
};
