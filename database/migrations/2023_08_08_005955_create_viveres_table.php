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
        Schema::create('viveres', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->decimal('cantidad', 10, 2); // Decimal con 10 dígitos y 2 decimales
            $table->string('unidad_medida'); // Puede ser kilos, litros, etc. 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('viveres');
    }
};
