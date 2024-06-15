<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Exclusão de Produtos</title>
</head>
<body>
    <div class="container mt-5">
        <h1>Formulário de Exclusão de Produtos</h1>
        <div>
            <p>Realmente deseja excluir este produto?</p>
        </div>
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
        <form action="{{ route('produto.destroy', $produto->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Excluir</button>
            <a href="{{ route('produto.index') }}">Cancelar</a>
        </form>
    </div>
</body>
</html>
