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
        Schema::create('pedidos', function(Blueprint $table){
            $table->id();
            $table->dateTime('fechaPedido');
            $table->decimal('total');
            $table->decimal('gastoEnvio');
            $table->decimal('subtotal');
            $table->string('telefono');
            $table->string('direccion');
            $table->integer('codPostal');
            $table->string('Ciudad');
            $table->unsignedBigInteger('usuarios_id')->nullable(); // La columna para la relación
            $table->foreign('usuarios_id')->references('id')->on('usuarios');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('pedidos');
    }
};
