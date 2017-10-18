<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Empreendimentos;
use App\User;
use Auth;
use Image;
use Illuminate\Http\Request;

class EmpreendimentosController extends Controller
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
    $mainPerfil = User::with('perfil')->find(Auth::user()->id);
    $empreendimentos = DB::table('empreendimentos')->where('user_id', Auth::id())->get();
         return view ('empreendimentos.index',compact('empreendimentos','mainPerfil'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mainPerfil = User::with('perfil')->find(Auth::user()->id);
//        $empreendimentos = User::with('user')->find(User::user()->id);
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
        $mainPerfil = User::with('perfil')->find(Auth::user()->id);
        if($request->hasFile('EmpImage')){
        $EmpImage = time().'.'.$request->EmpImage->getClientOriginalExtension();
        $request->EmpImage->move(public_path('images\empreendimentos'),$EmpImage);
        }
            $empreendimentos = new Empreendimentos();
            $empreendimentos->user_id = Auth::user()->id;
            $empreendimentos->nomeEstab = $request->nomeEstab;
            $empreendimentos->cnpj = $request ->cnpj;
            $empreendimentos->inscEst = $request ->inscEst;
            $empreendimentos->cep = $request ->cep;
            $empreendimentos->cidade = $request ->cidade;
            $empreendimentos->estado = $request ->estado;
            $empreendimentos->ramoAtiv = $request ->ramoAtiv;
            $empreendimentos->nomeFant = $request ->nomeFant;
            $empreendimentos->EmpImage = $EmpImage;
            $empreendimentos->slug = $this->criar_slug($empreendimentos->nomeEstab);
            $empreendimentos-> save();
            unset($empreendimentos);
            $empreendimentos = DB::table('empreendimentos')->where('user_id', Auth::id())->get();
            return view('empreendimentos.index',compact('empreendimentos','mainPerfil'));
        
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
         $empreendimentos->delete();
        return redirect('empreendimentos');
    }
    
    public function criar_slug($nomeEstab){
        $pre = ['ã','á','â','ê','é','í','õ','ô','ó','ú',' '];
        $pos = ['a','a','a','e','e','i','o','o','o','u','-'];
        return str_replace($pre,$pos,mb_strtolower($nomeEstab));
    }
}
