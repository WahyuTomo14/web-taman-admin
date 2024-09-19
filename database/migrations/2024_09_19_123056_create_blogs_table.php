<?php

use App\Traits\BaseModel;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    use BaseModel;
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('thumbnail', 128)->nullable(false);
            $table->string('title', 128)->nullable(false);
            $table->unsignedBigInteger('blogcategories_id');
            $table->foreign('blogcategories_id')->references('id')->on('blogcategories');
            $table->string('foto', 1000)->nullable(false);
            $table->text('body')->nullable(false);
            $table->text('maps')->nullable(false);
            $this->base($table);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
