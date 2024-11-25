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
        Schema::table('asignaciones', function (Blueprint $table) {
            $table->foreign(['tip_acomo_id'], 'fk_acomo_id')->references(['id_acomo'])->on('acomodaciones')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['tip_habita_id'], 'fk_habita_id')->references(['id_habita'])->on('tip_habitaciones')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['hotel_id'], 'fk_hotel_id')->references(['id_nit'])->on('hoteles')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('asignaciones', function (Blueprint $table) {
            $table->dropForeign('fk_acomo_id');
            $table->dropForeign('fk_habita_id');
            $table->dropForeign('fk_hotel_id');
        });
    }
};
