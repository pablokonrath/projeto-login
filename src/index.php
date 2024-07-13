
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login usuário</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class="login-container">
        <div class="login-box">
            <h2>Login usuário</h2>
            <div class="avatar">
                <img src="./image/login.png" alt="User Avatar">
            </div>
            <form action="login.php" method="post" >
                <div class="input-group">
                    <input type="text" id="username" name="username" placeholder="Usuario" required>
                    <span class="input-icon"><i class="fas fa-user"></i></span>
                </div>
                <div class="input-group">
                    <input type="password" id="password" placeholder="Senha" required name="password">
                    <span class="input-icon"><i class="fas fa-lock"></i></span>
                </div>
                <div class="checkbox-group">
                    <input type="checkbox" id="remember-me">
                    <label for="remember-me">Salvar senha </label>
                    <a href="#" class="forgot-password">Esqueci a senha?</a>
                </div>
                <button type="submit" class="login-btn" value="Login">Entrar</button>
            </form>
        </div>
    </div>
</body>
</html>
