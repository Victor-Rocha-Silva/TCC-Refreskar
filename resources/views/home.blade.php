<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Refreskar</title>
    <style>
        /* Estilos gerais da página */
        body {
            margin: 0;
            padding: 0;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            background-color: #e9e9e9; /* Cinza claro de fundo */
            color: #333;
        }

        /* Cabeçalho com o logo */
        .header {
            padding: 15px 40px;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0,0,0,0.05);
        }

        .logo {
            font-size: 24px;
            font-weight: bold;
            color: #005a9c; /* Azul do logo */
        }
        
        /* Container principal */
        .main-container {
            padding: 20px 40px;
        }

        /* Título "HOME" */
        .home-title {
            text-align: center;
            font-size: 28px;
            font-weight: 500;
            margin-top: 20px;
            margin-bottom: 40px;
            color: #555;
        }

        /* Grade para os cartões do menu */
        .menu-grid {
            display: grid;
            /* Cria 3 colunas de tamanho igual */
            grid-template-columns: repeat(3, 1fr);
            gap: 30px; /* Espaçamento entre os cartões */
            max-width: 1000px;
            margin: 0 auto; /* Centraliza a grade na página */
        }

        /* Estilo de cada cartão do menu */
        .card {
            background-color: #6a6afb; /* Fundo azul/roxo dos cartões */
            border-radius: 12px;
            padding: 20px;
            text-align: center;
            color: white;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            cursor: pointer;
            transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
        }

        /* Efeito ao passar o mouse */
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0,0,0,0.15);
        }

        /* Imagem dentro do cartão */
        .card img {
            max-width: 100%;
            height: 120px; /* Altura fixa para as imagens */
            object-fit: cover;
            border-radius: 8px;
            margin-bottom: 15px;
        }

        /* Título dentro do cartão */
        .card-title {
            font-size: 20px;
            font-weight: 600;
        }

        /* Ajustes para telas menores (Responsividade) */
        @media (max-width: 900px) {
            .menu-grid {
                /* Muda para 2 colunas em telas médias */
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 600px) {
            .main-container {
                padding: 10px 20px;
            }
            .menu-grid {
                /* Muda para 1 coluna em telas pequenas */
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>

    <header class="header">
        <div class="logo">(REFRESKAR)</div>
    </header>

    <main class="main-container">
        <h1 class="home-title">HOME</h1>

        <div class="menu-grid">
            <div class="card">
                <img src="https://placehold.co/200x150/e8e8f2/7b7bf2?text=Vendas" alt="Ilustração de Vendas">
                <div class="card-title">Vendas</div>
            </div>

            <div class="card">
                <img src="https://placehold.co/200x150/e8e8f2/7b7bf2?text=Estoque" alt="Ilustração de Estoque">
                <div class="card-title">Estoque</div>
            </div>

            <div class="card">
                <img src="https://placehold.co/200x150/e8e8f2/7b7bf2?text=Orçamentos" alt="Ilustração de Orçamentos">
                <div class="card-title">Orçamentos</div>
            </div>

            <div class="card">
                <img src="https://placehold.co/200x150/e8e8f2/7b7bf2?text=Contas+a+Pagar" alt="Ilustração de Contas a Pagar">
                <div class="card-title">Contas a Pagar</div>
            </div>

            <div class="card">
                <img src="https://placehold.co/200x150/e8e8f2/7b7bf2?text=Clientes" alt="Ilustração de Clientes">
                <div class="card-title">Clientes</div>
            </div>

            <div class="card">
                <img src="https://placehold.co/200x150/e8e8f2/7b7bf2?text=Fornecedor" alt="Ilustração de Fornecedor">