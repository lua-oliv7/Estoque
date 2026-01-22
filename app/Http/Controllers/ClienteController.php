<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function store(Request $request) 
    {
        $cliente = Cliente::create([
            'nome' => $request->nome,
            'cpf' => $request->cpf,
            'idade' => $request->idade
        ]);

        return response()->json($cliente);
    }

    public function index() 
    {
        $cliente = Cliente::all();

        return response()->json($cliente);
    }

    public function show($id) 
    {
        $cliente = Cliente::find($id);

        if(!$cliente) {
            return response()->json(['message' => 'Cliente não encontrado']);
        }

        return response()->json($cliente);
    }

    public function update(Request $request, $id) 
    {
        $cliente = Cliente::find($id);

        if(!$cliente) {
            return response()->json(['message' => 'Cliente não encontrado']);
        }

        if(isset($cliente)) {
            $cliente = $request->nome;
        }

        if(isset($cliente)) {
            $cliente = $request->cpf;
        }

        if(isset($cliente)) {
            $cliente = $request->idade;
        }

        $cliente->update();

        return response()->json($cliente);
    }

    public function delete($id) 
    {
        $cliente = Cliente::find($id);

        if(!$cliente) {
            return response()->json(['message' => 'Cliente não encontrado']);
        }

        $cliente->delete($id);

        return response()->json(['message' => 'Cliente deletado com sucesso']);
    }
}
