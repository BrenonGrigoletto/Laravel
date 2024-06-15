<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    public function index()
    {
        $clientes = Cliente::all();
        return view("cliente.index", compact('clientes'));
    }

    public function create()
    {
        return view('cliente.create');
    }

    public function store(Request $request)
    {
        Cliente::create([
            'nome' => $request->input('nome'),
            'telefone' => $request->input('telefone'),
            'email' => $request->input('email')
        ]);
        return "Registro inserido!";
    }

    public function edit(string $id)
    {
        $cliente = Cliente::findOrFail($id);
        return view("cliente.edit", compact('cliente'));
    }

    public function update(Request $request, string $id)
    {
        $cliente = Cliente::findOrFail($id);
        $cliente->update([
            'nome' => $request->input('nome'),
            'telefone' => $request->input('telefone'),
            'email' => $request->input('email')
        ]);
        return "Registro alterado com sucesso!";
    }

    public function destroy(string $id)
    {
        $cliente = Cliente::findOrFail($id);
        $cliente->delete();
        return "Registro excluído com sucesso!";
    }

    public function delete(string $id)
    {
        $cliente = Cliente::findOrFail($id);
        return view("cliente.delete", compact('cliente'));
    }
}
