<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Refreskar</title>
    
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    
    <style>
        :root {
            --cor-fundo: #f4f7fa;
            --cor-sidebar: #1e293b;
            --cor-sidebar-texto: #cbd5e1;
            --cor-sidebar-texto-hover: #ffffff;
            --cor-sidebar-link-ativo: #3b82f6;
            --cor-principal: #3b82f6;
            --cor-texto-escuro: #0f172a;
            --cor-card-fundo: #ffffff;
            --cor-sombra: rgba(0, 0, 0, 0.05);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: var(--cor-fundo);
        }

        .dashboard-container {
            display: flex;
            min-height: 100vh;
        }

        /* --- BARRA LATERAL (SIDEBAR) --- */
        .sidebar {
            width: 260px;
            background-color: var(--cor-sidebar);
            color: var(--cor-sidebar-texto);
            padding: 20px;
            display: flex;
            flex-direction: column;
            transition: width 0.3s ease;
        }

        .sidebar-header h1 {
            color: var(--cor-sidebar-texto-hover);
            text-align: center;
            font-weight: 700;
            letter-spacing: 1px;
            margin-bottom: 30px;
        }

        .sidebar-nav ul {
            list-style: none;
        }

        .sidebar-nav li a {
            display: flex;
            align-items: center;
            gap: 15px;
            padding: 15px;
            color: var(--cor-sidebar-texto);
            text-decoration: none;
            border-radius: 8px;
            margin-bottom: 5px;
            transition: all 0.3s ease;
        }

        .sidebar-nav li a i {
            font-size: 1.4em;
        }

        .sidebar-nav li a:hover {
            background-color: #334155;
            color: var(--cor-sidebar-texto-hover);
        }

        .sidebar-nav li a.active {
            background-color: var(--cor-sidebar-link-ativo);
            color: var(--cor-sidebar-texto-hover);
            font-weight: 600;
        }
        
        .sidebar-footer {
            margin-top: auto;
        }

        /* --- CONTEÚDO PRINCIPAL --- */
        .main-content {
            flex-grow: 1;
            padding: 30px;
            overflow-y: auto;
        }

        .main-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
        }

        .main-header h2 {
            color: var(--cor-texto-escuro);
            font-size: 1.8em;
        }

        #current-time {
            font-size: 1em;
            color: #64748b;
        }

        /* --- CARTÕES DE ESTATÍSTICAS --- */
        .stats-cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 20px;
            margin-bottom: 40px;
        }

        .card {
            background-color: var(--cor-card-fundo);
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 4px 15px var(--cor-sombra);
            display: flex;
            align-items: center;
            gap: 20px;
        }
        
        .card i {
            font-size: 2.5em;
            color: var(--cor-principal);
            background-color: #e0e7ff;
            padding: 12px;
            border-radius: 50%;
        }

        .card-info .stat-number {
            font-size: 2em;
            font-weight: 700;
            color: var(--cor-texto-escuro);
            display: block;
        }

        .card-info .stat-label {
            color: #64748b;
        }
        
        /* --- SEÇÃO DE AÇÕES RÁPIDAS --- */
        .quick-actions h3 {
            color: var(--cor-texto-escuro);
            font-size: 1.4em;
            margin-bottom: 20px;
        }
        
        .actions-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }
        
        .action-button {
            background-color: var(--cor-card-fundo);
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 4px 15px var(--cor-sombra);
            text-decoration: none;
            color: var(--cor-texto-escuro);
            display: flex;
            align-items: center;
            gap: 20px;
            transition: all 0.3s ease;
        }
        
        .action-button:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0,0,0,0.08);
            color: var(--cor-principal);
        }
        
        .action-button i {
            font-size: 2.2em;
            color: var(--cor-principal);
        }
        
        .action-button-info h4 {
            font-size: 1.2em;
            margin-bottom: 5px;
        }

        .action-button-info p {
            font-size: 0.9em;
            color: #64748b;
        }

        /* --- AJUSTES PARA CELULAR --- */
        @media (max-width: 768px) {
            .dashboard-container {
                flex-direction: column;
            }
            .sidebar {
                width: 100%;
                height: auto;
                flex-direction: row;
                justify-content: space-between;
                align-items: center;
            }
            .sidebar-nav { display: none; } /* Oculta a navegação principal, idealmente seria um menu hamburguer */
            .main-content { padding: 20px; }
            .main-header { flex-direction: column; align-items: flex-start; gap: 10px; }
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
                        <li><a href="{{ url('/home') }}" class="active"><i class="ph-fill ph-house"></i> Início</a></li>
                        <li><a href="{{ url('/orcamentos') }}"><i class="ph-fill ph-receipt"></i> Orçamentos</a></li>
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
            <header class="main-header">
                <div>
                    <h2>Bem-vindo, Usuário!</h2>
                    <p style="color: #64748b;">Este é o resumo da sua oficina hoje.</p>
                </div>
                <div id="current-time"></div>
            </header>

            <section class="stats-cards">
                <div class="card">
                    <i class="ph-fill ph-receipt"></i>
                    <div class="card-info">
                        <span class="stat-number">8</span>
                        <span class="stat-label">Orçamentos Pendentes</span>
                    </div>
                </div>
                <div class="card">
                    <i class="ph-fill ph-package"></i>
                    <div class="card-info">
                        <span class="stat-number">12</span>
                        <span class="stat-label">Itens com Estoque Baixo</span>
                    </div>
                </div>
                <div class="card">
                    <i class="ph-fill ph-warning-circle"></i>
                    <div class="card-info">
                        <span class="stat-number">3</span>
                        <span class="stat-label">Contas a Pagar Hoje</span>
                    </div>
                </div>
                <div class="card">
                    <i class="ph-fill ph-users"></i>
                    <div class="card-info">
                        <span class="stat-number">25</span>
                        <span class="stat-label">Novos Clientes no Mês</span>
                    </div>
                </div>
            </section>
            
            <section class="quick-actions">
                <h3>Ações Rápidas</h3>
                <div class="actions-grid">
                    <a href="{{ url('/orcamento/novo') }}" class="action-button">
                        <i class="ph-fill ph-plus-circle"></i>
                        <div class="action-button-info">
                            <h4>Novo Orçamento</h4>
                            <p>Crie um novo orçamento para um cliente.</p>
                        </div>
                    </a>
                    <a href="{{ url('/cadastrocliente') }}" class="action-button">
                        <i class="ph-fill ph-user-plus"></i>
                        <div class="action-button-info">
                            <h4>Cadastrar Cliente</h4>
                            <p>Adicione um novo cliente ao sistema.</p>
                        </div>
                    </a>
                    <a href="{{ url('/consultadeplaca') }}" class="action-button">
                        <i class="ph-fill ph-car"></i>
                        <div class="action-button-info">
                            <h4>Consultar Placa</h4>
                            <p>Busque o histórico de um veículo pela placa.</p>
                        </div>
                    </a>
                    <a href="{{ url('/vendas/nova') }}" class="action-button">
                        <i class="ph-fill ph-shopping-cart-simple"></i>
                        <div class="action-button-info">
                            <h4>Registrar Venda</h4>
                            <p>Lance uma nova venda de produto ou serviço.</p>
                        </div>
                    </a>
                </div>
            </section>
        </main>
    </div>

    <script>
        // Script para exibir a data e hora atual
        document.addEventListener('DOMContentLoaded', function() {
            const timeElement = document.getElementById('current-time');

            function updateTime() {
                const now = new Date();
                const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
                const formattedDate = now.toLocaleDateString('pt-BR', options);
                timeElement.textContent = formattedDate;
            }

            updateTime();
        });
    </script>
</body>
</html>