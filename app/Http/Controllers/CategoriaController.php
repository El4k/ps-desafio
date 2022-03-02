<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    private $categorias;

    public function __construct(Categoria $categorias)
    {
        $this->categorias = $categorias;
    }

    public function index()
    {
        $categorias = $this->categorias->all();
        return view('categoria.index', compact('categorias'));
    }

    public function create()
    {
        return view('categoria.crud');
    }

    public function store(Request $request)
    {
        $categoria = new Categoria();
        $categoria->categoria = $request->input('categoria');
        $categoria->save();
        return redirect('categoria');
    }

    public function edit($id)
    {
        $categoria = $this->categorias->find($id);
        return view('categoria.crud', compact('categoria'));
    }

    public function update(Request $request, $id)
    {
        $this->categorias->find($id)->update(['categoria' => $request->input('categoria')]);
        return redirect(route('categoria.index'))->with('success', 'Categoria alterado com sucesso!');
    }

    public function destroy($id)
    {
        $categorias = $this->categorias->find($id);
        $categorias->delete();
        return redirect(route('categoria.index'))->with('success', 'Categoria excluído com sucesso!');
    }
}
