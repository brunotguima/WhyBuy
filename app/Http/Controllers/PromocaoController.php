<?php

namespace App\Http\Controllers;

use App\promocao;
Use App\User;
use App\Empreendimentos;
use Illuminate\Http\Request;

class PromocaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empreendimentos = User::with('perfil')->find(Auth::user()->id);
        $promocaos = DB::table('promocaos')->where('user_id', Auth::id())->get();
             return view ('promocao.index',compact('promocao','promocao'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('empreendimentos.create',compact('mainPerfil'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     $promocaos ->nomeProd = $request->nomeProd;
     $promocaos ->marcaProd = $request->marcaProd;
     $promocaos ->valorProd = $request->valorProd;
     $promocaos ->categoria = $request->categoria;
    $promocaos ->codProd = $request->codProd;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\promocao  $promocao
     * @return \Illuminate\Http\Response
     */
    public function show(promocao $promocao)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\promocao  $promocao
     * @return \Illuminate\Http\Response
     */
    public function edit(promocao $promocao)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\promocao  $promocao
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, promocao $promocao)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\promocao  $promocao
     * @return \Illuminate\Http\Response
     */
    public function destroy(promocao $promocao)
    {
        //
    }
}
