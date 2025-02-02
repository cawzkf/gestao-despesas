<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriaController extends Controller
{
    /**
     * Exibir todas as categorias.
     */
    public function view()
    {
        $categorias = Categoria::all(); // Buscar todas as categorias do banco

        return view('app', compact('categorias'));
    }
    
    /**
     * Criar uma nova categoria.
     */
    public function create(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            // 'tipo' => 'required|in:entrada,saida',
            'cor'  => 'required|string|size:7' // Deve ser um código hexadecimal, ex: #ff5733
        ]);

        $categoria = Categoria::create([
            'nome' => $request->nome,
            'tipo' => $request->tipo,
            'cor'  => $request->cor
        ]);

       return response()->json([
            'message' => 'Categoria criada com sucesso!',
            'categoria' => $categoria
        ], 201);
    }

    /**
     * Atualizar uma categoria existente.
     */
    public function update(Request $request, $id)
    {
        $categoria = Categoria::find($id);

        if (!$categoria) {
            return response()->json(['message' => 'Categoria não encontrada!'], 404);
        }

        $request->validate([
            'nome' => 'sometimes|string|max:255',
            // 'tipo' => 'sometimes|in:entrada,saida',
            'cor'  => 'sometimes|string|size:7'
        ]);

        $categoria->update($request->all());

        return response()->json([
            'message' => 'Categoria atualizada com sucesso!',
            'categoria' => $categoria
        ]);
    }

    /**
     * Remover uma categoria.
     */
    public function destroy($id)
    {
        $categoria = Categoria::find($id);

        if (!$categoria) {
            return response()->json(['message' => 'Categoria não encontrada!'], 404);
        }

        $categoria->delete();

        return response()->json(['message' => 'Categoria deletada com sucesso!']);
    }
}
