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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id('ID_Cliente'); // Renomeia o id padrão
            $table->string('NomeCliente');
            $table->string('CPF_CNPJ')->unique()->nullable();
            $table->string('Email')->nullable();
            $table->string('Telefone');
            $table->text('Endereco')->nullable();
            $table->timestamps(); // Cria as colunas created_at e updated_at
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
