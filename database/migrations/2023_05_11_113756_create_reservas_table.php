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
        Schema::create('reservas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_persona')->nullable();
            $table->text('detalles');
            $table->unsignedBigInteger('espacio_id');
            $table->foreign('espacio_id')->references('id')->on('espacios');
            $table->date('fecha');
            $table->time('hora_ini');
            $table->time('hora_fin');
            $table->unsignedBigInteger('co_id');
            $table->foreign('co_id')->references('id')->on('coworkers');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservas');
    }
};
