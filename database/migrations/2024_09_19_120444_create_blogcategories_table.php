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
        Schema::create('blogcategories', function (Blueprint $table) {
            $table->id();
            $table->string('name', 64)->nullable(false);
            $this->base($table);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogcategories');
    }
};
