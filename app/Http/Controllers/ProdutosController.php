<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutosController extends Controller
{
    public function index()
    {
        $produtos = Produto::all();
        return view("produto.index", compact('produtos'));
    }    

    public function create()
    {
        return view('produto.create');
    }

    public function store(Request $request)
    {
        Produto::create([
            'nome' => $request->input('nome'),
            'descricao' => $request->input('descricao'),
            'preco' => $request->input('preco')
        ]);
        return "Registro inserido com sucesso!";
    }

    public function show(string $id)
    {
        $produto = Produto::findOrFail($id);
        return view('produto.show', compact('produto'));
    }

    public function edit(string $id)
    {
        $produto = Produto::findOrFail($id);
        return view ("produto.edit", compact('produto'));
    }

    public function update(Request $request, string $id)
    {
        $produto = Produto::findOrFail($id);
        $produto->update([
            'nome' => $request->input('nome'),
            'descricao' => $request->input('descricao'),
            'preco' => $request->input('preco')
        ]);
        return "Registro alterado com sucesso!";
    }

    public function destroy(string $id)
    {
        $produto = Produto::findOrFail($id);
        $produto->delete();
        return "Registro deletado com sucesso!";
    }

    public function delete(string $id)
    {
        $produto = Produto::findOrFail($id);
        return view ("produto.delete", compact('produto'));
    }
}
