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

        /* --- CONTEÚDO PRINCIPAL (Estilo da página de Orçamento) --- */
        .main-content { flex-grow: 1; padding: 30px; overflow-y: auto; }
        .main-content .page-header { display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px; }
        .main-content h1 { font-size: 1.8em; color: var(--cor-texto-escuro); }
        
        .button {
            padding: 12px 20px; border-radius: 8px; text-decoration: none; font-weight: 600; display: inline-flex; align-items: center; gap: 8px; border: none; cursor: pointer;
        }
        .button-primary { background-color: var(--cor-principal); color: white; }
        .button-success { background-color: var(--cor-sucesso); color: white; }
        .button-danger { background-color: var(--cor-perigo); color: white; }
        
        /* --- ESTILO DO FLUXO "WIZARD" --- */
        .wizard-container {
            max-width: 800px;
            margin: 20px auto;
            background-color: var(--cor-card-fundo);
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 4px 20px var(--cor-sombra);
        }
        
        .wizard-step h2 {
            display: flex;
            align-items: center;
            gap: 15px;
            color: var(--cor-texto-escuro);
            margin-bottom: 30px;
        }

        .step-number {
            background-color: var(--cor-principal);
            color: white;
            border-radius: 50%;
            width: 35px;
            height: 35px;
            display: inline-flex;
            justify-content: center;
            align-items: center;
            font-size: 1.2em;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: #475569;
        }

        .form-group input, .form-group textarea {
            width: 100%;
            padding: 12px 15px;
            border-radius: 8px;
            border: 1px solid #e2e8f0;
            font-size: 1em;
        }
        
        .form-group input[name="placa"] {
            text-transform: uppercase;
            font-size: 1.5em;
            text-align: center;
            letter-spacing: 5px;
            font-weight: bold;
        }
        
        .actions-center {
            text-align: center;
            margin-top: 20px;
        }
        
        /* Estilo para os resultados da busca */
        .results-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            margin-bottom: 30px;
        }
        .result-card {
            background-color: var(--cor-fundo);
            padding: 20px;
            border-radius: 8px;
        }
        .result-card h3 { color: var(--cor-principal); margin-bottom: 10px; }
        .result-card p { margin: 5px 0; }
        
        /* Esconde os passos por padrão (em um app real, o JS controlaria isso) */
        /* .wizard-step { display: none; } */
        /* .wizard-step.active { display: block; } */

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
                        <li><a href="{{ url('/orcamentos') }}" class="active"><i class="ph-fill ph-receipt"></i> Orçamentos</a></li>
                        <li><a href="{{ url('/estoque') }}"><i class="ph-fill ph-package"></i> Estoque</a></li>
                        <li><a href="{{ url('/clientes') }}"><i class="ph-fill ph-users"></i> Clientes</a></li>
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
                <h1>Novo Orçamento</h1>
                <a href="{{ url('/orcamentos') }}" class="button button-danger"><i class="ph ph-x"></i> Cancelar</a>
            </div>

            <div class="wizard-container">
                <div class="wizard-step active" id="step1">
                    <h2><span class="step-number">1</span>Identificação do Veículo</h2>
                    <div class="form-group">
                        <label for="placa">Digite a Placa do Veículo</label>
                        <input type="text" id="placa" name="placa" placeholder="ABC-1D23">
                    </div>
                    <div class="actions-center">
                        <button class="button button-primary"><i class="ph ph-magnifying-glass"></i> Consultar</button>
                    </div>
                    <div style="text-align: center; margin-top: 20px;">
                        <a href="{{ url('/clientes/buscar') }}">Não sabe a placa? Buscar cliente por nome</a>
                    </div>
                </div>

                </div>

                    <div class="actions-center">
                        <button class="button button-primary"><i class="ph ph-floppy-disk"></i> Salvar Orçamento</button>
                    </div>
                </div>
                -->
            </div>
        </main>
    </div>
</body>
</html>