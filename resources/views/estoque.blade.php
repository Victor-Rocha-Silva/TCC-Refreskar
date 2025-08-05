<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estoque - Refreskar</title>
    <style>
        /* Estilos gerais da página */
        body {
            margin: 0;
            padding: 0;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            background-color: #f0f2f5; /* Fundo cinza claro */
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
        
        /* Container da barra de pesquisa */
        .search-container {
            display: flex;
            justify-content: center;
            margin-bottom: 40px;
        }

        .search-bar {
            position: relative;
            width: 100%;
            max-width: 400px;
        }

        .search-input {
            width: 100%;
            padding: 12px 40px 12px 15px;
            border: 1px solid #ccc;
            border-radius: 20px;
            font-size: 16px;
            box-sizing: border-box;
        }
        .search-input:focus {
            outline: none;
            border-color: #007bff;
        }

        .search-icon {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #777;
            cursor: pointer;
        }

        /* Container dos resultados */
        .results-container {
            display: flex;
            justify-content: center;
        }

        /* Cartão do Produto */
        .product-card {
            background-color: #808080; /* Fundo cinza escuro do cartão */
            border-radius: 8px;
            padding: 20px;
            width: 100%;
            max-width: 280px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            text-align: center;
        }

        .product-image {
            width: 100%;
            max-width: 240px;
            height: auto;
            background-color: white; /* Fundo branco para a imagem */
            border: 1px solid #ddd;
            border-radius: 4px;
            margin-bottom: 15px;
        }

        .product-info {
            background-color: #dcdcdc; /* Fundo cinza claro da etiqueta */
            border: 1px solid #b0b0b0; /* Borda da etiqueta */
            border-radius: 5px;
            padding: 10px;
            cursor: pointer;
        }
        
        .product-info-main {
            font-size: 16px;
            font-weight: bold;
            display: block; /* Para ficar na linha de cima */
        }
        
        .product-info-sub {
            font-size: 14px;
            color: #555;
            display: block; /* Para ficar na linha de baixo */
        }
    </style>
</head>
<body>

    <div class="page-container">
        <header class="header">
            <div class="logo">(REFRESKAR)</div>
        </header>

        <div class="search-container">
            <div class="search-bar">
                <input type="text" class="search-input" value="Termostato">
                <svg class="search-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                </svg>
            </div>
        </div>

        <main class="results-container">
            <div class="product-card">
                <img src="https://i.imgur.com/L8tqTqY.png" alt="Termostato" class="product-image">
                
                <div class="product-info">
                    <span class="product-info-main">20 Termostato</span>
                    <span class="product-info-sub">Estoque</span>
                </div>
            </div>
        </main>
    </div>

</body>
</html>