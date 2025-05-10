const userAvatar = "../fto/jair.jpeg";
const botAvatar = "../fto/logo.jpeg";

async function enviar() {
  const input = document.getElementById("pergunta");
  const msg = input.value.trim();
  if (!msg) return;

  addMensagem("user", msg);
  input.value = "";
  mostrarDigitando(true);

  try {
    const resposta = await fetch('http://127.0.0.1:5000/chat', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json'
      },
      body: JSON.stringify({ mensagem: msg })
    });

    const dados = await resposta.json();
    
    setTimeout(() => {
      mostrarDigitando(false);
      addMensagem("bot", gerarResposta(dados.resposta));
    }, 1200);

  } catch (erro) {
    mostrarDigitando(false);
    addMensagem("bot", "Erro: não foi possível conectar ao servidr.");
  }
}

function addMensagem(tipo, texto) {
  const chat = document.getElementById("chat");
  const msgDiv = document.createElement("div");
  msgDiv.className = `message ${tipo}`;

  const avatar = document.createElement("img");
  avatar.src = tipo === "user" ? userAvatar : botAvatar;
  avatar.className = "avatar";

  const textDiv = document.createElement("div");
  textDiv.className = "text";
  textDiv.textContent = texto;

  msgDiv.appendChild(avatar);
  msgDiv.appendChild(textDiv);
  chat.appendChild(msgDiv);

  chat.scrollTop = chat.scrollHeight;
}

function mostrarDigitando(mostrar) {
  document.getElementById("typing-indicator").classList.toggle("d-none", !mostrar);
}

function gerarResposta(resposta) {
  return `"${resposta}"`;
}