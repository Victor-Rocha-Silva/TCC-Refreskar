<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Refreskar</title>
    <style>
        /* Estilos gerais da página */
        body {
            margin: 0;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            background-color: #f0f2f5; /* Cinza claro de fundo */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        /* Container principal do formulário */
        .login-container {
            text-align: center;
            width: 100%;
            max-width: 380px;
            padding: 20px;
        }

        /* Estilo do Logo */
        .logo {
            font-size: 28px;
            font-weight: bold;
            color: #005a9c; /* Azul escuro do logo */
            margin-bottom: 20px;
            /* Simulação do contorno e setas do logo original */
            border: 3px solid #005a9c;
            border-radius: 50px / 30px;
            padding: 10px 20px;
            display: inline-block;
            position: relative;
        }
        
        /* Título "Login" */
        .login-title {
            font-size: 24px;
            color: #333;
            margin-bottom: 30px;
            font-weight: 400;
        }

        /* Estilo dos campos de entrada */
        .input-field {
            width: 100%;
            padding: 15px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 6px;
            box-sizing: border-box; /* Garante que o padding não afete a largura total */
            font-size: 16px;
        }

        /* Remove a borda azul ao focar no campo */
        .input-field:focus {
            outline: none;
            border-color: #007bff;
        }

        /* Estilo do botão de login */
        .login-button {
            width: 100%;
            padding: 15px;
            border: none;
            border-radius: 6px;
            color: white;
            font-size: 18px;
            font-weight: bold;
            cursor: pointer;
            /* Gradiente de azul do botão */
            background: linear-gradient(to right, #00b4d8, #0077b6);
            transition: opacity 0.3s ease;
        }

        /* Efeito ao passar o mouse sobre o botão */
        .login-button:hover {
            opacity: 0.9;
        }
    </style>
</head>
<body>

    <div class="login-container">
        <div class="logo">
            (REFRESKAR)
        </div>

        <h1 class="login-title">Login</h1>

        <form>
            <input type="text" class="input-field" placeholder="Nome do Usuário">
            <input type="password" class="input-field" placeholder="Senha do Usuário">
            <button type="submit" class="login-button">Entra</button>
        </form>
    </div>

</body>
</html>