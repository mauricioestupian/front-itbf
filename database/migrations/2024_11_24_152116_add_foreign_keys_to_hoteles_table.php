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
        Schema::table('hoteles', function (Blueprint $table) {
            $table->foreign(['ciu_id'], 'fk_hot_ciu')->references(['id_ciu'])->on('ciudades')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('hoteles', function (Blueprint $table) {
            $table->dropForeign('fk_hot_ciu');
        });
    }
};
