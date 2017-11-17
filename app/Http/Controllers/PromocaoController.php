<?php

namespace App\Http\Controllers;

use Auth;
use App\promocao;
use App\User;
use App\Empreendimentos;
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
        $empreendimentos = Empreendimentos::all();
        return view ('promocao.create', compact('empreendimentos'));
    }

    public function store(Request $request)
    {
        $mainPerfil = User::with('perfil')->find(Auth::user()->id);
        $promocaos = new Promocao;
        $promocaos ->empreendimentos_id = $request->empreendimentos_id;
        $promocaos ->nomeProd = $request->nomeProd;
        $promocaos ->marcaProd = $request->marcaProd;
        $promocaos ->valorProd = $request->valorProd;
        $promocaos ->categoria = $request->categoria;
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
        $getPromocao = Promocao::find($id)->first();
        $getEmpreendimento = DB::table('empreendimentos')->where('id', $getPromocao->empreendimentos_id)->first();
        $promocaos = Promocao::find($id);
        $promocaos->delete();
        return redirect('/empreendimentos/'.$getEmpreendimento->slug);
    }
}
