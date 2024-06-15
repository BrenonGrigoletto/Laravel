<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edita Produto</title>
</head>
<body>
    <div class="container mt-5">
        <h1>Formulário de Alteração de Produtos</h1>
        <form action="{{ route('produto.update', $produto->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nome">Insira o Nome do Produto</label>
                <input type="text" name="nome" id="nome" value="{{ $produto->nome }}"> <br/>
            </div>
            <div class="mb-3">
                <label for="descricao">Insira a Descrição do Produto</label>
                <input type="text" name="descricao" id="descricao" value="{{ $produto->descricao }}"> <br/>
            </div>
            <div class="mb-3">
                <label for="preco">Insira o Preço do Produto</label>
                <input type="number" step="0.01" name="preco" id="preco" value="{{ $produto->preco }}"> <br/>
            </div>
            <button type="submit">Salvar</button>
        </form>
    </div>
</body>
</html>
