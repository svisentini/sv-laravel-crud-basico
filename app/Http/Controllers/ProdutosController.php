<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutosController extends Controller
{
    public function create() {
        return view('produtos.create');
    }

    public function store(Request $request) {
        // Debug and Die
        // dd($request->all());

        Produto::create([
            'nome' => $request->nome,
            'custo' => $request->custo,
            'preco' => $request->preco,
            'quantidade' => $request->quantidade,
        ]);
        return "Produto criado com sucesso";

    }

    public function show($id) {
        $produto = Produto::findOrFail($id);
        return view('produtos.show',['prod' => $produto]);
    }

    public function edit($id) {
        $produto = Produto::findOrFail($id);
        return view('produtos.edit',['prod' => $produto]);
    }

    public function updateProduto(Request $request, $id) {
        $produto = Produto::findOrFail($id);

        $produto->update([
            'nome' => $request->nome,
            'custo' => $request->custo,
            'preco' => $request->preco,
            'quantidade' => $request->quantidade,
        ]);
        return "Produto Atualizado com sucesso!";

    }

    public function delete($id) {
        $produto = Produto::findOrFail($id);
        return view('produtos.delete',['prod' => $produto]);

    }

    public function destroy($id) {
        $produto = Produto::findOrFail($id);
        $produto->delete();

        return "Produto Excluído com sucesso!";

    }

}
