<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciamento de Estoque - Refreskar</title>
    <link rel="stylesheet" href="{{url('css/estoque.css')}}">
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
                        <li><a href="{{ url('/estoque') }}" class="active"><i class="ph-fill ph-package"></i>
                                Estoque</a></li>
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
            <h1>Gerenciamento de Estoque</h1>

            <div class="actions-bar">
                <div class="search-container">
                    <i class="ph ph-magnifying-glass"></i>
                    <input type="search" placeholder="Buscar por nome ou SKU...">
                </div>
                <select name="categoria">
                    <option value="">Todas as Categorias</option>
                    <option value="filtros">Filtros</option>
                    <option value="compressores">Compressores</option>
                    <option value="sensores">Sensores</option>
                </select>
                <a href="{{ url('/estoque/novo') }}" class="button-primary">
                    <i class="ph-fill ph-plus-circle"></i>
                    Adicionar Produto
                </a>
            </div>

            <div class="results-container">
                <table>
                    <thead>
                        <tr>
                            <th>Produto</th>
                            <th>Categoria</th>
                            <th>Fornecedor</th>
                            <th>Custo</th>
                            <th>Venda</th>
                            <th>Qtd.</th>
                            <th>Status</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="product-cell">
                                    <img src="https://i.imgur.com/example-thermostat.png" alt="Termostato">
                                    <div class="product-info">
                                        <strong>Termostato Eletrônico</strong>
                                        <span>SKU: REF-TER-001</span>
                                    </div>
                                </div>
                            </td>
                            <td>Sensores</td>
                            <td>ACME Peças</td>
                            <td>R$ 45,50</td>
                            <td>R$ 99,90</td>
                            <td><strong>20</strong></td>
                            <td><span class="status-tag status-ok">Em Estoque</span></td>
                            <td class="action-buttons">
                                <a href="#" title="Editar"><i class="ph-fill ph-pencil-simple"></i></a>
                                <a href="#" title="Ver Histórico"><i class="ph-fill ph-clock-counter-clockwise"></i></a>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <div class="product-cell">
                                    <img src="https://i.imgur.com/example-filter.png" alt="Filtro de Ar">
                                    <div class="product-info">
                                        <strong>Filtro de Cabine</strong>
                                        <span>SKU: REF-FIL-004</span>
                                    </div>
                                </div>
                            </td>
                            <td>Filtros</td>
                            <td>Filtros Brasil</td>
                            <td>R$ 18,00</td>
                            <td>R$ 45,00</td>
                            <td><strong>8</strong></td>
                            <td><span class="status-tag status-low">Estoque Baixo</span></td>
                            <td class="action-buttons">
                                <a href="#" title="Editar"><i class="ph-fill ph-pencil-simple"></i></a>
                                <a href="#" title="Ver Histórico"><i class="ph-fill ph-clock-counter-clockwise"></i></a>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <div class="product-cell">
                                    <img src="https://i.imgur.com/example-compressor.png" alt="Compressor">
                                    <div class="product-info">
                                        <strong>Compressor ZEXEL</strong>
                                        <span>SKU: REF-COM-002</span>
                                    </div>
                                </div>
                            </td>
                            <td>Compressores</td>
                            <td>Import Parts</td>
                            <td>R$ 850,00</td>
                            <td>R$ 1.490,00</td>
                            <td><strong>0</strong></td>
                            <td><span class="status-tag status-out">Fora de Estoque</span></td>
                            <td class="action-buttons">
                                <a href="#" title="Editar"><i class="ph-fill ph-pencil-simple"></i></a>
                                <a href="#" title="Ver Histórico"><i class="ph-fill ph-clock-counter-clockwise"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="pagination">
                <a href="#" class="active">1</a>
                <a href="#">2</a>
                <a href="#">3</a>
            </div>
        </main>
    </div>
</body>

</html>