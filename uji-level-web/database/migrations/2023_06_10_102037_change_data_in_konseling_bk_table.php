<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('konseling_bk', function (Blueprint $table) {
            DB::statement("ALTER TABLE konseling_bk MODIFY status ENUM('Pending', 'Approved', 'Cancelled', 'Done')");
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
