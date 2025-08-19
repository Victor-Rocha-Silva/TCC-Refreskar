<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Refreskar</title>
    <link rel="stylesheet" href="{{url('css/home.css')}}">
    <script src="{{ url('js/home.js') }}"></script>
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
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
                        <li><a href="{{ url('/gestao') }}"><i class="ph-fill ph-chart-line"></i> Gestão/Financeiro</a>
                        </li>
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
</body>

</html>