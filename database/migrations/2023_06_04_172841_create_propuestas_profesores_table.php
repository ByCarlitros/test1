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
        Schema::create('propuestas_profesores', function (Blueprint $table) {
            $table->Integer('propuesta_id')->primary();
            $table->Integer('profesor_id')->primary();
            $table->date('fecha');
            $table->time('hora');
            $table->text('comentario');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('propuestas_profesores');
    }
};
