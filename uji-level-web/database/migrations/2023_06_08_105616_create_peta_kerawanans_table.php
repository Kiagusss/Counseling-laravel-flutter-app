<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('peta_kerawanans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('siswa_id');
            $table->unsignedBigInteger('walas_id');
            $table->string('jenis_kerawanan');
            

            $table->foreign('siswa_id')->references('id')->on('siswas');
            $table->foreign('walas_id')->references('id')->on('walas');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('peta_kerawanans');
    }
};
