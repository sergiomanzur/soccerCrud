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
        //
        Schema::create('ligas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->boolean('es_liguilla')->default(false); // True si el campeón se decide por liguilla
            $table->integer('num_equipos_califican')->nullable(); // Número de equipos que califican a la liguilla (null si no aplica)
            $table->boolean('liguilla_a_dos_partidos')->nullable(); // True si la liguilla es a dos partidos
            $table->string('criterio_desempate')->nullable(); // 'goles_visitante', 'posicion_tabla' o 'gana_partido'
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
