/* chat.css */

/* Container do chat */
.chat-container {
    max-width: 600px;
    margin: 20px auto;
    border: 1px solid #ccc;
    border-radius: 12px;
    display: flex;
    flex-direction: column;
    height: 80vh;
    overflow: hidden;
    box-shadow: 0 4px 12px rgba(0,0,0,0.1);
  }
  
  /* Cabeçalho do chat */
  .chat-header {
    display: flex;
    align-items: center;
    padding: 12px;
    background-color: #0056b3;
    color: white;
    font-weight: bold;
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
  
  /* Corpo do chat */
  #chat {
    flex-grow: 1;
    padding: 10px;
    overflow-y: auto;
    background-color: #f8f9fa;
  }
  
  /* Indicador de digitação */
  #typing-indicator {
    padding: 8px;
    color: #666;
    font-style: italic;
  }
  
  /* Campo de entrada */
  .chat-input {
    display: flex;
    border-top: 1px solid #ccc;
  }
  
  .chat-input input {
    flex-grow: 1;
    padding: 10px;
    border: none;
    border-radius: 0;
    outline: none;
  }
  
  .chat-input button {
    padding: 0 20px;
    background-color: #0d6efd;
    color: white;
    border: none;
  }
  
  /* Mensagens */
  .mensagem {
    max-width: 75%;
    padding: 10px 14px;
    margin: 8px 0;
    border-radius: 18px;
    clear: both;
    line-height: 1.4;
    word-break: break-word;
  }
  
  /* Mensagem do usuário */
  .mensagem.usuario {
    background-color: #d1ecf1;
    color: #0c5460;
    margin-left: auto;
    text-align: right;
  }
  
  /* Mensagem do bot */
  .mensagem.bot {
    background-color: #e2e3e5;
    color: #383d41;
    margin-right: auto;
    text-align: left;
  }
  