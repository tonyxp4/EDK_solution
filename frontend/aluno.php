<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portal Escolar - Feed de Atualizações</title>
  <!-- Link para o Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Link para o Font Awesome (ícones) -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

  <!-- Estilos adicionais -->
  <link rel="stylesheet" href="../css/aluno.css">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/bootstrap-icons.css">
</head>

<body>

  <!-- Navbar com ícones -->
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
            <a class="nav-link" href="#" title="Início"><i class="fas fa-home"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../outros/livros.html" title="livros"><i class="fas fa-book"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../perfil/perfil_aluno.html" title="Perfil"><i class="fas fa-user"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" title="Boletim"><i class="fas fa-file-alt"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" title="Mensagens"><i class="fas fa-envelope"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../chat/assistente.html" title="assitente"> <i class="fas fa-comments"></i>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Feed de Atualizações -->
  <div class="container">
    <h2 class="section-title">Feed de Atualizações</h2>
    <div class="row">
      
      <!-- Feed Item 1 -->
      <div class="col-lg-12 feed-item">
        <div class="card shadow">
          <div class="card-header bg-info text-white">
            <i class="fas fa-bell"></i> Recado do Professor
          </div>
          <div class="card-body">
            <p><strong>Professor:</strong> Nelson Muzamguiça</p>
            <p><strong>Mensagem:</strong> "Não se esqueçam de entregar o projecto de SEAC até sexta-feira!"</p>
            <a href="#" class="btn btn-info btn-sm">Ler Mais</a>
          </div>
        </div>
      </div>

      <!-- Feed Item 2 -->
      <div class="col-lg-12 feed-item">
        <div class="card shadow">
          <div class="card-header bg-success text-white">
            <i class="fas fa-calendar-check"></i> Evento Escolar
          </div>
          <div class="card-body">
            <p><strong>Data:</strong> 16 de Maio de 2025</p>
            <p><strong>Evento:</strong> "Feira de Ciências - Participe e aprenda mais sobre as descobertas científicas!"</p>
            <a href="#" class="btn btn-success btn-sm">Ver Detalhes</a>
          </div>
        </div>
      </div>

      <!-- Feed Item 3 -->
      <div class="col-lg-12 feed-item">
        <div class="card shadow">
          <div class="card-header bg-warning text-white">
            <i class="fas fa-graduation-cap"></i> Novidades Acadêmicas
          </div>
          <div class="card-body">
            <p><strong>Notícia:</strong> "O prazo para inscrição no curso de inglês foi prorrogado até o final de semana!"</p>
            <a href="#" class="btn btn-warning btn-sm">Ver Mais</a>
          </div>
        </div>
      </div>

    <!-- Feed Item 4 - Foto de Evento -->
      <div class="col-lg-12 feed-item">
        <div class="card shadow">
          <div class="card-header bg-primary text-white">
            <i class="fas fa-camera"></i> Galeria de Fotos
          </div>
          <div class="card-body">
            <p><strong>Atividade:</strong> Apresentação de Teatro Escolar</p>
            <img src="../fto/teatro_escolar.jpg" class="img-fluid rounded" alt="Foto do evento de teatro escolar">
            <p class="mt-2">"Os alunos do 2º ano apresentaram uma peça sobre cultura angolana. Foi um sucesso!"</p>
            <a href="#" class="btn btn-primary btn-sm">Ver Álbum Completo</a>
          </div>
        </div>
      </div>

      <!-- Feed Item 5 - Vídeo de Atividade -->
      <div class="col-lg-12 feed-item">
        <div class="card shadow">
          <div class="card-header bg-danger text-white">
            <i class="fas fa-video"></i> Vídeo da Semana
          </div>
          <div class="card-body">
            <p><strong>Atividade:</strong> Aula prática de Robótica</p>
            <div class="ratio ratio-16x9">
              <iframe src="https://www.youtube.com/embed/VIDEO_ID_EXEMPLO" title="Aula de Robótica" allowfullscreen></iframe>
            </div>
            <p class="mt-2">Confira como os alunos construíram seus primeiros robôs com sensores!</p>
            <a href="#" class="btn btn-danger btn-sm">Assista no YouTube</a>
          </div>
        </div>
      </div>

            <!-- Feed Item 6 - Aviso Urgente -->
            <div class="col-lg-12 feed-item">
              <div class="card shadow">
                <div class="card-header bg-danger text-white">
                  <i class="fas fa-exclamation-triangle"></i> Aviso Urgente
                </div>
                <div class="card-body">
                  <p><strong>Importante:</strong> "As aulas da manhã desta sexta-feira (16/05) estão suspensas devido à manutenção elétrica."</p>
                  <a href="#" class="btn btn-danger btn-sm">Mais Informações</a>
                </div>
              </div>
            </div>
      
    </div>
  </div>


    

  <!-- Rodapé -->
  <footer>
    <p>&copy; Instituto Médio Politecnico SmartBits</p>
    <p>Contato: contato@SmartBits.com</p>
  </footer>

  <!-- Link para o JavaScript do Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>