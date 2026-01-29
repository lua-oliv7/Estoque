<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Produto;
use App\Models\Saida;
use Illuminate\Http\Request;

class SaidaController extends Controller
{
    public function store(Request $request)
    {
        $cliente = Cliente::find($request->id_cliente);
        $produto = Produto::find($request->id_produto);

        if ($request->id_cliente == null) {
            return response()->json(['message' => 'Cliente não encontrado']);
        }

        if (!$produto) {
            return response()->json(['message' => 'Produto não encontrado']);
        }

        if ($produto->faixa_etaria_minima > $cliente->idade) {
            return response()->json(['message' => 'O cliente não possui a idade mínima necessária']);
        } else {
            $saida = Saida::create([
                'id_cliente' => $request->id_cliente,
                'id_produto' => $request->id_produto,
                'quantidade' => $request->quantidade
            ]);

            $produto->quantidade_estoque = $produto->quantidade_estoque - $request->quantidade;

            $produto->update();

            return response()->json($saida);
        }
    }

    public function index()
    {
        $saida = Saida::all();

        return response()->json($saida);
    }

    public function delete($id)
    {
        $saida = Saida::find($id);

        if ($saida == null) {
            return response()->json(['message' => 'Saida não encontrada']);
        }

        else {
            $produto = Produto::find($saida->id_produto);

            $saida->delete();

            $produto->quantidade_estoque -= $saida->quantidade;

            $produto->update();

            return response()->json(['message' => 'Produto deletado com sucesso']);
        }
    }
}


/* 
Regra 1 – Faixa Etária 
• Verifique a idade do cliente 
• Compare com a faixa_etaria_minima do produto 
• Se o cliente tiver idade menor que a permitida: 
o o sistema deve impedir a saída 
o retornar uma mensagem informando que o cliente não possui idade para 
comprar o produto

Regra 2 – Atualização do Estoque 
• Ao registrar uma saída válida: 
o a quantidade deve ser subtraída do estoque do produto 
• Ao excluir uma saída: 
o a quantidade deve ser somada ao estoque do produto
*/