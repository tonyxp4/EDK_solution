// ia.js

document.addEventListener("DOMContentLoaded", () => {
  const chatInput = document.getElementById("pergunta");
  const chatMessages = document.getElementById("chat");
  const sendBtn = document.getElementById("enviar-btn");

  const respostasMap = {
    "aluno": "Informações sobre alunos estão disponíveis na aba 'Alunos'.",
    "matricula": "Para realizar a matrícula de um aluno, acesse a aba 'Alunos' e clique em 'Novo Aluno'.",
    "inscrição": "A inscrição de alunos pode ser feita na aba 'Alunos'.",
    "professor": "Os dados dos professores podem ser gerenciados na seção 'Equipe Escolar'.",
    "docente": "Os docentes são adicionados na seção 'Equipe Escolar'.",
    "faltas": "O controle de faltas está disponível na aba 'Frequência'.",
    "presença": "Você pode registrar a presença dos alunos em 'Frequência'.",
    "boletim": "Os boletins são gerados automaticamente após o lançamento de notas.",
    "notas": "As notas são lançadas pelos professores na aba 'Notas'.",
    "avaliacao": "As avaliações são configuradas em 'Notas > Avaliações'.",
    "senha": "Clique em 'Esqueci minha senha' na tela de login para recuperar.",
    "recuperar senha": "A recuperação de senha pode ser feita pela tela de login.",
    "esqueci senha": "Na tela de login, clique em 'Esqueci minha senha'.",
    "diretor": "O diretor pode acessar funções administrativas em 'Administração'.",
    "gestor": "Gestores escolares usam a aba 'Administração' para configurações.",
    "boa noite": "Boa noite! Em que posso ajudar?",
    "bom dia": "Bom dia! Como posso te ajudar hoje?",
    "boa tarde": "Boa tarde! Em que posso ser útil?"
    // Aqui você pode expandir até 12.000 entradas
  };

  function adicionarMensagem(texto, tipo) {
    const div = document.createElement("div");
    div.classList.add("mensagem", tipo); // tipo: 'usuario' ou 'bot'
    div.innerText = texto;
    chatMessages.appendChild(div);
    chatMessages.scrollTop = chatMessages.scrollHeight;
  }

  function responder(pergunta) {
    const perguntaMinuscula = pergunta.toLowerCase();
    for (let chave in respostasMap) {
      if (perguntaMinuscula.includes(chave)) {
        return respostasMap[chave];
      }
    }
    return "Aguarde um instante, um atendente irá responder em alguns minutos.";
  }

  function enviar() {
    const mensagem = chatInput.value.trim();
    if (mensagem !== "") {
      adicionarMensagem(mensagem, "usuario");
      chatInput.value = "";
      setTimeout(() => {
        const resposta = responder(mensagem);
        adicionarMensagem(resposta, "bot");
      }, 500);
    }
  }

  sendBtn.addEventListener("click", enviar);

  chatInput.addEventListener("keypress", (e) => {
    if (e.key === "Enter") {
      enviar();
    }
  });
});
