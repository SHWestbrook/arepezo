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
        Schema::create('menu_pedido', function(Blueprint $table){
            $table->id();
            $table->unsignedBigInteger('menu_id')->nullable(); // La columna para la relación
            $table->unsignedBigInteger('pedido_id')->nullable(); // La columna para la relación
            $table->integer('cantidad');
            $table->decimal('precioVentaUnitario');
            $table->integer('iva');
            $table->timestamps();
            $table->foreign('menu_id')->references('id')->on('menus');
            $table->foreign('pedido_id')->references('id')->on('pedidos');
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
