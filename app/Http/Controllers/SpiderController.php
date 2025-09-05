<?php

namespace App\Http\Controllers;

use App\Models\Spider;
use Illuminate\Http\Request;

class SpiderController extends Controller
{
    // Listar todos
    public function index()
    {
        return Spider::all();
    }

    // Criar novo
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'universo' => 'required',
            'poder' => 'required',
            'primeira_aparicao' => 'required',
        ]);

        return Spider::create($request->all());
    }

    // Mostrar um específico
    public function show($id)
    {
        return Spider::findOrFail($id);
    }

    // Atualizar
    public function update(Request $request, $id)
    {
        $spider = Spider::findOrFail($id);
        $spider->update($request->all());
        return $spider;
    }

    // Deletar
    public function destroy($id)
    {
        return Spider::destroy($id);
    }
}
