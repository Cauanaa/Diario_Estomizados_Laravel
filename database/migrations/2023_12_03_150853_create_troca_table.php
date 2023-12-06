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
        Schema::create('troca', function (Blueprint $table) {
            $table->id();
            $table->string('aplicada');
            $table->date('removida');
            $table->string('motivo')->nullable();
            $table->string('condicoes')->nullable();
            $table->string('notas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('troca');
    }
};