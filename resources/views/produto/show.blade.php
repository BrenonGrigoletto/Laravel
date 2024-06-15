<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do Produto</title>
</head>
<body>
    <div class="container mt-5">
        <h1>Detalhes do Produto</h1>
        <div>
            <label><strong>ID:</strong></label>
            <p>{{ $produto->id }}</p>
        </div>
        <div>
            <label><strong>Nome:</strong></label>
            <p>{{ $produto->nome }}</p>
        </div>
        <div>
            <label><strong>Descrição:</strong></label>
            <p>{{ $produto->descricao }}</p>
        </div>
        <div>
            <label><strong>Preço: R$</strong></label>
            <p>{{ $produto->preco }}</p>
        </div>
        <a href="{{ route('produto.index') }}">Voltar</a>
    </div>
</body>
</html>
