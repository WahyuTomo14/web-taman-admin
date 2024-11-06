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
        Schema::table('kelurahans', function (Blueprint $table) {
            $table->unsignedBigInteger('kecamatans_id');
            $table->foreign('kecamatans_id')->references('id')->on('kecamatans');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('kelurahans', function (Blueprint $table) {
            $table->unsignedBigInteger('kecamatans_id');
            $table->foreign('kecamatans_id')->references('id')->on('kecamatans');
        });
    }
};
