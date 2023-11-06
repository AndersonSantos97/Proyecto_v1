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
        Schema::create('paciente', function (Blueprint $table) {
            $table->id();
            $table->int('dni',15);
            $table ->string('primer_nombre',25);
            $table->string('segundo_nombre',25);
            $table->string('primer apellido',25);
            $table->string('segundo_apellido',25);
            $table->string('direccion',50);
            $table->date('fecha_nacimiento');
            $table->string('estad_civil',2);
            $table->string('sexo',2);
            $table->string('email',15);
            $table->string('telefono',10);
            $table->string('usuario',10);
            $table->string('contraseña',10);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paciente');
    }
};
