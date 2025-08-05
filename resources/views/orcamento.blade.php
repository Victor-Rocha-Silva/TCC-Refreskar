<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo Orçamento - Refreskar</title>
    <style>
        /* Estilos gerais da página */
        body {
            margin: 0;
            padding: 0;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            background-color: #f0f2f5;
            /* Fundo cinza claro */
            color: #333;
        }

        /* Container principal para alinhar conteúdo */
        .page-container {
            padding: 20px 40px;
        }

        /* Cabeçalho com o logo */
        .header {
            margin-bottom: 20px;
        }

        .logo {
            font-size: 24px;
            font-weight: bold;
            color: #005a9c;
            /* Azul do logo */
        }

        /* Barra superior com botões e mensagem */
        .top-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
            max-width: 1100px;
            margin: 0 auto 40px auto;
            /* Centraliza a barra */
        }

        .welcome-message {
            font-size: 18px;
            font-weight: 500;
            color: #444;
        }

        /* Estilo base para os botões */
        .btn {
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            color: white;
            font-size: 14px;
            font-weight: 500;
            cursor: pointer;
            transition: opacity 0.2s;
        }

        .btn:hover {
            opacity: 0.9;
        }

        /* Botão vermelho */
        .btn-danger {
            background-color: #dc3545;
            /* Vermelho */
        }

        /* Botão azul */
        .btn-primary {
            background-color: #0d6efd;
            /* Azul */
        }

        /* Botão verde */
        .btn-success {
            background-color: #198754;
            /* Verde */
        }

        /* Formulário de Orçamento */
        .budget-form {
            max-width: 700px;
            margin: 0 auto;
            text-align: center;
        }

        .form-title {
            font-size: 24px;
            font-weight: 500;
            margin-bottom: 20px;
        }

        .form-subtitle {
            font-size: 18px;
            color: #555;
            margin-bottom: 15px;
            text-align: left;
        }

        .form-section {
            margin-bottom: 30px;
        }

        .input-field {
            width: 100%;
            padding: 12px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 15px;
            box-sizing: border-box;
        }

        /* Linha de itens do serviço */
        .service-item-row {
            display: flex;
            gap: 10px;
            /* Espaço entre os campos */
            align-items: center;
            margin-bottom: 15px;
        }

        .service-item-row .input-qty {
            width: 15%;
        }

        .service-item-row .input-desc {
            width: 60%;
        }

        .service-item-row .input-value {
            width: 25%;
        }

        /* Botão de adicionar item */
        .add-item-btn {
            background-color: #198754;
            color: white;
            border: none;
            width: 30px;
            height: 30px;
            font-size: 24px;
            line-height: 30px;
            text-align: center;
            border-radius: 50%;
            /* Deixa o botão redondo */
            cursor: pointer;
            margin-top: 10px;
        }

        /* Botão final de gerar orçamento */
        .submit-btn {
            padding: 12px 30px;
            font-size: 16px;
            background-color: #198754;
            margin-top: 20px;
        }
    </style>
</head>

<body>

    <div class="page-container">
        <header class="header">
            <div class="logo">(REFRESKAR)</div>
        </header>

        <div class="top-bar">
            <button class="btn btn-danger">Cancelar Orçamento</button>
            <span class="welcome-message">Bem vindo(a) Samuel</span>
            <button class="btn btn-primary">Consultar Veículo</button>
        </div>

        <main>
            <form class="budget-form" onsubmit="return false;">
                <h1 class="form-title">Novo orçamento</h1>

                <div class="form-section">
                    <h2 class="form-subtitle">Dados do cliente</h2>
                    <input type="text" class="input-field" placeholder="Nome do cliente*">
                    <input type="text" class="input-field" placeholder="Veículo*">
                    <input type="text" class="input-field" placeholder="PLACA">
                    <input type="text" class="input-field" placeholder="Km">
                    <input type="text" class="input-field" placeholder="SO">
                </div>

                <div class="form-section">
                    <h2 class="form-subtitle">Dados do serviço:</h2>
                    <div class="service-item-row">
                        <input type="number" class="input-field input-qty" placeholder="Qtd*">
                        <input type="text" class="input-field input-desc" placeholder="Descrição do serviço*">
                        <input type="text" class="input-field input-value" placeholder="Valor em R$*">
                    </div>
                    <button type="button" class="add-item-btn">+</button>
                </div>

                <button type="submit" class="btn submit-btn">Gerar orçamento</button>
            </form>
        </main>
    </div>

</body>

</html>