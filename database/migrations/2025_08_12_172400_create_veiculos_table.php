<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // ...
    public function up(): void
    {
        Schema::create('veiculos', function (Blueprint $table) {
            $table->id('ID_Veiculo');
            
            // Chave estrangeira para o cliente
            $table->foreignId('ID_Cliente')->constrained('clientes', 'ID_Cliente')->onDelete('cascade');
            
            $table->string('Placa', 10)->unique();
            $table->string('Modelo');
            $table->integer('Ano')->nullable();
            $table->string('Cor')->nullable();
            $table->integer('KM_Atual')->nullable();
            $table->timestamps();
        });
    }
    // ...

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('veiculos');
    }
};
