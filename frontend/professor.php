<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portal Escolar - Professor</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

  <!-- Estilos personalizados -->
  <link rel="stylesheet" href="../css/aluno.css">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/bootstrap-icons.css">
</head>

<body>

  <!-- Navbar do Professor -->
  <nav class="navbar navbar-expand-lg navbar-light navcolor">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="../fto/logo.jpeg" alt="Logo" class="logo"> <span>SmartBits</span> 
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="../outros/chamadas" title="Fazer Chamada"><i class="fas fa-clipboard-check"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" title="Lançar Notas"><i class="fas fa-pen"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../perfil/perfil_professor.html" title="Perfil"><i class="fas fa-user"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" title="Publicar Livro/Material"><i class="fas fa-upload"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" title="Enviar Mensagem"><i class="fas fa-paper-plane"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../chat/assistente.html" title="Assistente"><i class="fas fa-comments"></i></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Feed de Atualizações do Professor -->
  <div class="container">
    <h2 class="section-title">Notificações do Professor</h2>
    <div class="row">

      <!-- Item 1 -->
      <div class="col-lg-12 feed-item">
        <div class="card shadow">
          <div class="card-header bg-info text-white">
            <i class="fas fa-bullhorn"></i> Aviso da Coordenação
          </div>
          <div class="card-body">
            <p><strong>Coordenador:</strong> Sra. Ana Lopes</p>
            <p><strong>Mensagem:</strong> "Favor entregar os planos de aula da próxima semana até sexta-feira."</p>
            <a href="#" class="btn btn-info btn-sm">Ver Mais</a>
          </div>
        </div>
      </div>

      <!-- Item 2 -->
      <div class="col-lg-12 feed-item">
        <div class="card shadow">
          <div class="card-header bg-success text-white">
            <i class="fas fa-users"></i> Reunião de Professores
          </div>
          <div class="card-body">
            <p><strong>Data:</strong> 18 de Maio de 2025</p>
            <p><strong>Assunto:</strong> Alinhamento pedagógico e calendário de avaliações.</p>
            <a href="#" class="btn btn-success btn-sm">Detalhes da Reunião</a>
          </div>
        </div>
      </div>

      <!-- Item 3 -->
      <div class="col-lg-12 feed-item">
        <div class="card shadow">
          <div class="card-header bg-warning text-dark">
            <i class="fas fa-book-open"></i> Correção de Provas
          </div>
          <div class="card-body">
            <p><strong>Lembrete:</strong> "O prazo final para entrega das correções da 2ª prova é segunda-feira."</p>
            <a href="#" class="btn btn-warning btn-sm">Ver Instruções</a>
          </div>
        </div>
      </div>

      <!-- Item 4 -->
      <div class="col-lg-12 feed-item">
        <div class="card shadow">
          <div class="card-header bg-primary text-white">
            <i class="fas fa-chalkboard-teacher"></i> Evento Interno
          </div>
          <div class="card-body">
            <p><strong>Atividade:</strong> Palestra sobre metodologias ativas de ensino</p>
            <p><strong>Data:</strong> 20 de Maio de 2025</p>
            <a href="#" class="btn btn-primary btn-sm">Ver Mais</a>
          </div>
        </div>
      </div>

      <!-- Item 5 -->
      <div class="col-lg-12 feed-item">
        <div class="card shadow">
          <div class="card-header bg-danger text-white">
            <i class="fas fa-exclamation-circle"></i> Atenção
          </div>
          <div class="card-body">
            <p><strong>Urgente:</strong> "Sistema de notas estará indisponível para manutenção no sábado."</p>
            <a href="#" class="btn btn-danger btn-sm">Mais Detalhes</a>
          </div>
        </div>
      </div>

    </div>
  </div>

  <!-- Rodapé -->
  <footer>
    <p>&copy; Instituto Médio Politécnico SmartBits</p>
    <p>Contato: contato@SmartBits.com</p>
  </footer>

  <!-- JavaScript do Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
