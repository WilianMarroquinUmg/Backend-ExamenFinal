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
        Schema::create('tareas', function (Blueprint $table) {
            $table->increments('id')->unique('id_unique');
            $table->string('nombre');
            $table->text('descripcion')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->unsignedInteger('fechas_id')->index('fk_tareas_fechas_idx');
            $table->unsignedInteger('tarea_estados_id')->index('fk_tareas_tarea_estados1_idx');
            $table->unsignedInteger('tarea_tipos_id')->index('fk_tareas_tarea_tipos1_idx');
            $table->unsignedInteger('tarea_prioridades_id')->index('fk_tareas_tarea_prioridades1_idx');

            $table->primary(['id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tareas');
    }
};
