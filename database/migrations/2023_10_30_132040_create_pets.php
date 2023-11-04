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
        Schema::create('pets', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 55);
            $table->string('especie', 55);
            $table->string('raca', 55);
            $table->string('idade', 55);
            $table->string('peso', 55);
            $table->string('porte', 55);
            $table->string('local', 55);
            $table->string('sobre', 55);
            $table->string('sexo', 55);
            $table->boolean('status')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pets');
    }
};
