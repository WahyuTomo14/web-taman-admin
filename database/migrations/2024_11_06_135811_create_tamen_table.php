<?php

use App\Traits\BaseModel;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    use BaseModel;
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tamans', function (Blueprint $table) {
            $table->id();
            $table->string('name', 64);
            $table->string('alamat', 256);
            $table->unsignedBigInteger('kelurahans_id');
            $table->foreign('kelurahans_id')->references('id')->on('kelurahans');
            $table->string('no_kib');
            $table->integer('luas');
            $table->text('keterangan')->nullable();
            $this->base($table);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tamen');
    }
};
