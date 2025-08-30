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
        Schema::create('compra_producto', function (Blueprint $table) {
            $table->id();
            $table->foreignId('compra_id')->costrained('compras')->onDelete('cascade' );
            $table->foreignId('producto_id')->costrained('productos')->onDelete('cascade' );
            $table->integer('cantidad')->unsigned();
            $table->decimal('precio_compra',10,2);
            $table->integer('precio_venta',10,2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('compra_producto');
    }
};
