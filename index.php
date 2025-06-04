<?php
session_start();
if (isset($_SESSION['usuario'])) {
    header("Location: /dashboard.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EscoLink - Login</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <div class="login-container">
        <div class="login-box">
            <img src="fto/logo.jpeg" alt="EscoLink Logo" class="logo">
            <h2>Login</h2>
            <form action="backend/login.php" method="POST">
                <div class="input-group">
                    <label for="tipo">Tipo de Conta</label>
                    <select name="tipo" id="tipo" required>
                        <option value="aluno">Aluno</option>
                        <option value="professor">Professor</option>
                        <option value="direcao">Direção</option>
                    </select>
                </div>
                <div class="input-group">
                    <label for="email">E-mail</label>
                    <input type="email" name="email" id="email" required>
                </div>
                <div class="input-group">
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" id="senha" required>
                </div>
                <button type="submit" class="btn">Entrar</button>
            </form>
            <p class="register-link">Não tem conta? <a href="register.php">Cadastre-se</a></p>
        </div>
    </div>
</body>
</html>
