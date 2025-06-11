<?php
session_start();
include "../conexao/conexao.php";

$erro = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST["email"]);
    $senha = $_POST["senha"];
    $tipo = $_POST["tipo"];

    if (!empty($email) && !empty($senha) && !empty($tipo)) {
        // Verifica se existe o usuário com email e tipo
        $sql = "SELECT * FROM usuarios WHERE email = ? AND tipo = ? LIMIT 1";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $email, $tipo);
        $stmt->execute();
        $resultado = $stmt->get_result();

        if ($resultado->num_rows === 1) {
            $usuario = $resultado->fetch_assoc();

            if (password_verify($senha, $usuario["senha"])) {
                // Inicia sessão
                $_SESSION["usuario_id"] = $usuario["id"];
                $_SESSION["email"] = $usuario["email"];
                $_SESSION["tipo"] = $usuario["tipo"];

                // Se for adm_mae, buscar escola associada pela nova coluna
                if ($usuario["tipo"] === "adm_mae") {
                    $sqlEscola = "SELECT id_escola FROM escola WHERE administradora_id = ?";
                    $stmtEscola = $conn->prepare($sqlEscola);
                    $stmtEscola->bind_param("i", $usuario["id"]);
                    $stmtEscola->execute();
                    $resEscola = $stmtEscola->get_result();

                    if ($resEscola->num_rows === 1) {
                        $escola = $resEscola->fetch_assoc();
                        $_SESSION["escola_id"] = $escola["id_escola"];
                    } else {
                        $erro = "Nenhuma escola vinculada a esta administradora.";
                    }
                } else {
                    $_SESSION["escola_id"] = $usuario["escola_id"];
                }

                if (empty($erro)) {
                    // Redirecionar com base no tipo
                    switch ($usuario["tipo"]) {
                        case "diretor":
                            header("Location: painel_diretor.php");
                            break;
                        case "professor":
                            header("Location: painel_professor.php");
                            break;
                        case "aluno":
                            header("Location: frontend/_aluno.php");
                            break;
                        case "administracao":
                            header("Location: painel_administracao.php");
                            break;
                        case "encarregado":
                            header("Location: painel_encarregado.php");
                            break;
                        case "adm_mae":
                            header("Location: frontend/adm_mae.php");
                            break;
                        default:
                            $erro = "Tipo de usuário desconhecido.";
                    }
                    exit();
                }
            } else {
                $erro = "Senha incorreta.";
            }
        } else {
            $erro = "Usuário não encontrado.";
        }
    } else {
        $erro = "Preencha todos os campos.";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="css/login.css">
</head>
<body>
  <div class="background-shapes">
    <div class="shape shape1"></div>
    <div class="shape shape2"></div>
    <div class="shape shape3"></div>
  </div>
  <div class="logo-container">
    <img src="Esc.jpg" alt="Logo da Empresa">
  </div>
  <div class="container">
    <div class="login-box">
      <h2><strong>Cadastrar minha escola na <a href="cadastro/cadastrar_escola.php"><span class="highlight">Escolink</span></strong></a></h2>
      <h3>LOGIN</h3>

      <?php if (!empty($erro)): ?>
        <div class="erro"><?php echo $erro; ?></div>
      <?php endif; ?>

      <form method="POST" action="">
        <label for="tipo">Tipo de Usuário</label>
        <div class="input-group">
          <select id="tipo" name="tipo" required>
            <option value="">Selecione</option>
            <option value="diretor">Diretor</option>
            <option value="professor">Professor</option>
            <option value="aluno">Aluno</option>
            <option value="administracao">Administração</option>
            <option value="encarregado">Encarregado de Educação</option>
            <option value="adm_mae">Administradora Principal</option>
          </select>
        </div>

        <label for="email">Email</label>
        <div class="input-group">
          <input type="email" id="email" name="email" placeholder="email@exemplo.com" required>
        </div>

        <label for="senha">Senha</label>
        <div class="input-group">
          <input type="password" id="senha" name="senha" placeholder="Digite sua senha" required>
        </div>

        <button type="submit">Entrar</button>
      </form>
    </div>
    <div class="right-banner">
      <p>Tudo sobre a escola em um só click <br><strong>ESCO-link</strong></p>
    </div>
  </div>
</body>
</html>
