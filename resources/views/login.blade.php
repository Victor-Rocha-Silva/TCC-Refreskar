<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Painel Refreskar</title>
    
    <script src="https://unpkg.com/@phosphor-icons/web"></script>

    <style>
        :root {
            --cor-fundo: #f4f7fa;
            --cor-principal: #3b82f6;
            --cor-texto-escuro: #0f172a;
            --cor-texto-claro: #64748b;
            --cor-card-fundo: #ffffff;
            --cor-sombra: rgba(0, 0, 0, 0.08);
            --cor-perigo: #ef4444;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: var(--cor-fundo);
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            color: var(--cor-texto-escuro);
        }

        .login-container {
            width: 100%;
            max-width: 400px;
            padding: 20px;
        }

        .login-card {
            background-color: var(--cor-card-fundo);
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 10px 30px var(--cor-sombra);
            text-align: center;
        }

        .logo-container {
            margin-bottom: 20px;
        }

        .logo-container img {
            max-width: 200px;
        }

        .login-card h2 {
            margin-bottom: 10px;
            font-size: 1.5em;
        }

        .login-card p {
            color: var(--cor-texto-claro);
            margin-bottom: 30px;
        }

        .form-group {
            position: relative;
            margin-bottom: 20px;
        }

        .form-group i {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #94a3b8;
            font-size: 1.2em;
        }

        .form-input {
            width: 100%;
            padding: 14px 15px 14px 50px; /* Espaço para o ícone */
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            font-size: 1em;
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
        }

        .form-input:focus {
            outline: none;
            border-color: var(--cor-principal);
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.2);
        }

        .form-options {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
            font-size: 0.9em;
        }

        .form-options label {
            display: flex;
            align-items: center;
            gap: 8px;
            color: var(--cor-texto-claro);
            cursor: pointer;
        }

        .form-options a {
            color: var(--cor-principal);
            text-decoration: none;
        }
        
        .form-options a:hover {
            text-decoration: underline;
        }

        .error-message {
            background-color: #fee2e2;
            color: #b91c1c;
            padding: 12px;
            border-radius: 8px;
            margin-bottom: 20px;
            text-align: center;
            font-size: 0.9em;
        }
        
        /* ✅ BOTÃO COM GRADIENTE ANIMADO JÁ INTEGRADO */
        .button-login {
            width: 100%;
            padding: 15px;
            border: none;
            color: white;
            border-radius: 8px;
            font-size: 1.1em;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            background: linear-gradient(-45deg, #3b82f6, #60a5fa, #1d4ed8, #2563eb);
            background-size: 400% 400%;
            animation: gradient-animation 10s ease infinite;
        }

        .button-login:hover {
            transform: scale(1.03);
            box-shadow: 0 8px 25px rgba(59, 130, 246, 0.4);
        }

        /* ✅ ANIMAÇÃO DO GRADIENTE JÁ INTEGRADA */
        @keyframes gradient-animation {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }

    </style>
</head>
<body>

    <div class="login-container">
        <div class="login-card">
            <div class="logo-container">
                <img src="https://i.imgur.com/example-logo.png" alt="Logo Refreskar">
            </div>
            <h2>Acesse o Painel</h2>
            <p>Bem-vindo! Faça login para continuar.</p>

            <form>
                <div class="form-group">
                    <i class="ph ph-user"></i>
                    <input type="email" name="email" class="form-input" placeholder="Email do usuário" required>
                </div>

                <div class="form-group">
                    <i class="ph ph-lock-key"></i>
                    <input type="password" name="password" class="form-input" placeholder="Senha" required>
                </div>

                <div class="form-options">
                    <label>
                        <input type="checkbox" name="remember">
                        Lembrar-me
                    </label>
                    <a href="#">Esqueceu sua senha?</a>
                </div>
                
                <button type="submit" class="button-login">Entrar</button>
            </form>
        </div>
    </div>

</body>
</html>