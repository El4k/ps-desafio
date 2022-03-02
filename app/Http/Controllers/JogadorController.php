<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Models\Jogador;
use App\Models\Nacionalidade;

class JogadorController extends Controller
{
    private $jogadores;
    private $nacionalidades;

    public function __construct(Jogador $jogadores, Nacionalidade $nacionalidades)
    {
        $this->jogadores = $jogadores;
        $this->nacionalidades = $nacionalidades;
    }

    public function index()
    {
        $jogadores = $this->jogadores->all();
        return view('jogador.index', compact('jogadores'));
    }

    public function create()
    {
        $nacionalidades = $this->nacionalidades->all();
        return view('jogador.crud', compact('nacionalidades'));
    }

    public function store(Request $request)
    {
        $jogador = new Jogador();
        $jogador->nome = $request->input('nome');
        $jogador->data = $request->input('data');
        $imagem = $request->file('imagem')->store('jogadores',  'public');
        $jogador->imagem = $imagem;
        $jogador->nacionalidade_id = $request->input('nacionalidade_id');
        $jogador->save();

        return redirect('jogador');
    }

    public function show($id)
    {
        $jogador = $this->jogadores->find($id);
        $nacionalidade =  $this->nacionalidades->find($jogador->nacionalidade_id);
        return json_encode([$jogador, $nacionalidade]);
    }

    public function edit($id)
    {
        $jogador = $this->jogadores->find($id);
        return view('jogador.crud', compact('jogador'));
    }

    public function update(Request $request, $id)
    {
        $datas = $request->all();
        $jogador = $this->jogadores->find($id);

        //Verificando se o arquivode imagem é válido
        if ($request->hasFile('imagem')) {
            Storage::delete('public/' . $jogador->imagem); //excluindo a imagem
            $datas['imagem'] = $request->file('imagem')->store('jogadores', 'public');
        }
        $jogador->update($datas);
        return redirect(route('jogador.index'))->with('success', 'Jogador alterado com sucesso!');
    }

    public function destroy($id)
    {
        $jogadores = $this->jogadores->find($id);
        $jogadores->delete();
        return redirect(route('jogador.index'))->with('success', 'Jogador excluído com sucesso!');
    }
}
