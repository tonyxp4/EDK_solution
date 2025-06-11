<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portal Escolar - Feed de Publicações</title>
  <!-- Link para a fonte Inter -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
  <!-- Link para o Bootstrap CSS (v5.1.3) -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Link para o Font Awesome (ícones) (v5.15.4) -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../css/bootstrap.css">
  <link rel="stylesheet" href="../css/aluno.css">

  <!-- Estilos adicionais para melhorar a estética e responsividade -->
  
</head>

<body>

  <!-- Nova Navbar com visual tipo Facebook -->
  <nav class="navbar navbar-expand-lg navbar-light navcolor sticky-top">
    <div class="container-fluid">
      <!-- Marca Escolink e logo -->
      <a class="navbar-brand" href="#">
        <img src="https://placehold.co/40x40/4e73df/ffffff?text=EL" alt="Logo Escolink" class="logo"
          onerror="this.onerror=null;this.src='https://placehold.co/40x40/000000/ffffff?text=Err';">
        <span>Escolink</span>
      </a>

      <!-- Barra de Pesquisa (visível em desktop, oculta em mobile) -->
      <div class="input-group d-none d-lg-flex flex-grow-1 me-3" style="max-width: 400px;">
        <input type="text" class="form-control navbar-search-input" placeholder="Pesquisar no Escolink">
      </div>

      <!-- Ícones de Navegação Principais (visíveis em desktop, ocultos em mobile) -->
      <ul class="navbar-nav flex-row main-nav-icons d-none d-lg-flex me-auto">
        <li class="nav-item">
          <a class="nav-link" href="#" title="Página Inicial"><i class="fas fa-home"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" title="Amigos/Grupos"><i class="fas fa-users"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" title="Vídeos/Watch"><i class="fas fa-tv"></i></a>
        </li>
      </ul>

      <!-- Ícones do Lado Direito (Notificações, Perfil, Menu Toggle) -->
      <div class="d-flex align-items-center right-nav-icons">
        <!-- Ícone de Pesquisa (visível apenas em mobile) -->
        <a class="nav-link d-lg-none" href="#" title="Pesquisar"><i class="fas fa-search"></i></a>
        <a class="nav-link" href="#" title="Seu Perfil">
          <!-- Sua foto de perfil -->
          <img src="user.jpg" alt="Seu Perfil" class="rounded-circle"
            onerror="this.onerror=null;this.src='https://placehold.co/32x32/000000/ffffff?text=Eu';">
        </a>
        <a class="nav-link" href="#" title="Notificações"><i class="fas fa-bell"></i></a>


        <!-- Botão de Alternância da Navbar (Menu de 3 barras em círculo branco) -->
        <button class="navbar-toggler ms-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
          aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>

      <!-- Offcanvas (Menu Lateral) -->
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
          <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <!-- Barra de pesquisa mobile (visível apenas quando o menu colapsado está aberto em mobile) -->
          <div class="input-group navbar-search-input-mobile mb-4">
            <input type="text" class="form-control navbar-search-input" placeholder="Pesquisar no Escolink">
          </div>

          <!-- Links de Navegação Adicionais (agora dentro do Offcanvas) -->
          <ul class="navbar-nav collapse-nav-links justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link" href="#" title="Livros"><i class="fas fa-book-open"></i>Livros</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" title="Perfil"><i class="fas fa-user-circle"></i>Perfil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" title="Boletim"><i class="fas fa-clipboard-list"></i>Boletim</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" title="Mensagens"><i class="fas fa-comment-dots"></i>Mensagens</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" title="Assistente"> <i class="fas fa-robot"></i>Assistente</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>

  <!-- Conteúdo principal com layout de 3 colunas para desktop -->
  <div class="main-layout-outer-container">
    <div class="main-layout-inner-row">
      <!-- Chat Lateral (visível apenas em telas grandes) -->
      <div class="chat-sidebar-col d-lg-flex">
        <div class="chat-sidebar">
          <div class="chat-header">
            ESCO-ATENDENT <i class="fas fa-robot ms-2"></i>
          </div>
          <div class="chat-messages" id="chat-messages">
            <!-- Mensagens do chat serão adicionadas aqui -->
            <div class="chat-message ai">Olá! Como posso ajudar?</div>
          </div>
          <div class="chat-input input-group">
            <input type="text" class="form-control" placeholder="Escreva uma mensagem..." id="chat-input-field">
            <span class="input-group-text" id="send-chat-btn"><i class="fas fa-paper-plane"></i></span>
          </div>
        </div>
      </div>

      <!-- Feed de Publicações (coluna central) -->
      <div class="feed-column-col">
        <h2 class="section-title">Feed de Publicações</h2>

        <!-- Criar Publicação Section -->
        <div class="create-post-card mb-4">
          <div class="d-flex align-items-center mb-3 w-100">
            <!-- Sua foto de perfil -->
            <img src="user.jpg" alt="Seu Perfil" class="user-avatar"
              onerror="this.onerror=null;this.src='https://placehold.co/48x48/6c757d/ffffff?text=Eu';">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="No que estás a pensar, Escolink?">
            </div>
          </div>
          <div class="d-flex w-100">
            <button class="btn btn-post-action"><i class="fas fa-video text-danger"></i> Vídeo ao Vivo</button>
            <button class="btn btn-post-action"><i class="fas fa-images text-success"></i> Foto/Vídeo</button>
            <button class="btn btn-post-action"><i class="fas fa-smile text-warning"></i> Atividade</button>
          </div>
        </div>

        <div class="row" id="feed-container">
          <!-- As publicações serão injetadas aqui pelo JavaScript -->
        </div>
      </div>

      <!-- Coluna de Sugestões de Escolas (lateral direita, visível apenas em telas grandes) -->
      <div class="schools-sidebar-col d-lg-block">
        <div class="schools-sidebar">
          <h6>Sugestões de Escolas</h6>
          <div id="schools-list">
            <!-- Escolas fictícias serão adicionadas aqui via JavaScript -->
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Rodapé -->
  <footer>
    <p>&copy; Instituto Médio Politecnico Escolink</p>
    <p>Contato: contato@escolink.com</p>
  </footer>

  <!-- Link para o JavaScript do Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    // Função para gerar uma publicação fictícia
    function createFictionalPost() {
      const users = [
        { name: "Prof. Ana Silva", type: "teacher", avatar: "https://placehold.co/48x48/800000/ffffff?text=AS" },
        { name: "João Santos", type: "student", avatar: "https://placehold.co/48x48/006400/ffffff?text=JS" },
        { name: "Maria Oliveira", type: "student", avatar: "https://placehold.co/48x48/FFD700/000000?text=MO" },
        { name: "Direção Escolar", type: "admin", avatar: "https://placehold.co/48x48/1E90FF/ffffff?text=DE" },
        { name: "Pedro Costa", type: "student", avatar: "https://placehold.co/48x48/DA70D6/ffffff?text=PC" },
        { name: "Prof. Carlos Lima", type: "teacher", avatar: "https://placehold.co/48x48/32CD32/ffffff?text=CL" },
        { name: "Turma do 10º Ano A", type: "class", avatar: "https://placehold.co/48x48/8B008B/ffffff?text=T10A" },
        { name: "Biblioteca Escolink", type: "admin", avatar: "https://placehold.co/48x48/FF8C00/ffffff?text=BE" }
      ];

      const texts = [
        "Aulas de revisão para as provas finais começam na próxima semana! Não se esqueçam de comparecer e tirar todas as dúvidas.",
        "Quem mais está animado para a Feira de Ciências? Mal posso esperar para ver os projetos inovadores deste ano!",
        "Parabéns a todos os alunos que participaram no concurso de robótica! Vocês foram incríveis e representaram a Escolink com distinção!",
        "Alguém tem dúvidas sobre o trabalho de história? Podemos formar um grupo de estudo para nos ajudarmos mutuamente.",
        "Atenção: Reunião de pais e encarregados de educação será no dia 20/06, às 18h, na sala magna. A vossa presença é fundamental.",
        "O refeitório terá um menu especial esta semana! Consultem o quadro de avisos para as delícias que vêm aí.",
        "Dia de campo incrível com a turma de biologia! Muita aprendizagem e diversão na natureza. A ciência ganha vida!",
        "Lembrete: O prazo para a entrega dos relatórios do projeto de matemática é amanhã! Não deixem para a última hora.",
        "Qual é a vossa disciplina favorita este ano e porquê? Compartilhem as vossas opiniões nos comentários!",
        "A biblioteca estará aberta em horário alargado durante o período de exames para vos apoiar nos estudos.",
        "Fui aceite na universidade dos meus sonhos! Obrigado, Escolink, por todo o apoio e ensinamentos que me deram!",
        "Pronto para mais uma semana de desafios e descobertas! A Escolink é o lugar certo para crescer.",
        "A apresentação de teatro escolar foi um sucesso estrondoso! Orgulho dos nossos artistas e do talento revelado.",
        "Precisamos de voluntários para a organização do baile de finalistas. Interessados contactar a coordenação da escola.",
        "Aulas de música gratuitas para iniciantes a partir do próximo mês. Inscrevam-se e descubram o vosso ritmo!",
        "Desafio de programação desta semana: criar um jogo simples em Python. Boas sorte e que a criatividade flua!",
        "Qual o melhor método de estudo para exames? Dicas e truques são sempre bem-vindos na nossa comunidade!",
        "Obrigado aos professores pela dedicação e paciência. Vocês fazem a diferença nas nossas vidas, dia após dia!",
        "A equipa de basquetebol da Escolink classificou-se para a final do campeonato! Vamos torcer juntos e dar a nossa força!",
        "Não percam a exposição de arte dos alunos do 3º ciclo, a partir de quarta-feira na galeria da escola. Obras incríveis!"
      ];

      const imagePosts = [
        { url: "https://placehold.co/600x400/FF5733/ffffff?text=Evento+Desportivo", name: "Evento Desportivo Anual" },
        { url: "https://placehold.co/600x400/33FF57/ffffff?text=Laboratorio+de+Ciencias", name: "Experiência no Laboratório de Ciências" },
        { url: "https://placehold.co/600x400/3357FF/ffffff?text=Biblioteca+Escolar", name: "Novas Aquisições na Biblioteca" },
        { url: "https://placehold.co/600x400/F0F8FF/000000?text=Dia+de+Estudo", name: "Dia de Estudo na Sala de Aula" },
        { url: "https://placehold.co/600x400/8A2BE2/ffffff?text=Apresentacao+Escolar", name: "Apresentação de Projeto Escolar" },
        { url: "https://placehold.co/600x400/FFC0CB/000000?text=Ensaio+de+Teatro", name: "Ensaio Geral da Peça de Teatro" },
        { url: "https://placehold.co/600x400/ADD8E6/000000?text=Passeio+de+Campo", name: "Passeio de Campo da Turma" },
        { url: "https://placehold.co/600x400/C0C0C0/000000?text=Formatura+Aluno", name: "Cerimónia de Formatura" },
        { url: "https://placehold.co/600x400/DAA520/ffffff?text=Dia+da+Comunidade", name: "Dia da Comunidade Escolink" },
      ];

      const videoPosts = [
        { url: "https://www.youtube.com/embed/qC1zR6A-s74?controls=0", title: "Aula Prática de Robótica" },
        { url: "https://www.youtube.com/embed/S_TMrS0hR8E?controls=0", title: "Documentário sobre História de Angola" },
        { url: "https://www.youtube.com/embed/F-wM6g2Q70w?controls=0", title: "Atividade de Educação Ambiental" },
        { url: "https://www.youtube.com/embed/M7lc1UVf-VE?controls=0", title: "Melhores Momentos do Dia Aberto" },
        { url: "https://www.youtube.com/embed/d-oA4K6nF_A?controls=0", title: "Dicas de Estudo para Exames Finais" },
      ];

      const randomUser = users[Math.floor(Math.random() * users.length)];
      const randomText = texts[Math.floor(Math.random() * texts.length)];
      // 60% texto, 30% imagem, 10% vídeo
      const postTypeChance = Math.random();
      let postType = 'text';
      let mediaData = null; // Changed to hold object {url, name/title}


      if (postTypeChance < 0.30) { // 30% de chance para imagem
        postType = 'image';
        mediaData = imagePosts[Math.floor(Math.random() * imagePosts.length)];
      } else if (postTypeChance < 0.40) { // 10% de chance para vídeo
        postType = 'video';
        mediaData = videoPosts[Math.floor(Math.random() * videoPosts.length)];
      }

      const now = new Date();
      const pastMinutes = Math.floor(Math.random() * 60 * 24 * 7) + 1; // até 7 dias atrás
      const postDate = new Date(now.getTime() - pastMinutes * 60 * 1000);

      const formatTimeAgo = (date) => {
        const seconds = Math.floor((new Date() - date) / 1000);
        if (seconds < 60) return `${seconds}s`;
        const minutes = Math.floor(seconds / 60);
        if (minutes < 60) return `${minutes}m`;
        const hours = Math.floor(minutes / 60);
        if (hours < 24) return `${hours}h`;
        const days = Math.floor(hours / 24);
        if (days < 7) return `${days}d`;
        // Para mais de uma semana, mostra a data completa
        return date.toLocaleDateString('pt-BR', { day: 'numeric', month: 'short', year: 'numeric' });
      };

      return {
        user: randomUser.name,
        avatar: randomUser.avatar,
        timestamp: formatTimeAgo(postDate),
        text: randomText,
        type: postType,
        media: mediaData ? mediaData.url : null,
        mediaName: mediaData && mediaData.name ? mediaData.name : null,
        mediaTitle: mediaData && mediaData.title ? mediaData.title : null,
        likes: Math.floor(Math.random() * 500) + 1, // Pelo menos 1 gosto
        comments: Math.floor(Math.random() * 100),
        shares: Math.floor(Math.random() * 50),
        isOnline: Math.random() < 0.3 // 30% de chance de estar online
      };
    }

    // Função para criar o elemento HTML de uma publicação
    function createPostElement(post) {
      const postDiv = document.createElement('div');
      postDiv.className = 'col-lg-12 feed-item';

      let mediaContent = '';
      let mediaCaption = ''; // Inicializa a variável da legenda

      if (post.type === 'image' && post.media) {
        // Se for uma imagem e tiver um mediaName, adiciona a legenda
        if (post.mediaName) {
          mediaCaption = `<p class="mt-2 text-muted text-center"><small><em>**${post.mediaName}**</em></small></p>`;
        }
        mediaContent = `
          <img src="${post.media}" class="post-media rounded" alt="Imagem da Publicação" onerror="this.onerror=null;this.src='https://placehold.co/600x400/6c757d/ffffff?text=Imagem+Indispon%C3%ADvel';">
          ${mediaCaption}
        `;
      } else if (post.type === 'video' && post.media) {
        mediaContent = `
          <div class="ratio ratio-16x9 post-video-wrapper">
            <iframe src="${post.media}" title="Vídeo da Publicação" allowfullscreen></iframe>
          </div>
          <p class="mt-2 text-muted text-center"><small><em>Vídeo: **${post.mediaTitle || 'Atividade Escolar'}**</em></small></p>
        `; // Adicionado um título genérico para vídeos para consistência
      }

      postDiv.innerHTML = `
        <div class="card shadow">
          <div class="post-header">
            <div class="post-avatar-container">
              <img src="${post.avatar}" alt="${post.user}" class="post-avatar">
              ${post.isOnline ? '<div class="online-status"></div>' : ''}
            </div>
            <div class="post-info ms-2">
              <h6>${post.user}</h6>
              <small>${post.timestamp}</small>
            </div>
          </div>
          <div class="card-body">
            <p>${post.text}</p>
            ${mediaContent}
          </div>
          <div class="post-reactions">
            <span class="reaction-counts">
              <i class="fas fa-thumbs-up"></i> ${post.likes} Gostos
            </span>
            <span>${post.comments} Comentários - ${post.shares} Partilhas</span>
          </div>
          <div class="post-actions">
            <button class="btn btn-sm"><i class="far fa-thumbs-up"></i> Gostar</button>
            <button class="btn btn-sm"><i class="far fa-comment-alt"></i> Comentar</button>
            <button class="btn btn-sm"><i class="far fa-share-square"></i> Partilhar</button>
          </div>
        </div>
      `;
      return postDiv;
    }

    // Lógica do Chat ESCO-ATENDENT
    document.addEventListener('DOMContentLoaded', () => {
      const chatMessages = document.getElementById('chat-messages');
      const chatInputField = document.getElementById('chat-input-field');
      const sendChatBtn = document.getElementById('send-chat-btn');

      sendChatBtn.addEventListener('click', sendMessage);
      chatInputField.addEventListener('keypress', function (e) {
        if (e.key === 'Enter') {
          sendMessage();
        }
      });

      function sendMessage() {
        const userMessage = chatInputField.value.trim();
        if (userMessage === '') return;

        // Adiciona a mensagem do usuário
        const userMsgDiv = document.createElement('div');
        userMsgDiv.className = 'chat-message user';
        userMsgDiv.textContent = userMessage;
        chatMessages.appendChild(userMsgDiv);

        // Scroll para o fim
        chatMessages.scrollTop = chatMessages.scrollHeight;

        chatInputField.value = ''; // Limpa o input

        // Resposta da IA após um pequeno atraso
        setTimeout(() => {
          const aiMsgDiv = document.createElement('div');
          aiMsgDiv.className = 'chat-message ai';
          aiMsgDiv.textContent = "A secretaria já vem tratar disso.";
          chatMessages.appendChild(aiMsgDiv);
          // Scroll para o fim novamente
          chatMessages.scrollTop = chatMessages.scrollHeight;
        }, 800);
      }

      // Função para gerar escolas fictícias
      function generateFictionalSchools() {
        const schools = [
          { name: "Escola Secundária Central", avatar: "https://placehold.co/48x48/4682B4/ffffff?text=ESC" },
          { name: "Colégio do Futuro", avatar: "https://placehold.co/48x48/DAA520/ffffff?text=CF" },
          { name: "Instituto de Tecnologia", avatar: "https://placehold.co/48x48/8B4513/ffffff?text=IT" },
          { name: "Academia de Artes e Ciências", avatar: "https://placehold.co/48x48/48D1CC/000000?text=AAC" },
          { name: "Escola Primária Alegria", avatar: "https://placehold.co/48x48/FF6347/ffffff?text=EPA" },
          { name: "Liceu Moderno", avatar: "https://placehold.co/48x48/5F9EA0/ffffff?text=LM" },
          { name: "Centro de Formação Profissional", avatar: "https://placehold.co/48x48/6A5ACD/ffffff?text=CFP" },
          { name: "Escola de Desporto e Lazer", avatar: "https://placehold.co/48x48/CD5C5C/ffffff?text=EDL" },
        ];
        return schools.slice(0, 5); // Retorna 5 escolas fictícias
      }

      // Função para criar o elemento HTML de uma escola
      function createSchoolElement(school) {
        const schoolDiv = document.createElement('div');
        schoolDiv.className = 'school-item';
        schoolDiv.innerHTML = `
          <img src="${school.avatar}" alt="${school.name}">
          <div class="school-info">
            <h6>${school.name}</h6>
          </div>
          <button class="btn btn-follow">Seguir</button>
        `;
        return schoolDiv;
      }

      // Gerar e adicionar 50 publicações
      const feedContainer = document.getElementById('feed-container');
      for (let i = 0; i < 50; i++) {
        const post = createFictionalPost();
        feedContainer.appendChild(createPostElement(post));
      }

      // Gerar e adicionar escolas na sidebar direita
      const schoolsListContainer = document.getElementById('schools-list');
      const fictionalSchools = generateFictionalSchools();
      fictionalSchools.forEach(school => {
        schoolsListContainer.appendChild(createSchoolElement(school));
      });
    });
  </script>
</body>

</html>
