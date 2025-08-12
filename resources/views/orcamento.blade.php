<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo Orçamento - Refreskar</title>
    
    <script src="https://unpkg.com/@phosphor-icons/web"></script>

    <style>
        /* --- ESTILOS GERAIS E DA APLICAÇÃO (Consistente com as outras telas) --- */
        :root {
            --cor-fundo: #f4f7fa;
            --cor-sidebar: #1e293b;
            --cor-sidebar-texto: #cbd5e1;
            --cor-sidebar-texto-hover: #ffffff;
            --cor-sidebar-link-ativo: #3b82f6;
            --cor-principal: #3b82f6;
            --cor-sucesso: #22c55e;
            --cor-texto-escuro: #0f172a;
            --cor-card-fundo: #ffffff;
            --cor-sombra: rgba(0, 0, 0, 0.05);
        }

        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; }
        body { background-color: var(--cor-fundo); }
        .dashboard-container { display: flex; min-height: 100vh; }

        /* --- SIDEBAR (Estilo idêntico ao do dashboard) --- */
        .sidebar { width: 260px; background-color: var(--cor-sidebar); color: var(--cor-sidebar-texto); padding: 20px; /* ... (estilos completos da sidebar) ... */ }
        .sidebar-header h1 { color: var(--cor-sidebar-texto-hover); text-align: center; font-weight: 700; letter-spacing: 1px; margin-bottom: 30px; }
        .sidebar-nav ul { list-style: none; }
        .sidebar-nav li a { display: flex; align-items: center; gap: 15px; padding: 15px; color: var(--cor-sidebar-texto); text-decoration: none; border-radius: 8px; margin-bottom: 5px; transition: all 0.3s ease; }
        .sidebar-nav li a i { font-size: 1.4em; }
        .sidebar-nav li a:hover { background-color: #334155; color: var(--cor-sidebar-texto-hover); }
        .sidebar-nav li a.active { background-color: var(--cor-sidebar-link-ativo); color: var(--cor-sidebar-texto-hover); font-weight: 600; }
        .sidebar-footer { margin-top: auto; }

        /* --- CONTEÚDO PRINCIPAL --- */
        .main-content { flex-grow: 1; padding: 30px; }
        .page-header { display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px; flex-wrap: wrap; gap: 15px; }
        .page-header h1 { font-size: 1.8em; color: var(--cor-texto-escuro); }
        
        .button { padding: 10px 18px; border-radius: 8px; text-decoration: none; font-weight: 600; display: inline-flex; align-items: center; gap: 8px; border: none; cursor: pointer; }
        .button-success { background-color: var(--cor-sucesso); color: white; }
        .button-secondary { background-color: #e2e8f0; color: #475569; }

        .form-card {
            background-color: var(--cor-card-fundo);
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 20px var(--cor-sombra);
            margin-bottom: 25px;
        }
        .form-card h2 { font-size: 1.4em; color: var(--cor-principal); border-bottom: 1px solid #e2e8f0; padding-bottom: 15px; margin-bottom: 25px; }

        .info-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 30px; }
        .info-block h3 { font-size: 1.1em; margin-bottom: 10px; }
        .info-block p { color: #475569; margin-bottom: 5px; }
        .info-block p strong { color: var(--cor-texto-escuro); }
        
        .form-group label { display: block; margin-bottom: 8px; font-weight: 600; color: #475569; }
        .form-group textarea { width: 100%; padding: 12px 15px; border-radius: 8px; border: 1px solid #e2e8f0; font-size: 1em; min-height: 80px; }

        /* Tabela de Itens */
        .items-table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        .items-table th, .items-table td { padding: 12px; text-align: left; border-bottom: 1px solid #e2e8f0; }
        .items-table thead { background-color: #f8fafc; }
        .items-table input { width: 100%; padding: 8px; border: 1px solid #e2e8f0; border-radius: 6px; }
        .items-table .col-desc { width: 40%; }
        .items-table .col-qtd, .items-table .col-valor { width: 15%; }
        .items-table .col-subtotal { width: 20%; }
        .items-table .col-acao { width: 5%; text-align: center; }

        .totals-section {
            width: 50%;
            margin-left: auto;
            margin-top: 20px;
        }
        .total-row { display: flex; justify-content: space-between; padding: 10px 0; font-size: 1.1em; }
        .total-row.grand-total { font-weight: bold; font-size: 1.4em; color: var(--cor-principal); border-top: 2px solid var(--cor-principal); margin-top: 10px; }
        .total-row input[name="desconto"] { width: 100px; text-align: right; border: 1px solid #e2e8f0; border-radius: 6px; padding: 5px; }

        @media (max-width: 768px) {
            .info-grid { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body>
    <div class="dashboard-container">
        <aside class="sidebar">
            <div>
                <div class="sidebar-header"><h1>REFRESKAR</h1></div>
                <nav class="sidebar-nav">
                    <ul>
                        <li><a href="#"><i class="ph-fill ph-house"></i> Início</a></li>
                        <li><a href="#" class="active"><i class="ph-fill ph-receipt"></i> Orçamentos</a></li>
                        <li><a href="#"><i class="ph-fill ph-package"></i> Estoque</a></li>
                        <li><a href="#"><i class="ph-fill ph-users"></i> Clientes</a></li>
                        <li><a href="#"><i class="ph-fill ph-truck"></i> Fornecedores</a></li>
                        <li><a href="#"><i class="ph-fill ph-chart-line"></i> Gestão</a></li>
                    </ul>
                </nav>
            </div>
            <div class="sidebar-footer">
                 <nav class="sidebar-nav"><ul><li><a href="#"><i class="ph-fill ph-sign-out"></i> Sair</a></li></ul></nav>
            </div>
        </aside>

        <main class="main-content">
            <header class="page-header">
                <h1>Novo Orçamento #ORC-0125</h1>
                <div class="actions">
                    <button class="button button-secondary"><i class="ph ph-floppy-disk"></i> Salvar Rascunho</button>
                    <button class="button button-success"><i class="ph ph-paper-plane-tilt"></i> Finalizar e Enviar</button>
                </div>
            </header>

            <form>
                <div class="form-card">
                    <div class="info-grid">
                        <div class="info-block">
                            <h3><i class="ph-fill ph-user"></i> Cliente</h3>
                            <p><strong>Nome:</strong> João da Silva</p>
                            <p><strong>CPF:</strong> 123.456.789-00</p>
                            <p><strong>Telefone:</strong> (15) 99876-5432</p>
                        </div>
                        <div class="info-block">
                            <h3><i class="ph-fill ph-car"></i> Veículo</h3>
                            <p><strong>Modelo:</strong> Chevrolet Onix 1.0</p>
                            <p><strong>Placa:</strong> BRA2E19</p>
                            <p><strong>Ano:</strong> 2019 / <strong>KM:</strong> 54.800</p>
                        </div>
                    </div>
                </div>

                <div class="form-card">
                    <h2><i class="ph-fill ph-wrench"></i> Diagnóstico e Itens do Orçamento</h2>
                    <div class="form-group">
                        <label for="diagnostico">Problema Relatado e Diagnóstico Técnico</label>
                        <textarea id="diagnostico" placeholder="Cliente relata que o ar parou de gelar. Verificado vazamento na mangueira do compressor..."></textarea>
                    </div>

                    <table class="items-table">
                        <thead>
                            <tr>
                                <th class="col-desc">Item / Descrição do Serviço</th>
                                <th class="col-qtd">Qtd.</th>
                                <th class="col-valor">Valor Unit.</th>
                                <th class="col-subtotal">Subtotal</th>
                                <th class="col-acao"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><input type="text" value="Carga de Gás R134a"></td>
                                <td><input type="number" value="1"></td>
                                <td><input type="text" value="250.00"></td>
                                <td>R$ 250,00</td>
                                <td><a href="#" title="Remover"><i class="ph-fill ph-trash"></i></a></td>
                            </tr>
                            <tr>
                                <td><input type="text" value="Filtro de Cabine (AKX-3531)"></td>
                                <td><input type="number" value="1"></td>
                                <td><input type="text" value="45.00"></td>
                                <td>R$ 45,00</td>
                                <td><a href="#" title="Remover"><i class="ph-fill ph-trash"></i></a></td>
                            </tr>
                             <tr>
                                <td><input type="text" value="Mão de Obra Técnica"></td>
                                <td><input type="number" value="1"></td>
                                <td><input type="text" value="150.00"></td>
                                <td>R$ 150,00</td>
                                <td><a href="#" title="Remover"><i class="ph-fill ph-trash"></i></a></td>
                            </tr>
                        </tbody>
                    </table>
                    <button type="button" class="button button-secondary" style="margin-top: 15px;"><i class="ph ph-plus"></i> Adicionar Item</button>
                </div>
                
                <div class="form-card">
                     <h2><i class="ph-fill ph-info"></i> Totais e Observações</h2>
                     <div class="info-grid">
                        <div class="form-group">
                            <label for="observacoes">Observações e Termos de Garantia</label>
                            <textarea id="observacoes" placeholder="Garantia de 90 dias sobre o serviço executado. Orçamento válido por 7 dias."></textarea>
                        </div>
                        <div class="totals-section">
                            <div class="total-row">
                                <span>Subtotal:</span>
                                <span>R$ 445,00</span>
                            </div>
                             <div class="total-row">
                                <label for="desconto">Desconto (R$):</label>
                                <input type="text" name="desconto" value="0.00">
                            </div>
                            <div class="total-row grand-total">
                                <span>Total Geral:</span>
                                <span>R$ 445,00</span>
                            </div>
                        </div>
                     </div>
                </div>
            </form>
        </main>
    </div>

</body>
</html>