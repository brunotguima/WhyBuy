<?php

namespace App\Http\Controllers;

use App\Empreendimento;
use Illuminate\Http\Request;

class EmpreendimentoController extends Controller
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
        return view ('empreendimentos.index',compact('empreendimentos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('empreendimentos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->hasFile('image')){
        $image = time().'.'.$request->image->getClientOriginalExtension();
        $request->image->move(public_path('images\empreendimento'),$image);
        }
        $empreendimentos = new Empreendimento();
        $empreendimentos ->nomeEstab = $request->nomeEstab;
        $empreendimentos ->cnpj = $request ->cnpj;
        $empreendimentos ->inscEst = $request ->inscEst;
        $empreendimentos ->cep = $request ->cep;
        $empreendimentos ->cidade = $request ->cidade;
        $empreendimentos ->estado = $request ->estado;
        $empreendimentos ->ramoAtiv = $request ->ramoAtiv;
        $empreendimentos ->nomeFant = $request ->nomeFant;
        $empreendimentos ->image = $image;
        $empreendimentos -> save();
        return redirect('empreendimentos');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Empreendimentos  $empreendimentos
     * @return \Illuminate\Http\Response
     */
    public function show(Empreendimentos $empreendimentos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Empreendimentos  $empreendimentos
     * @return \Illuminate\Http\Response
     */
    public function edit(Empreendimentos $empreendimentos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Empreendimentos  $empreendimentos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Empreendimentos $empreendimentos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Empreendimentos  $empreendimentos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Empreendimentos $empreendimentos)
    {
        //
    }
}
