<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo Orçamento - Refreskar</title>
    <link rel="stylesheet" href="{{url('css/orcamento.css')}}">
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
                        <li><a href="{{ url('home') }}"><i class="ph-fill ph-house"></i> Início</a></li>
                        <li><a href="{{ url('orcamentos') }}"><i class="ph-fill ph-receipt"></i> Orçamentos</a></li>
                        <li><a href="{{ url('estoque') }}" class="active"><i class="ph-fill ph-package"></i> Estoque</a></li>
                        <li><a href="{{ url('clientes') }}"><i class="ph-fill ph-users"></i>Clientes</a></li>
                        <li><a href="{{ url('fornecedores') }}"><i class="ph-fill ph-truck"></i> Fornecedores</a></li>
                        <li><a href="{{ url('gestao') }}"><i class="ph-fill ph-chart-line"></i> Gestão/Financeiro</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="sidebar-footer">
                <nav class="sidebar-nav">
                    <ul>
                        <li><a href="#"><i class="ph-fill ph-sign-out"></i> Sair</a></li>
                    </ul>
                </nav>
            </div>
        </aside>

        <main class="main-content">
            <header class="page-header">
                <h1>Novo Orçamento #ORC-0125</h1>
                <div class="actions">
                    <button class="button button-secondary"><i class="ph ph-floppy-disk"></i> Salvar Rascunho</button>
                    <button class="button button-success"><i class="ph ph-paper-plane-tilt"></i> Finalizar e
                        Enviar</button>
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
                        <textarea id="diagnostico"
                            placeholder="Cliente relata que o ar parou de gelar. Verificado vazamento na mangueira do compressor..."></textarea>
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
                    <button type="button" class="button button-secondary" style="margin-top: 15px;"><i
                            class="ph ph-plus"></i> Adicionar Item</button>
                </div>

                <div class="form-card">
                    <h2><i class="ph-fill ph-info"></i> Totais e Observações</h2>
                    <div class="info-grid">
                        <div class="form-group">
                            <label for="observacoes">Observações e Termos de Garantia</label>
                            <textarea id="observacoes"
                                placeholder="Garantia de 90 dias sobre o serviço executado. Orçamento válido por 7 dias."></textarea>
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