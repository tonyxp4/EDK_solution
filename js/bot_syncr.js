const chat = document.getElementById('chat');

function adicionarMensagem(texto, classe) {
    const div = document.createElement('div');
    div.className = `msg ${classe}`;
    div.innerText = texto;
    chat.appendChild(div);
    chat.scrollTop = chat.scrollHeight;
}

async function enviar() {
    const input = document.getElementById('pergunta');
    const pergunta = input.value.trim();
    if (!pergunta) return;

    adicionarMensagem('Você: ' + pergunta, 'user');
    input.value = '';

    try {
    const resposta = await fetch('http://127.0.0.1:5000/chat', {
        method: 'POST',
        headers: {
        'Content-Type': 'application/json'
        },
        body: JSON.stringify({ mensagem: pergunta })
    });

    const dados = await resposta.json();
    adicionarMensagem('Bot: ' + dados.resposta, 'bot');
    } catch (erro) {
    adicionarMensagem('Erro: não foi possível conectar ao servidor.', 'bot');
    }
}