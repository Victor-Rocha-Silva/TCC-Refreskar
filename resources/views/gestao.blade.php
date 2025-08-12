<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciamento de Clientes - Refreskar</title>
    
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

        /* --- CONTEÚDO PRINCIPAL (Estilo da página de Clientes) --- */
        .main-content { flex-grow: 1; padding: 30px; overflow-y: auto; }
        .main-content h1 { font-size: 1.8em; color: var(--cor-texto-escuro); margin-bottom: 20px; }
        
        /* --- BARRA DE AÇÕES (Similar à de Estoque) --- */
        .actions-bar { display: flex; gap: 15px; align-items: center; margin-bottom: 20px; flex-wrap: wrap; }
        .search-container { flex-grow: 1; position: relative; }
        .search-container input { width: 100%; padding: 12px 15px 12px 40px; border-radius: 8px; border: 1px solid #e2e8f0; font-size: 1em; }
        .search-container i { position: absolute; left: 15px; top: 50%; transform: translateY(-50%); color: #94a3b8; }
        .button-primary { background-color: var(--cor-principal); color: white; padding: 12px 20px; border-radius: 8px; text-decoration: none; font-weight: 600; display: inline-flex; align-items: center; gap: 8px; }
        
        /* --- TABELA DE CLIENTES --- */
        .results-container { background-color: white; border-radius: 12px; box-shadow: 0 4px 15px var(--cor-sombra); overflow-x: auto; }
        table { width: 100%; border-collapse: collapse; }
        th, td { padding: 15px; text-align: left; border-bottom: 1px solid #e2e8f0; }
        thead { background-color: #f8fafc; }
        th { font-size: 0.9em; color: #64748b; text-transform: uppercase; }
        tbody tr:hover { background-color: var(--cor-fundo); }
        
        .client-info strong { display: block; color: var(--cor-texto-escuro); }
        .client-info span { font-size: 0.9em; color: #64748b; }
        
        /* --- BOTÕES DE AÇÃO NA TABELA --- */
        .action-buttons a { color: #64748b; text-decoration: none; margin: 0 8px; font-size: 1.2em; }
        .action-buttons a:hover { color: var(--cor-principal); }
        
        /* --- PAGINAÇÃO --- */
        .pagination { display: flex; justify-content: flex-end; padding: 20px; }
        .pagination a { color: var(--cor-principal); padding: 8px 12px; margin: 0 2px; text-decoration: none; border-radius: 6px; }
        .pagination a.active, .pagination a:hover { background-color: var(--cor-principal); color: white; }
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
            <h1>Gerenciamento de Clientes</h1>

            <div class="actions-bar">
                <div class="search-container">
                    <i class="ph ph-magnifying-glass"></i>
                    <input type="search" placeholder="Buscar por nome, CPF ou placa do veículo...">
                </div>
                <a href="{{ url('/cadastrocliente') }}" class="button-primary">
                    <i class="ph-fill ph-user-plus"></i>
                    Cadastrar Cliente
                </a>
            </div>

            <div class="results-container">
                <table>
                    <thead>
                        <tr>
                            <th>Cliente</th>
                            <th>CPF/CNPJ</th>
                            <th>Telefone</th>
                            <th>Último Serviço</th>
                            <th>Veículos</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="client-info">
                                    <strong>João da Silva</strong>
                                    <span>joao.silva@email.com</span>
                                </div>
                            </td>
                            <td>123.456.789-00</td>
                            <td>(15) 99876-5432</td>
                            <td>10/08/2025</td>
                            <td>1 veículo</td>
                            <td class="action-buttons">
                                <a href="#" title="Ver Detalhes"><i class="ph-fill ph-eye"></i></a>
                                <a href="#" title="Editar"><i class="ph-fill ph-pencil-simple"></i></a>
                                <a href="#" title="Excluir" onclick="return confirm('Tem certeza que deseja excluir este cliente?')"><i class="ph-fill ph-trash"></i></a>
                            </td>
                        </tr>
                        
                        <tr>
                            <td>
                                <div class="client-info">
                                    <strong>Transportadora Veloz Ltda</strong>
                                    <span>contato@transportadoraveloz.com.br</span>
                                </div>
                            </td>
                            <td>12.345.678/0001-99</td>
                            <td>(15) 3222-1111</td>
                            <td>01/07/2025</td>
                            <td>8 veículos</td>
                            <td class="action-buttons">
                                <a href="#" title="Ver Detalhes"><i class="ph-fill ph-eye"></i></a>
                                <a href="#" title="Editar"><i class="ph-fill ph-pencil-simple"></i></a>
                                <a href="#" title="Excluir" onclick="return confirm('Tem certeza que deseja excluir este cliente?')"><i class="ph-fill ph-trash"></i></a>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <div class="client-info">
                                    <strong>Maria Oliveira</strong>
                                    <span>maria.o@email.com</span>
                                </div>
                            </td>
                            <td>987.654.321-00</td>
                            <td>(15) 98123-4567</td>
                            <td>25/06/2025</td>
                            <td>2 veículos</td>
                            <td class="action-buttons">
                                <a href="#" title="Ver Detalhes"><i class="ph-fill ph-eye"></i></a>
                                <a href="#" title="Editar"><i class="ph-fill ph-pencil-simple"></i></a>
                                <a href="#" title="Excluir" onclick="return confirm('Tem certeza que deseja excluir este cliente?')"><i class="ph-fill ph-trash"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="pagination">
                <a href="#" class="active">1</a>
                <a href="#">2</a>
            </div>
        </main>
    </div>
</body>
</html>