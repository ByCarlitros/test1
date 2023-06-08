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
            $table->date('fecha');
            $table->time('hora');
            $table->text('comentario');

            $table->integer('id_profesor');
            $table->integer('id_propuesta');

            $table->foreign('id_profesor')->references('id')->on('profesores');
            $table->foreign('id_propuesta')->references('id')->on('propuestas');

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
