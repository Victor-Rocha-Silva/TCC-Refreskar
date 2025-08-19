<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Cliente - Refreskar</title>
    <link rel="stylesheet" href="{{url('css/cadastrocliente.css')}}">
    <script src="https://unpkg.com/@phosphor-icons/web"></script>

    <style>

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
                        <li><a href="{{ url('home') }}"><i class="ph-fill ph-house"></i> Início</a></li>
                        <li><a href="{{ url('orcamentos') }}"><i class="ph-fill ph-receipt"></i> Orçamentos</a></li>
                        <li><a href="{{ url('estoque') }}"><i class="ph-fill ph-package"></i> Estoque</a></li>
                        <li><a href="{{ url('clientes') }}" class="active"><i class="ph-fill ph-users"></i>Clientes</a></li>
                        <li><a href="{{ url('fornecedores') }}"><i class="ph-fill ph-truck"></i> Fornecedores</a></li>
                        <li><a href="{{ url('gestao') }}"><i class="ph-fill ph-chart-line"></i> Gestão/Financeiro</a>
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
            <div class="page-header">
                <h1>Cadastro de Novo Cliente</h1>
                <a href="{{ url('/clientes') }}" class="button button-danger"><i class="ph ph-x"></i> Cancelar
                    Cadastro</a>
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
                            <input type="text" id="endereco" name="endereco"
                                placeholder="Rua, Número, Bairro - Tatuí, SP">
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