<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index de Produtos</title>
</head>
<body>
    <main class="container">
        <h1>Produtos</h1>
        <a href="{{ route('produto.create') }}">Inserir Produto</a>
        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($produtos as $produto)
                <tr>
                    <td>{{ $produto->nome }}</td>
                    <td> 
                        <a href="{{ route('produto.show', $produto->id) }}">Ver</a>
                        <a href="{{ route('produto.edit', $produto->id) }}">Alterar</a> 
                        <a href="{{ route('produto.destroy', $produto->id) }}" onclick="event.preventDefault(); if(confirm('Tem certeza que deseja excluir este produto?')) document.getElementById('delete-form-{{ $produto->id }}').submit();">Excluir</a> 
                        <form id="delete-form-{{ $produto->id }}" action="{{ route('produto.destroy', $produto->id) }}" method="POST" style="display: none;">
                            @csrf
                            @method('DELETE')
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </main>
</body>
</html>
