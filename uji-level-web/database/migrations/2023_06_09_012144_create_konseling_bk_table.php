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
        Schema::create('konseling_bk', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('layanan_id');
            $table->foreign('layanan_id')->references('id')->on('layanan_bk');
            $table->unsignedBigInteger('guru_id');
            $table->foreign('guru_id')->references('id')->on('guru');
            $table->unsignedBigInteger('siswa_id');
            $table->foreign('siswa_id')->references('id')->on('siswas');
            $table->unsignedBigInteger('walas_id');
            $table->foreign('walas_id')->references('id')->on('walas');
            $table->datetime('jadwal_konseling')->nullable();
            $table->string('hasil_konseling')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('konseling_bk');
    }
};
