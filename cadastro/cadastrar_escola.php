<?php
session_start();
include "../conexao/conexao.php";
error_reporting(E_ALL);
ini_set('display_errors', 1);

$sucesso = '';
$erro = '';

// Verifica se está logado como administrador principal (adm_mae)
if (!isset($_SESSION["usuario_id"]) || $_SESSION["tipo"] !== "adm_mae") {
  header("Location: ../login.php");
  exit();
}

$administradora_id = $_SESSION["usuario_id"];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nome = trim($_POST['nomeEscola']);
  $nif = trim($_POST['nifEscola']);
  $email = trim($_POST['emailEscola']);
  $telefone = trim($_POST['telefoneEscola']);
  $diretor = trim($_POST['diretor']);
  $tipo = $_POST['tipoEscola'];
  $endereco = trim($_POST['endereco']);
  $cidade = trim($_POST['cidade']);
  $provincia = $_POST['provincia'];
  $codigo_postal = trim($_POST['codigoPostal']);

  if (isset($_POST['senha']) && !empty($_POST['senha'])) {
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
  } else {
    $erro = "A senha é obrigatória.";
  }

  if (empty($erro)) {
    $stmt = $conn->prepare("INSERT INTO escola (nome, nif, email, telefone, diretor, tipo, endereco, cidade, provincia, codigo_postal, senha, administradora_id)
                            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssssssssi", $nome, $nif, $email, $telefone, $diretor, $tipo, $endereco, $cidade, $provincia, $codigo_postal, $senha, $administradora_id);

    if ($stmt->execute()) {
      $sucesso = "Escola cadastrada com sucesso!";
    } else {
      $erro = "Erro ao cadastrar escola: " . $stmt->error;
    }

    $stmt->close();
  }
}
?>
<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>EscoLink - Cadastro de Escola</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    body {
      background-color: #f0f2f5;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .brand {
      font-size: 36px;
      font-weight: bold;
      color: #1877f2;
      text-align: center;
      margin-top: 30px;
      margin-bottom: 10px;
    }
    .form-container {
      background: white;
      border-radius: 8px;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
      padding: 30px;
      max-width: 700px;
      margin: 30px auto;
    }
    .form-section-title {
      font-weight: 600;
      margin-bottom: 15px;
      color: #333;
    }
    .btn-info {
      background-color: #00a0dc;
      border: none;
    }
  </style>
</head>
<body>

<div class="container">
  <div class="brand">EscoLink</div>

  <div class="form-container">
    <h4 class="text-center text-info mb-4">Cadastro de Escolas</h4>

    <?php if (!empty($sucesso)): ?>
      <div class="alert alert-success"><?php echo $sucesso; ?></div>
    <?php endif; ?>
    <?php if (!empty($erro)): ?>
      <div class="alert alert-danger"><?php echo $erro; ?></div>
    <?php endif; ?>

    <form method="POST" action="">
      <!-- Dados da escola -->
      <div class="form-section-title">Informações da Instituição</div>
      <div class="row mb-3">
        <div class="col-md-8">
          <label for="nomeEscola" class="form-label">Nome da Escola</label>
          <input type="text" class="form-control" id="nomeEscola" name="nomeEscola" required>
        </div>
        <div class="col-md-4">
          <label for="nifEscola" class="form-label">NIF</label>
          <input type="text" class="form-control" id="nifEscola" name="nifEscola" required>
        </div>
      </div>

      <div class="row mb-3">
        <div class="col-md-6">
          <label for="emailEscola" class="form-label">E-mail Institucional</label>
          <input type="email" class="form-control" id="emailEscola" name="emailEscola" required>
        </div>
        <div class="col-md-6">
          <label for="senha" class="form-label">Senha de Acesso (Administrador)</label>
          <input type="password" class="form-control" id="senha" name="senha" required>
        </div>
      </div>

      <div class="row mb-3">
        <div class="col-md-6">
          <label for="telefoneEscola" class="form-label">Telefone</label>
          <input type="tel" class="form-control" id="telefoneEscola" name="telefoneEscola" placeholder="ex: +244 923 000 000" required>
        </div>
        <div class="col-md-6">
          <label for="diretor" class="form-label">Nome do(a) Diretor(a)</label>
          <input type="text" class="form-control" id="diretor" name="diretor" required>
        </div>
      </div>

      <div class="mb-3">
        <label for="tipoEscola" class="form-label">Tipo de Escola</label>
        <select class="form-select" id="tipoEscola" name="tipoEscola" required>
          <option value="">Selecione...</option>
          <option value="publica">Pública</option>
          <option value="privada">Privada</option>
          <option value="comunitaria">Comunitária</option>
        </select>
      </div>

      <!-- Endereço -->
      <div class="form-section-title">Endereço</div>
      <div class="mb-3">
        <label for="endereco" class="form-label">Rua, bairro e número</label>
        <input type="text" class="form-control" id="endereco" name="endereco" required>
      </div>

      <div class="row mb-3">
        <div class="col-md-6">
          <label for="cidade" class="form-label">Município / Cidade</label>
          <input type="text" class="form-control" id="cidade" name="cidade" required>
        </div>
        <div class="col-md-4">
          <label for="provincia" class="form-label">Província</label>
          <select class="form-select" id="provincia" name="provincia" required>
            <option value="">Selecione a província</option>
            <option value="bengo">Bengo</option>
            <option value="benguela">Benguela</option>
            <option value="bié">Bié</option>
            <option value="cabinda">Cabinda</option>
            <option value="cuando-cubango">Cuando Cubango</option>
            <option value="cunene">Cunene</option>
            <option value="cuanza-norte">Cuanza Norte</option>
            <option value="cuanza-sul">Cuanza Sul</option>
            <option value="huambo">Huambo</option>
            <option value="huila">Huíla</option>
            <option value="luanda">Luanda</option>
            <option value="lunda-norte">Lunda Norte</option>
            <option value="lunda-sul">Lunda Sul</option>
            <option value="malanje">Malanje</option>
            <option value="moxico">Moxico</option>
            <option value="namibe">Namibe</option>
            <option value="uige">Uíge</option>
            <option value="zaiire">Zaire</option>
          </select>
        </div>
        <div class="col-md-2">
          <label for="codigoPostal" class="form-label">Código Postal</label>
          <input type="text" class="form-control" id="codigoPostal" name="codigoPostal" placeholder="opcional">
        </div>
      </div>

      <button type="submit" class="btn btn-info w-100 mt-3">Cadastrar Escola</button>
    </form>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
