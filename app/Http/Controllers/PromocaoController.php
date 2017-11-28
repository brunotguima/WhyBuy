<?php

namespace App\Http\Controllers;

use Auth;
use App\promocao;
use App\User;
use App\Empreendimentos;
use App\Categorias;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PromocaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create(Request $request )
    {
        $empId = $request->emp_id;
        $empreendimentos = Empreendimentos::find($empId)->get();
        $categorias = DB::table('categorias')->get();
        $mainPerfil = User::with('perfil')->find(Auth::user()->id);
        return view ('promocao.create', compact('empreendimentos','empId','mainPerfil','categorias'));
    }

    public function store(Request $request)
    {
        $mainPerfil = User::with('perfil')->find(Auth::user()->id);
        $promocaos = new Promocao;
        $promocaos ->empreendimentos_id = $request->empreendimentos_id;
        $promocaos ->categorias_id = $request->categorias;
        $promocaos ->nomeProd = $request->nomeProd;
        $promocaos ->marcaProd = $request->marcaProd;
        $promocaos ->valorProd = $request->valorProd;
        $promocaos ->categorias_id = $request->categorias;
        $promocaos ->codProd = $request->codProd;
        $promocaos ->save();
        $empreendimento = DB::table('empreendimentos')->where('id',$request->empreendimentos_id)->first();
        $slug = $empreendimento->slug;
        return redirect()->route('empreendimentos.show', ['empreendimento' => $slug])->withmainPerfil($mainPerfil)->withEmpreendimento($empreendimento);
    }

    public function edit(promocao $promocao)
    {
    }

    public function update(Request $request, promocao $promocao)
    {
    }

    public function destroy(promocao $promocaos, $id)
    {
        // o comando first estava pegando a primeira linha da tabela empreendimentos oque trazia apenas o emp 1
        $getPromocao = Promocao::find($id);
        $getEmpreendimento = DB::table('empreendimentos')->where('id', '=' ,$getPromocao->empreendimentos_id)->get();
        $promocaos = Promocao::find($id);
        $promocaos->delete();
        return redirect('/empreendimentos/'.$getEmpreendimento[0]->slug);
      // return redirect()->route('empreendimentos.show', $getEmpreendimento->slug);
    }

    public function getPromocoes($id){
        $promocoes = promocao::where('empreendimentos_id',$id)->get();
        return response()->json($promocoes);
    }
}
