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
        Schema::create('orcamentos', function (Blueprint $table) {
            $table->id('ID_Orcamento');
            $table->foreignId('ID_Cliente')->constrained('clientes', 'ID_Cliente');
            $table->foreignId('ID_Veiculo')->constrained('veiculos', 'ID_Veiculo');
            $table->foreignId('ID_Usuario')->constrained('users', 'id'); // Tabela padrão do Laravel
            $table->dateTime('DataOrcamento')->useCurrent();
            $table->date('DataValidade')->nullable();
            $table->enum('Status', ['Pendente', 'Aprovado', 'Rejeitado', 'Cancelado', 'Concluído'])->default('Pendente');
            $table->text('ProblemaRelatado')->nullable();
            $table->text('DiagnosticoTecnico')->nullable();
            $table->text('Observacoes')->nullable();
            $table->decimal('Subtotal', 10, 2)->default(0);
            $table->decimal('Desconto', 10, 2)->default(0);
            $table->decimal('ValorTotal', 10, 2)->default(0);
            $table->timestamps();
        });
    }
    // ...

    /**1
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orcamentos');
    }
};
