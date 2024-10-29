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
        Schema::table('tareas', function (Blueprint $table) {
            $table->foreign(['fechas_id'], 'fk_tareas_fechas')->references(['id'])->on('fechas')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['tarea_estados_id'], 'fk_tareas_tarea_estados1')->references(['id'])->on('tarea_estados')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['tarea_prioridades_id'], 'fk_tareas_tarea_prioridades1')->references(['id'])->on('tarea_prioridades')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['tarea_tipos_id'], 'fk_tareas_tarea_tipos1')->references(['id'])->on('tarea_tipos')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tareas', function (Blueprint $table) {
            $table->dropForeign('fk_tareas_fechas');
            $table->dropForeign('fk_tareas_tarea_estados1');
            $table->dropForeign('fk_tareas_tarea_prioridades1');
            $table->dropForeign('fk_tareas_tarea_tipos1');
        });
    }
};
