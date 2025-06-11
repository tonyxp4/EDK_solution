<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
include "../conexao/conexao.php";

// Depuração para verificar a sessão
echo "<pre>";
print_r($_SESSION);
echo "</pre>";

// Verificar se o usuário está logado e se "escola_id" existe na sessão
if (!isset($_SESSION["escola_id"])) {
    die("Erro: escola_id não encontrada na sessão.");
}

$sucesso = '';
$erro = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nome = trim($_POST["nome"]);
  $email = trim($_POST["email"]);
  $senha = $_POST["senha"];
  $tipo = $_POST["tipo"];
  $escola_id = $_SESSION["escola_id"]; // Agora, a sessão é garantida aqui

  // Verifica se o e-mail já existe
  $check = $conn->prepare("SELECT id_usuario FROM usuarios WHERE email = ?");
  $check->bind_param("s", $email);
  $check->execute();
  $check->store_result();

  if ($check->num_rows > 0) {
    $erro = "Já existe um usuário com este e-mail.";
  } else {
    $senha_hash = password_hash($senha, PASSWORD_DEFAULT);

    $stmt = $conn->prepare("INSERT INTO usuarios (nome, email, senha, tipo, escola_id) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssi", $nome, $email, $senha_hash, $tipo, $escola_id);

    if ($stmt->execute()) {
      $sucesso = "Usuário criado com sucesso!";
    } else {
      $erro = "Erro ao criar usuário: " . $stmt->error;
    }
  }
}
?>
<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Cadastro de Usuário</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
</head>
<body class="bg-light">
  <div class="container mt-5">
    <div class="card shadow-sm p-4">
      <h3 class="text-primary mb-4 text-center">Cadastro de Novo Usuário</h3>

      <?php if ($sucesso): ?>
        <div class="alert alert-success"><?php echo $sucesso; ?></div>
      <?php endif; ?>
      <?php if ($erro): ?>
        <div class="alert alert-danger"><?php echo $erro; ?></div>
      <?php endif; ?>

      <form method="POST" action="">
        <div class="mb-3">
          <label for="nome" class="form-label">Nome Completo</label>
          <input type="text" name="nome" id="nome" class="form-control" required>
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">E-mail</label>
          <input type="email" name="email" id="email" class="form-control" required>
        </div>
        <div class="mb-3">
          <label for="senha" class="form-label">Senha</label>
          <input type="password" name="senha" id="senha" class="form-control" required>
        </div>
        <div class="mb-3">
          <label for="tipo" class="form-label">Tipo de Usuário</label>
          <select name="tipo" id="tipo" class="form-select" required>
            <option value="">Selecione</option>
            <option value="secretaria">Secretaria</option>
            <option value="gestao">Órgão de Gestão</option>
            <option value="diretor">Diretor</option>
            <option value="professor">Professor</option>
            <option value="aluno">Aluno</option>
            <option value="encarregado">Encarregado de Educação</option>
          </select>
        </div>
        <button type="submit" class="btn btn-primary w-100">Criar Usuário</button>
      </form>
    </div>
  </div>
</body>
</html>
