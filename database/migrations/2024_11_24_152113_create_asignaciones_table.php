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
        Schema::create('asignaciones', function (Blueprint $table) {
            $table->increments('id_asig');
            $table->string('hotel_id', 14)->nullable();
            $table->smallInteger('tip_habita_id')->nullable();
            $table->smallInteger('tip_acomo_id')->nullable();
            $table->integer('cant')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('asignaciones');
    }
};