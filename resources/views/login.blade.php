<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Painel Refreskar</title>
    <link rel="stylesheet" href="{{url('css/login.css')}}">
    <script src="https://unpkg.com/@phosphor-icons/web"></script>

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