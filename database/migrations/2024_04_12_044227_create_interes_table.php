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
        Schema::create('intereses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('prestamo_id');
            $table->date('periodo_interes');
            $table->decimal('monto_interes', 10, 2);
            $table->timestamps();

            $table->foreign('prestamo_id')->references('id')->on('prestamos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('interes');
    }
};
