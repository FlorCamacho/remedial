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
        Schema::create('prestamos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cliente_id');
            $table->decimal('monto_prestamo', 10, 2);
            $table->date('fecha_solicitud');
            $table->decimal('tasa_interes', 5, 2)->default(2.5);
            $table->decimal('saldo_actual', 10, 2);
            $table->enum('estado', ['activo', 'pagado', 'cancelado'])->default('activo');
            $table->timestamps();

            $table->foreign('cliente_id')->references('id')->on('clientes');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prestamos');
    }
};
