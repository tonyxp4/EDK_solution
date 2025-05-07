from flask import Flask, request, jsonify
from flask_cors import CORS
from chatterbot import ChatBot
from chatterbot.trainers import ChatterBotCorpusTrainer

chatbot = ChatBot('Charlie', read_only=True)

trainer = ChatterBotCorpusTrainer(chatbot)
trainer.train(
    "chatterbot.corpus.portuguese"
)


app = Flask(__name__)
CORS(app)

@app.route('/', methods=['GET'])
def home():
    return jsonify({'message': 'API de Perguntas e Respostas'}), 200

@app.route('/', methods=['POST'])
def perguntar():
    data = request.get_json()
    pergunta = data.get('pergunta')

    if not pergunta:
        return jsonify({'erro': 'Campo "pergunta" é obrigatório'}), 400

    resposta = chatbot.get_response(pergunta)
    return jsonify({'resposta': str(resposta)}), 200

app.run(host='0.0.0.0', port=8000, debug=True)