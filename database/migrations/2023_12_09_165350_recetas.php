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
        Schema::create('recetas', function (Blueprint $table){
            $table->id();
            $table->unsignedBigInteger('menu_id')->nullable(); // La columna para la relación
            $table->unsignedBigInteger('ingrediente_id')->nullable(); // La columna para la relación
            $table->decimal('cantidadKg');
            $table->foreign('menu_id')->references('id')->on('menus');
            $table->foreign('ingrediente_id')->references('id')->on('ingredientes');
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
