<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Lançamento de Notas</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
  <style>
    .hidden { display: none; }
  </style>
</head>
<body>
<div class="container mt-4">
  <h2 class="text-center mb-4">Lançar Notas dos Alunos</h2>

  <!-- Passo 1: Escolher tipo -->
  <div class="mb-4">
    <label class="form-label"><strong>Tipo de Nota:</strong></label>
    <select class="form-select" id="tipoNota" onchange="atualizarFormulario()">
      <option selected disabled>-- Selecione --</option>
      <option value="avaliacao">Avaliação Contínua</option>
      <option value="prova">Nota de Prova</option>
    </select>
  </div>

  <!-- Passo 2: Tipo específico -->
  <div id="formAvaliacao" class="mb-3 hidden">
    <label class="form-label">Tipo de Avaliação</label>
    <select class="form-select" id="tipoAvaliacao">
      <option value="participacao">Participação</option>
      <option value="ficha">Ficha</option>
      <option value="trabalho">Trabalho</option>
      <option value="outro">Outro</option>
    </select>
  </div>

  <div id="formProva" class="row mb-3 hidden">
    <div class="col-md-6">
      <label class="form-label">Trimestre</label>
      <select class="form-select" id="trimestre">
        <option value="1º Trimestre">1º Trimestre</option>
        <option value="2º Trimestre">2º Trimestre</option>
        <option value="3º Trimestre">3º Trimestre</option>
      </select>
    </div>
    <div class="col-md-6">
      <label class="form-label">Tipo de Prova</label>
      <select class="form-select" id="tipoProva">
        <option value="professor">Prova do Professor</option>
        <option value="orientada">Prova Orientada</option>
        <option value="ministerio">Prova do Ministério</option>
      </select>
    </div>
  </div>

  <!-- Passo 3: Dados do aluno -->
  <form id="formNotas" class="row g-3">
    <div class="col-md-6">
      <label class="form-label">Nome do Aluno</label>
      <input type="text" class="form-control" id="nomeAluno" required>
    </div>
    <div class="col-md-3">
      <label class="form-label">Classe</label>
      <select class="form-select" id="classe" required>
        <option>7ª</option><option>8ª</option><option>9ª</option>
        <option>10ª</option><option>11ª</option><option>12ª</option>
      </select>
    </div>
    <div class="col-md-3">
      <label class="form-label">Sala</label>
      <select class="form-select" id="sala" required>
        <option>A</option><option>B</option><option>C</option>
      </select>
    </div>

    <div class="col-md-6">
      <label class="form-label">Disciplina</label>
      <input type="text" class="form-control" id="disciplina" required>
    </div>
    <div class="col-md-6">
      <label class="form-label">Nota</label>
      <input type="number" class="form-control" id="nota" min="0" max="20" step="0.1" required>
    </div>

    <div class="col-12 text-center">
      <button type="submit" class="btn btn-success"><i class="fas fa-plus-circle"></i> Adicionar Nota</button>
    </div>
  </form>

  <!-- Tabela de Notas -->
  <div class="mt-5">
    <h4 class="text-center">Notas Lançadas</h4>
    <table class="table table-bordered table-striped">
      <thead class="table-dark">
        <tr>
          <th>Aluno</th><th>Classe</th><th>Sala</th><th>Disciplina</th>
          <th>Nota</th><th>Tipo</th><th>Detalhes</th>
        </tr>
      </thead>
      <tbody id="tabelaNotas"></tbody>
    </table>

    <div class="text-end">
      <button class="btn btn-primary" onclick="enviarNotas()">
        <i class="fas fa-paper-plane"></i> Enviar Todas
      </button>
    </div>
  </div>
</div>

<script>
  const formNotas = document.getElementById('formNotas');
  const tipoNota = document.getElementById('tipoNota');
  const formAvaliacao = document.getElementById('formAvaliacao');
  const formProva = document.getElementById('formProva');
  const tabelaNotas = document.getElementById('tabelaNotas');
  const dados = [];

  function atualizarFormulario() {
    const tipo = tipoNota.value;
    formAvaliacao.classList.toggle('hidden', tipo !== 'avaliacao');
    formProva.classList.toggle('hidden', tipo !== 'prova');
  }

  formNotas.addEventListener('submit', function(e) {
    e.preventDefault();

    const aluno = document.getElementById('nomeAluno').value;
    const classe = document.getElementById('classe').value;
    const sala = document.getElementById('sala').value;
    const disciplina = document.getElementById('disciplina').value;
    const nota = document.getElementById('nota').value;
    const tipo = tipoNota.value;

    let detalhe = '';
    if (tipo === 'avaliacao') {
      detalhe = document.getElementById('tipoAvaliacao').value;
    } else if (tipo === 'prova') {
      const trimestre = document.getElementById('trimestre').value;
      const tipoProva = document.getElementById('tipoProva').value;
      detalhe = `${trimestre} - ${tipoProva}`;
    }

    const row = tabelaNotas.insertRow();
    row.innerHTML = `
      <td>${aluno}</td><td>${classe}</td><td>${sala}</td><td>${disciplina}</td>
      <td>${nota}</td><td>${tipo === 'avaliacao' ? 'Avaliação' : 'Prova'}</td><td>${detalhe}</td>
    `;

    dados.push({ aluno, classe, sala, disciplina, nota, tipo, detalhe });
    formNotas.reset();
  });

  function enviarNotas() {
    alert("Notas enviadas com sucesso!");
    console.log("Notas:", dados);
  }
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>