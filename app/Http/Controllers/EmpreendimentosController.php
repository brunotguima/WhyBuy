<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Empreendimentos;
use App\User;
use Auth;
use Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\RamoAtivEmpreendimento;

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
        $ramoAtividade = DB::table('ramoatividade')->get();
        return view ('empreendimentos.create',compact('mainPerfil','ramoAtividade'));
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
        $request->validate([
            'nomeFantasia' => 'required|string|max:50',
            'cnpj' => 'required|formato_cnpj|cnpj',
            'inscEst' => 'string|max:15',
            'razaoSocial' => 'required|string|max:255'
    ]);
        $testeNotRepeat = DB::table('empreendimentos')->where('nomeFantasia', $request->nomeFantasia)
        ->orWhere('cnpj',$request->cnpj)->count();
        if($testeNotRepeat >= 1) {
            $empreendimentos = DB::table('empreendimentos')->where('user_id', Auth::id())->get();
            $errorMessage = true;
            return view('empreendimentos.index',compact('empreendimentos','mainPerfil','errorMessage'));
        }else{
        $empreendimentos = new Empreendimentos();
            $empreendimentos->user_id = Auth::user()->id;
            $empreendimentos->nomeFantasia = $request->nomeFantasia;
            $empreendimentos->cnpj = $request ->cnpj;
            $empreendimentos->inscEst = $request ->inscEst;
            $empreendimentos->cep = $request ->cep;
            $empreendimentos->cidade = $request ->cidade;
            $empreendimentos->estado = $request ->estado;
            $empreendimentos->ramoAtividade_id = $request ->ramoAtiv;
            $empreendimentos->razaoSocial = $request ->razaoSocial;
            if($request->has('EmpImage')){
                $EmpImage = time().'.'.$request->EmpImage->getClientOriginalExtension();
                $request->EmpImage->move(public_path('images\empreendimentos'),$EmpImage);
                $empreendimentos->EmpImage = $EmpImage;
            }
            $empreendimentos->slug = $this->criar_slug($empreendimentos->nomeFantasia);
            $empreendimentos-> save();
            unset($empreendimentos);
            $empreendimentos = DB::table('empreendimentos')->where('user_id', Auth::id())->get();
            return view('empreendimentos.index',compact('empreendimentos','mainPerfil'));
        }
}
    /**
     * Display the specified resource.
     *
     * @param  \App\Empreendimentos  $empreendimentos
     * @return \Illuminate\Http\Response
     */
    public function show(Empreendimentos $empreendimentos)
    {
        $empreendimento = Empreendimentos::find($empreendimentos);
        $mainPerfil = User::with('perfil')->find(Auth::user()->id);
        return view('empreendimentos.show',compact('empreendimento','mainPerfil'));
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
        return redirect('/empreendimentos');
    }
    
    public function criar_slug($nomeFantasia){
        $pre = ['ã','á','â','ê','é','í','õ','ô','ó','ú',' '];
        $pos = ['a','a','a','e','e','i','o','o','o','u','-'];
        return str_replace($pre,$pos,mb_strtolower($nomeFantasia));
    }
}