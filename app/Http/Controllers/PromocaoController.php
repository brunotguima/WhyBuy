<?php

namespace App\Http\Controllers;
use Auth;
use App\promocao;
Use App\User;
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
    public function __construct(){
        $this->middleware('auth');
       }
    public function index()
    {
        $empreendimentos = DB::table('empreendimentos')->find(Auth::user()->id);
        $promocaos = DB::table('promocaos')->where('id', $empreendimentos->id)->get();
             return view ('promocao.index',compact('promocaos','empreendimentos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $empreendimentos = Empreendimentos::all();
        return view ('promocao.create',compact('empreendimentos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $promocaos =new Promocao;
    $promocaos ->empreendimentos_id = $request->empreendimentos_id;
     $promocaos ->nomeProd = $request->nomeProd;
     $promocaos ->marcaProd = $request->marcaProd;
     $promocaos ->valorProd = $request->valorProd;
     $promocaos ->categoria = $request->categoria;
    $promocaos ->codProd = $request->codProd;
    $promocaos ->save();

    $empreendimento = Empreendimentos::find($request->empreendimentos_id);
    return redirect()->route('empreendimentos.show', $empreendimento->slug);
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
