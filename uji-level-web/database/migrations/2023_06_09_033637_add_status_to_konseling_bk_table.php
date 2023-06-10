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
        Schema::table('konseling_bk', function (Blueprint $table) {
                $table->enum('status', ['Pending', 'Approved', 'Cancelled'])->after('alasan');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('konseling_bk', function (Blueprint $table) {
            //
        });
    }
};
