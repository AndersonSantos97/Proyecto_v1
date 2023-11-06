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
        Schema::create('receta', function (Blueprint $table) {
            $table->integer('numero');
            $table->integer('secuencial');
            $table->string('medicamento');
            $table->string('dosis',50);
            $table->string('periodicidad',50);
            $table->string('medico_receta');
            $table->string('paciente_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('receta');
    }
};
