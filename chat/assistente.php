<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Assistente Escolar</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />

  <style>
    body {
      background-color: #f0f2f5;
      font-family: Arial, sans-serif;
    }

    .chat-container {
      max-width: 600px;
      margin: 30px auto;
      border: 1px solid #ccc;
      border-radius: 12px;
      display: flex;
      flex-direction: column;
      height: 90vh;
      overflow: hidden;
      background-color: white;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }

    .chat-header {
      display: flex;
      align-items: center;
      padding: 12px;
      background-color: #0056b3;
      color: white;
    }

    .avatar-wrapper {
      position: relative;
      margin-right: 10px;
    }

    .avatar-wrapper img {
      width: 40px;
      height: 40px;
      border-radius: 50%;
    }

    .status-indicator {
      position: absolute;
      bottom: 0;
      right: 0;
      width: 10px;
      height: 10px;
      background-color: #28a745;
      border-radius: 50%;
      border: 2px solid white;
    }

    #chat {
      flex-grow: 1;
      padding: 15px;
      overflow-y: auto;
      background-color: #f8f9fa;
      display: flex;
      flex-direction: column;
    }

    #typing-indicator {
      padding: 8px;
      color: #666;
      font-style: italic;
    }

    .chat-input {
      display: flex;
      border-top: 1px solid #ccc;
    }

    .chat-input input {
      flex-grow: 1;
      padding: 10px;
      border: none;
      outline: none;
    }

    .chat-input button {
      padding: 0 20px;
      background-color: #0d6efd;
      color: white;
      border: none;
    }

    .mensagem {
      max-width: 75%;
      padding: 10px 14px;
      margin: 6px 0;
      border-radius: 18px;
      clear: both;
      line-height: 1.4;
      word-break: break-word;
    }

    .mensagem.usuario {
      background-color: #d1ecf1;
      color: #0c5460;
      margin-left: auto;
      text-align: right;
    }

    .mensagem.bot {
      background-color: #e2e3e5;
      color: #383d41;
      margin-right: auto;
      text-align: left;
    }
  </style>
</head>

<body>
  <div class="chat-container">
    <div class="chat-header">
      <div class="avatar-wrapper">
        <img src="../fto/logo.jpeg" alt="Assistente Escolar">
        <div class="status-indicator"></div>
      </div>
      <div class="info">
        <h5>Assistente Escolar SMARTBITS</h5>
        <small>Online</small>
      </div>
    </div>

    <div id="chat">
      <!-- Mensagens serão adicionadas aqui -->
    </div>

    <div id="typing-indicator" class="d-none">👩‍🏫 Assistente está digitando...</div>

    <div class="chat-input">
      <input type="text" id="pergunta" placeholder="Digite sua pergunta para a assistente escolar..." />
      <button id="enviar-btn" onclick="enviar()">Enviar</button>
    </div>
  </div>

  <!-- Bootstrap Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../js/ia.js"></script>
</body>
</html>
