from flask import Flask

app = Flask(__name__)


@app.route("/parque/")
def parque():
    return """
    <h1>🎡 Bem-vindo ao Parque de Diversões!</h1>
    <p>Escolha um brinquedo e divirta-se:</p>
    <ul>
        <li>Carrinho Bate-Bate</li>
        <li>Roda Gigante</li>
        <li>Montanha-Russa</li>
        <li>Carrossel</li>
        <li>Barco Direto</li>
        <li>Casa dos Sustos</li>
        <li>Torre de Queda</li>
    </ul>
    """


@app.route("/parque/carrinhobatebate/")
def carrinho_bate_bate():
    return "🚗 Você está no Carrinho Bate-Bate! Divirta-se!"


@app.route("/parque/rodagigante/")
def roda_gigante():
    return "🎡 Você está na Roda Gigante! Aproveite a vista lá do alto!"


@app.route("/parque/montanharussa/")
def montanha_russa():
    return "🎢 Você está na Montanha-Russa! Segure firme e boa aventura!"


@app.route("/parque/carrossel/")
def carrossel():
    return "🎠 Você está no Carrossel! Aproveite o passeio mágico!"


@app.route("/parque/barcodireto/")
def barco_direto():
    return "🚢 Você está no Barco Direto! Prepare-se para muita diversão!"


@app.route("/parque/casasustos/")
def casa_sustos():
    return "👻 Você está na Casa dos Sustos! Coragem, você vai precisar!"


@app.route("/parque/torrequeda/")
def torre_queda():
    return "🎯 Você está na Torre de Queda! Respire fundo e prepare-se para cair!"


if __name__ == "__main__":
    app.run(debug=True)
