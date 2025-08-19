<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo Orçamento - Refreskar</title>
    <link rel="stylesheet" href="{{ url('css/consultadeplaca.css') }}">
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
                        <li><a href="{{ url('/orcamentos') }}" class="active"><i class="ph-fill ph-receipt"></i>
                                Orçamentos</a></li>
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
    </div>
    </main>
    </div>
</body>

</html>