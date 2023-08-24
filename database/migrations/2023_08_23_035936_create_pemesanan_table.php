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
        Schema::create('pemesanan', function (Blueprint $table) {
            $table->id();
            $table->string('pemesan');
            $table->bigInteger('kendaraan_id')->unsigned();
            $table->foreign('kendaraan_id')->references('id')->on('kendaraan');
            $table->enum('status', ['ditolak', 'menunggu','disetujui']);
            $table->tinyInteger('tingkat_persetujuan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemesanan');
    }
};
