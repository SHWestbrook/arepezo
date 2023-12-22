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
        Schema::create('menus', function(Blueprint $table){
            $table->id();
            $table->string('nombre');
            $table->string('descripcion');
            $table->unsignedBigInteger('tipoAlimento_id')->nullable(); // La columna para la relación
            $table->unsignedBigInteger('categoriaMenu_id')->nullable(); // La columna para la relación
            $table->foreign('tipoAlimento_id')->references('id')->on('tipoalimentos');
            $table->foreign('categoriaMenu_id')->references('id')->on('categoriamenus');
            $table->decimal('precioVenta');
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
