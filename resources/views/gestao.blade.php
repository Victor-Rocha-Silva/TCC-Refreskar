<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciamento de Clientes - Refreskar</title>
    <link rel="stylesheet" href="{{url('css/gestao.css')}}">
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
                        <li><a href="{{ url('/home') }}"><i class="ph-fill ph-house"></i> Início</a></li>
                        <li><a href="{{ url('/orcamentos') }}"><i class="ph-fill ph-receipt"></i> Orçamentos</a></li>
                        <li><a href="{{ url('/estoque') }}"><i class="ph-fill ph-package"></i> Estoque</a></li>
                        <li><a href="{{ url('/clientes') }}" class="active"><i class="ph-fill ph-users"></i>
                                Clientes</a></li>
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
                                <a href="#" title="Excluir"
                                    onclick="return confirm('Tem certeza que deseja excluir este cliente?')"><i
                                        class="ph-fill ph-trash"></i></a>
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
                                <a href="#" title="Excluir"
                                    onclick="return confirm('Tem certeza que deseja excluir este cliente?')"><i
                                        class="ph-fill ph-trash"></i></a>
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
                                <a href="#" title="Excluir"
                                    onclick="return confirm('Tem certeza que deseja excluir este cliente?')"><i
                                        class="ph-fill ph-trash"></i></a>
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