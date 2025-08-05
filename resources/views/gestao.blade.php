<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes - Refreskar</title>
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
            margin-bottom: 40px;
        }

        .logo {
            font-size: 24px;
            font-weight: bold;
            color: #005a9c; /* Azul do logo */
        }
        
        /* Container do menu principal */
        .menu-container {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 40px; /* Espaçamento entre os cartões */
            margin-top: 50px;
            flex-wrap: wrap; /* Permite que os itens quebrem para a próxima linha em telas menores */
        }

        /* Estilo de cada cartão do menu */
        .menu-card {
            background-color: #6a6afb; /* Fundo azul/roxo do cartão */
            width: 320px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            text-align: center;
            color: white;
            padding: 15px;
            cursor: pointer;
            transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
            text-decoration: none; /* Remove sublinhado se o cartão for um link */
        }
        
        /* Efeito ao passar o mouse */
        .menu-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0,0,0,0.15);
        }

        /* Título do cartão */
        .card-header {
            font-size: 20px;
            font-weight: 600;
            margin-bottom: 15px;
        }

        /* Corpo do cartão, onde a imagem fica */
        .card-body {
            background-color: #48d1cc; /* Fundo ciano/verde-água */
            padding: 20px;
            /* As bordas arredondadas internas não são necessárias pois o padding do container já resolve */
        }

        /* Imagem dentro do cartão */
        .card-body img {
            max-width: 100%;
            height: auto;
            display: block;
        }
    </style>
</head>
<body>

    <div class="page-container">
        <header class="header">
            <div class="logo">(REFRESKAR)</div>
        </header>

        <main class="menu-container">
            <a href="#" class="menu-card">
                <div class="card-header">Ver os Clientes</div>
                <div class="card-body">
                    <img src="https://i.imgur.com/KxXoJ9r.png" alt="Ilustração de clientes">
                </div>
            </a>

            <a href="#" class="menu-card">
                <div class="card-header">Fazer Cadastrais do Clientes</div>
                <div class="card-body">
                     <img src="https://i.imgur.com/KxXoJ9r.png" alt="Ilustração de cadastro de clientes">
                </div>
            </a>
        </main>
    </div>

</body>
</html>