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
        Schema::create('persetujuan', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('pemesanan_id')->unsigned();
            $table->foreign('pemesanan_id')->references('id')->on('pemesanan');
            $table->bigInteger('approver_id')->unsigned();
            $table->foreign('approver_id')->references('id')->on('users');
            $table->string('status');
            $table->timestamp('approved_at');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('persetujuan');
    }
};
