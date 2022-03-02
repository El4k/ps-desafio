<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Nacionalidade;

class NacionalidadeController extends Controller
{
    private $nacionalidades;

    public function __construct(Nacionalidade $nacionalidades)
    {
        $this->nacionalidades = $nacionalidades;
    }

    public function index()
    {
        $nacionalidades = $this->nacionalidades->all();
        return view('nacionalidade.index', compact('nacionalidades'));
    }

    public function create()
    {
        return view('nacionalidade.crud');
    }

    public function store(Request $request)
    {
        $nacionalidade = new Nacionalidade();
        $nacionalidade->nacionalidade = $request->input('nacionalidade');
        $nacionalidade->save();
        return redirect('nacionalidade');
    }

    public function edit($id)
    {
        $nacionalidade = $this->nacionalidades->find($id);
        return view('nacionalidade.crud', compact('nacionalidade'));
    }

    public function update(Request $request, $id)
    {
        $this->nacionalidades->find($id)->update(['nacionalidade' => $request->input('nacionalidade')]);
        return redirect(route('nacionalidade.index'))->with('success', 'Nacionalidade alterado com sucesso!');
    }

    public function destroy($id)
    {
        $nacionalidades = $this->nacionalidades->find($id);
        $nacionalidades->delete();
        return redirect(route('nacionalidade.index'))->with('success', 'Nacionalidade excluído com sucesso!');
    }
}
