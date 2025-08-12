<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Cliente - Refreskar</title>
    
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
            --cor-perigo: #ef4444;
            --cor-texto-escuro: #0f172a;
            --cor-card-fundo: #ffffff;
            --cor-sombra: rgba(0, 0, 0, 0.05);
        }

        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; }
        body { background-color: var(--cor-fundo); }
        .dashboard-container { display: flex; min-height: 100vh; }

        /* --- SIDEBAR (Estilo idêntico ao do dashboard) --- */
        .sidebar { width: 260px; background-color: var(--cor-sidebar); color: var(--cor-sidebar-texto); padding: 20px; display: flex; flex-direction: column; }
        .sidebar-header h1 { color: var(--cor-sidebar-texto-hover); text-align: center; font-weight: 700; letter-spacing: 1px; margin-bottom: 30px; }
        .sidebar-nav ul { list-style: none; }
        .sidebar-nav li a { display: flex; align-items: center; gap: 15px; padding: 15px; color: var(--cor-sidebar-texto); text-decoration: none; border-radius: 8px; margin-bottom: 5px; transition: all 0.3s ease; }
        .sidebar-nav li a i { font-size: 1.4em; }
        .sidebar-nav li a:hover { background-color: #334155; color: var(--cor-sidebar-texto-hover); }
        .sidebar-nav li a.active { background-color: var(--cor-sidebar-link-ativo); color: var(--cor-sidebar-texto-hover); font-weight: 600; }
        .sidebar-footer { margin-top: auto; }

        /* --- CONTEÚDO PRINCIPAL (Estilo da página de Cadastro) --- */
        .main-content { flex-grow: 1; padding: 30px; overflow-y: auto; }
        .page-header { display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px; flex-wrap: wrap; }
        .page-header h1 { font-size: 1.8em; color: var(--cor-texto-escuro); }
        
        .button { padding: 12px 20px; border-radius: 8px; text-decoration: none; font-weight: 600; display: inline-flex; align-items: center; gap: 8px; border: none; cursor: pointer; }
        .button-success { background-color: var(--cor-sucesso); color: white; }
        .button-danger { background-color: var(--cor-perigo); color: white; }
        .button-secondary { background-color: #e2e8f0; color: #475569; border: 1px dashed #cbd5e1; }

        /* --- ESTILO DO FORMULÁRIO --- */
        .form-container { max-width: 900px; margin: 0 auto; }
        .form-card {
            background-color: var(--cor-card-fundo);
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 20px var(--cor-sombra);
            margin-bottom: 25px;
        }
        .form-card h2 {
            font-size: 1.4em;
            color: var(--cor-principal);
            border-bottom: 1px solid #e2e8f0;
            padding-bottom: 15px;
            margin-bottom: 25px;
        }

        .form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        .form-group { margin-bottom: 15px; }
        .form-group.full-width { grid-column: 1 / -1; }
        .form-group label { display: block; margin-bottom: 8px; font-weight: 600; color: #475569; }
        .form-group input { width: 100%; padding: 12px 15px; border-radius: 8px; border: 1px solid #e2e8f0; font-size: 1em; }

        /* Seção de Veículos */
        .vehicle-entry {
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 15px;
            position: relative;
        }
        .vehicle-entry h3 { margin-bottom: 15px; }
        .vehicle-actions { position: absolute; top: 15px; right: 15px; }
        .vehicle-actions a { color: #64748b; margin-left: 10px; font-size: 1.2em; }
        .vehicle-actions a:hover { color: var(--cor-perigo); }

        .form-actions { text-align: right; }

        @media (max-width: 768px) {
            .form-grid { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body>
    <div class="dashboard-container">
        <aside class="sidebar">
            <div>
                <div class="sidebar-header">
                    <h1>REFRESKAR</h1>
                </div>
                <nav class="sidebar-nav">
                    <ul>
                        <li><a href="{{ url('/home') }}"><i class="ph-fill ph-house"></i> Início</a></li>
                        <li><a href="{{ url('/orcamentos') }}"><i class="ph-fill ph-receipt"></i> Orçamentos</a></li>
                        <li><a href="{{ url('/estoque') }}"><i class="ph-fill ph-package"></i> Estoque</a></li>
                        <li><a href="{{ url('/clientes') }}" class="active"><i class="ph-fill ph-users"></i> Clientes</a></li>
                        <li><a href="{{ url('/fornecedores') }}"><i class="ph-fill ph-truck"></i> Fornecedores</a></li>
                        <li><a href="{{ url('/gestao') }}"><i class="ph-fill ph-chart-line"></i> Gestão/Financeiro</a></li>
                    </ul>
                </nav>
            </div>
            <div class="sidebar-footer">
                 <nav class="sidebar-nav">
                    <ul>
                        <li><a href="{{ url('/logout') }}"><i class="ph-fill ph-sign-out"></i> Sair</a></li>
                    </ul>
                 </nav>
            </div>
        </aside>

        <main class="main-content">
            <div class="page-header">
                <h1>Cadastro de Novo Cliente</h1>
                <a href="{{ url('/clientes') }}" class="button button-danger"><i class="ph ph-x"></i> Cancelar Cadastro</a>
            </div>

            <form class="form-container">
                <div class="form-card">
                    <h2><i class="ph-fill ph-user-circle"></i> Dados Pessoais</h2>
                    <div class="form-grid">
                        <div class="form-group full-width">
                            <label for="nome">Nome Completo*</label>
                            <input type="text" id="nome" name="nome" required>
                        </div>
                        <div class="form-group">
                            <label for="cpf_cnpj">CPF ou CNPJ</label>
                            <input type="text" id="cpf_cnpj" name="cpf_cnpj">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email">
                        </div>
                        <div class="form-group">
                            <label for="telefone">Telefone / WhatsApp*</label>
                            <input type="tel" id="telefone" name="telefone" required>
                        </div>
                        <div class="form-group">
                            <label for="endereco">Endereço</label>
                            <input type="text" id="endereco" name="endereco" placeholder="Rua, Número, Bairro - Tatuí, SP">
                        </div>
                    </div>
                </div>

                <div class="form-card">
                    <h2><i class="ph-fill ph-car"></i> Veículos do Cliente</h2>
                    
                    <div class="vehicle-entry">
                        <h3><i class="ph ph-car-profile"></i> Chevrolet Onix</h3>
                        <div class="vehicle-actions">
                             <a href="#" title="Editar Veículo"><i class="ph-fill ph-pencil-simple"></i></a>
                             <a href="#" title="Remover Veículo"><i class="ph-fill ph-trash"></i></a>
                        </div>
                        <div class="form-grid">
                            <div class="form-group">
                                <label>Placa*</label>
                                <input type="text" value="BRA2E19" readonly>
                            </div>
                            <div class="form-group">
                                <label>Ano</label>
                                <input type="text" value="2019" readonly>
                            </div>
                             <div class="form-group">
                                <label>Cor</label>
                                <input type="text" value="Prata" readonly>
                            </div>
                             <div class="form-group">
                                <label>KM Atual</label>
                                <input type="text" value="54.800" readonly>
                            </div>
                        </div>
                    </div>

                    <button type="button" class="button button-secondary" style="width: 100%;">
                        <i class="ph-fill ph-plus-circle"></i> Adicionar Outro Veículo
                    </button>
                </div>

                <div class="form-actions">
                    <button type="submit" class="button button-success">
                        <i class="ph ph-check-circle"></i> Salvar Cliente
                    </button>
                </div>
            </form>
        </main>
    </div>
</body>
</html>