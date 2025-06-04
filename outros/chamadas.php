<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Chamada - Passo a Passo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa;
    }
    .chamada-container {
      max-width: 500px;
      margin: 50px auto;
      text-align: center;
    }
    .aluno-card {
      display: none;
      padding: 20px;
      border-radius: 10px;
      background: white;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
      transition: all 0.5s ease-in-out;
    }
    .aluno-card.active {
      display: block;
    }
    .aluno-img {
      width: 100px;
      height: 100px;
      border-radius: 50%;
      object-fit: cover;
      margin-bottom: 15px;
    }
    .botoes-chamada button {
      margin: 10px;
      width: 120px;
    }
    .tabela-final {
      margin-top: 30px;
      display: none;
    }
    .tabela-final.active {
      display: block;
    }
    .status-icon {
      font-size: 1.2rem;
    }
  </style>
</head>
<body>

<div class="chamada-container">
  <h2>Chamada</h2>
  <button class="btn btn-primary" id="comecarBtn"><i class="fas fa-play"></i> Começar Chamada</button>

  <!-- Card de Aluno -->
  <div id="alunoCard" class="aluno-card mt-4">
    <img id="fotoAluno" src="" alt="Foto do aluno" class="aluno-img">
    <h4 id="nomeAluno">Nome do Aluno</h4>
    <p id="infoAluno">Turma: -- | Turno: -- | Idade: --</p>
    
    <div class="botoes-chamada">
      <button class="btn btn-success" onclick="registrarPresenca(true)">
        <i class="fas fa-check-circle"></i> Presente
      </button>
      <button class="btn btn-danger" onclick="registrarPresenca(false)">
        <i class="fas fa-times-circle"></i> Falta
      </button>
    </div>
  </div>

  <!-- Lista Final -->
  <div id="resumoFinal" class="tabela-final mt-4">
    <h4>Resumo da Chamada</h4>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>Nome</th>
          <th>Status</th>
        </tr>
      </thead>
      <tbody id="tabelaPresenca">
        <!-- Preenchido dinamicamente -->
      </tbody>
    </table>
    <button class="btn btn-primary mt-3" onclick="enviarChamada()">
      <i class="fas fa-paper-plane"></i> Enviar Chamada
    </button>
  </div>
</div>

<script>
  const alunos = [
    {
      nome: "kelson jair",
      turma: "2ºA",
      turno: "Manhã",
      idade: 16,
      foto: "../fto/jair.jpeg"
    },
    {
      nome: "eliudes esqueci kk",
      turma: "2ºA",
      turno: "Manhã",
      idade: 17,
      foto: "../fto/logo.jpeg"
    },
    {
      nome: "Marcio esqueci kk",
      turma: "2ºA",
      turno: "Manhã",
      idade: 16,
      foto: "../fto/logo.jpg"
    }
    // Adicione mais alunos conforme necessário
  ];

  let indexAtual = 0;
  const presencas = [];

  const comecarBtn = document.getElementById("comecarBtn");
  const alunoCard = document.getElementById("alunoCard");
  const nomeAluno = document.getElementById("nomeAluno");
  const infoAluno = document.getElementById("infoAluno");
  const fotoAluno = document.getElementById("fotoAluno");
  const resumoFinal = document.getElementById("resumoFinal");
  const tabelaPresenca = document.getElementById("tabelaPresenca");

  comecarBtn.addEventListener("click", () => {
    comecarBtn.style.display = "none";
    mostrarAluno();
  });

  function mostrarAluno() {
    if (indexAtual >= alunos.length) {
      alunoCard.classList.remove("active");
      mostrarResumoFinal();
      return;
    }

    const aluno = alunos[indexAtual];
    nomeAluno.textContent = `#${indexAtual + 1} - ${aluno.nome}`;
    infoAluno.textContent = `Turma: ${aluno.turma} | Turno: ${aluno.turno} | Idade: ${aluno.idade}`;
    fotoAluno.src = aluno.foto;
    alunoCard.classList.add("active");
  }

  function registrarPresenca(presente) {
    presencas.push({
      nome: alunos[indexAtual].nome,
      status: presente ? "presente" : "falta"
    });

    alunoCard.classList.remove("active");

    setTimeout(() => {
      indexAtual++;
      mostrarAluno();
    }, 400);
  }

  function mostrarResumoFinal() {
    tabelaPresenca.innerHTML = "";
    presencas.forEach(aluno => {
      const row = document.createElement("tr");
      row.innerHTML = `
        <td>${aluno.nome}</td>
        <td class="${aluno.status === 'presente' ? 'text-success' : 'text-danger'}">
          ${aluno.status === 'presente' ? '<i class="fas fa-check status-icon"></i>' : '<i class="fas fa-times status-icon"></i>'}
        </td>
      `;
      tabelaPresenca.appendChild(row);
    });

    resumoFinal.classList.add("active");
  }

  function enviarChamada() {
    alert("Chamada enviada com sucesso!");
    // Aqui você pode enviar os dados via API, salvar no banco, etc.
  }
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>