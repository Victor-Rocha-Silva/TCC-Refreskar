<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nova Consulta - Refreskar</title>
    <style>
        /* Estilos gerais da página */
        body {
            margin: 0;
            padding: 0;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            background-color: #e9e9e9; /* Fundo cinza claro */
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
            color: #005a9c; /* Azul do logo */
        }
        
        /* Barra superior com botões e mensagem */
        .top-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
            max-width: 1100px;
            margin: 0 auto 40px auto; /* Centraliza a barra */
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

        /* Botão verde: Novo Orçamento */
        .btn-success {
            background-color: #28a745; /* Verde */
        }

        /* Botão vermelho: Cancelar Pesquisa */
        .btn-danger {
            background-color: #dc3545; /* Vermelho */
        }
        
        /* Botão azul: Consultar */
        .btn-primary {
            background-color: #4477CE; /* Azul */
            width: 100%;
            padding: 12px;
            font-size: 16px;
        }

        /* Seção principal da consulta */
        .query-section {
            text-align: center;
            margin-top: 50px;
        }

        .query-title {
            font-size: 22px;
            font-weight: 500;
            color: #555;
            margin-bottom: 25px;
        }
        
        /* Formulário de consulta */
        .query-form {
            display: inline-block;
            text-align: left;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-size: 14px;
            color: #666;
            text-align: center;
        }

        .input-field {
            width: 300px;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            text-align: center;
            margin-bottom: 15px;
        }

        .input-field:focus {
            outline: none;
            border-color: #4477CE;
        }

    </style>
</head>
<body>

    <div class="page-container">
        <header class="header">
            <div class="logo">(REFRESKAR)</div>
        </header>

        <div class="top-bar">
            <button class="btn btn-success">+ Novo Orçamento</button>
            <span class="welcome-message">Bem vindo(a) Samuel</span>
            <button class="btn btn-danger">Cancela pesquisa</button>
        </div>

        <main class="query-section">
            <h1 class="query-title">Nova consulta</h1>

            <form class="query-form" onsubmit="return false;">
                <div class="form-group">
                    <label for="placa">PLACA</label>
                    <input type="text" id="placa" class="input-field">
                </div>
                <button type="submit" class="btn btn-primary">Consultar</button>
            </form>
        </main>
    </div>

</body>
</html>