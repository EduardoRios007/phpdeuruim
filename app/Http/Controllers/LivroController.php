<?php
namespace App\Http\Controllers;

use App\Models\Livro;
use Illuminate\Http\Request;

class LivroController extends Controller
{
    public function index()
    {
        return Livro::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required',
            'autor' => 'required',
            'ano' => 'required|integer',
            'genero' => 'required',
        ]);

        return Livro::create($request->all());
    }

    public function show(Livro $livro)
    {
        return $livro;
    }

    public function update(Request $request, Livro $livro)
    {
        $livro->update($request->all());
        return $livro;
    }

    public function destroy(Livro $livro)
    {
        $livro->delete();
        return response()->json(['message' => 'Livro deletado']);
    }
}