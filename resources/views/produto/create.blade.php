<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Inserção de Produtos</title>
</head>
<body>
    <div class="container mt-5">
        <h1>Formulário de Inserção de Produtos</h1>
        <form action="{{route('produto.store')}}" method="POST">
            @CSRF
            <div class="mb-3">
                <label for="nome">Insira o Nome do Produto</label>
                <input type="text" class="form-control" name="nome" id="nome"> <br/>
            </div>
            <div class="mb-3">
                <label for="descricao">Insira a Descrição do Produto</label>
                <textarea class="form-control" name="descricao" id="descricao" rows="3"></textarea> <br/>
            </div>
            <div class="mb-3">
                <label for="preco">Insira o Preço do Produto</label>
                <input type="number" step="0.01" class="form-control" name="preco" id="preco"> <br/>
            </div>
            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
    </div>
</body>
</html>
