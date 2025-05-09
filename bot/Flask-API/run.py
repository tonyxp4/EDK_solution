from flask import Flask, request, jsonify
from flask_cors import CORS
from chatterbot import ChatBot
from chatterbot.trainers import ChatterBotCorpusTrainer

# Create a new chat bot named Charlie
chatbot = ChatBot('Charlie')

trainer = ChatterBotCorpusTrainer(chatbot)
trainer.train(
    "chatterbot.corpus.portuguese",
    "chatterbot.corpus.portuguese.conversations",
    "chatterbot.corpus.portuguese.greetings",
)

app = Flask(__name__)
CORS(app)

@app.route('/chat', methods=['POST'])
def conversa():
    data = request.get_json()
    mensagem = data.get('mensagem')
    if mensagem:
        resposta = chatbot.get_response(mensagem)
        return jsonify({'resposta': str(resposta)})
    else:
        return jsonify({'error': 'No message provided'}), 400

app.run(host = '0.0.0.0', port = 5000, debug=True)