<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Painel Administrativo - Escolink</title>
  <link rel="stylesheet" href="../css/bootstrap.css">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

  <style>
    body {
      background-color: #f8f9fa;
    }
    .card i {
      font-size: 2.5rem;
    }
    .text-purple {
      color: #6f42c1;
    }
  </style>
</head>
<body>

  <div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
      <h2>Painel Administrativo</h2>
      <i class="bi bi-speedometer2 fs-2 text-secondary"></i>
    </div>
    <div class="row g-4">
      <!-- Criar Usuário -->
      <div class="col-md-4">
        <div class="card text-center shadow-sm">
          <div class="card-body">
            <i class="bi bi-person-plus text-primary mb-2"></i>
            <h5 class="card-title">Criar Usuário</h5>
            <a href="../cadastro/user.php" class="btn btn-outline-primary w-100 mt-2">Novo</a>
          </div>
        </div>
      </div>

      <!-- Ver Usuários -->
      <div class="col-md-4">
        <div class="card text-center shadow-sm">
          <div class="card-body">
            <i class="bi bi-people text-success mb-2"></i>
            <h5 class="card-title">Ver Usuários</h5>
            <button class="btn btn-outline-success w-100 mt-2">Ver Lista</button>
          </div>
        </div>
      </div>

      <!-- Pesquisar Usuário -->
      <div class="col-md-4">
        <div class="card text-center shadow-sm">
          <div class="card-body">
            <i class="bi bi-search text-secondary mb-2"></i>
            <h5 class="card-title">Pesquisar Usuário</h5>
            <input type="text" class="form-control mt-2" placeholder="Nome, email...">
          </div>
        </div>
      </div>

      <!-- Eliminar Conta -->
      <div class="col-md-4">
        <div class="card text-center shadow-sm">
          <div class="card-body">
            <i class="bi bi-trash text-danger mb-2"></i>
            <h5 class="card-title">Eliminar Conta</h5>
            <button class="btn btn-danger w-100 mt-2">Eliminar</button>
          </div>
        </div>
      </div>

      <!-- Remover Publicação -->
      <div class="col-md-4">
        <div class="card text-center shadow-sm">
          <div class="card-body">
            <i class="bi bi-x-square text-warning mb-2"></i>
            <h5 class="card-title">Remover Publicação</h5>
            <button class="btn btn-outline-warning w-100 mt-2">Remover</button>
          </div>
        </div>
      </div>

      <!-- Ver Vídeos -->
      <div class="col-md-4">
        <div class="card text-center shadow-sm">
          <div class="card-body">
            <i class="bi bi-play-circle text-purple mb-2"></i>
            <h5 class="card-title">Ver Vídeos</h5>
            <button class="btn btn-outline-dark w-100 mt-2">Abrir</button>
          </div>
        </div>
      </div>

      <!-- Publicar Conteúdo -->
      <div class="col-md-4">
        <div class="card text-center shadow-sm">
          <div class="card-body">
            <i class="bi bi-cloud-upload text-info mb-2"></i>
            <h5 class="card-title">Publicar Conteúdo</h5>
            <button class="btn btn-outline-info w-100 mt-2">Publicar</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS (Bundle includes Popper) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
