<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Perfil;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use File;
use Image;
use Carbon\Carbon;

class PerfilController extends Controller
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
    public function index()
    {
        $mainPerfil = User::with('perfil')->find(Auth::user()->id);
         return view('perfil.index', compact('mainPerfil'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mainPerfil = User::with('perfil')->find(Auth::user()->id);
        $mainUser = User::select('name', 'dateNasc', 'email')->find(Auth::user()->id);
        return view('perfil.create', compact('mainUser', 'mainPerfil'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'cpf' => 'required|cpf|formato_cpf',
    ]);
        $perfil = new Perfil();
        $perfil->user_id = Auth::user()->id;
        $perfil->rg = $request->rg;
        $perfil->cpf = $request->cpf;
        $perfil->sexo = $request->sexo;
        $perfil->telUm = $request->telUm;
        $perfil->cell = $request->cell;
        if ($request->hasFile('image')) {
            $image = time().'.'.$request->image->getClientOriginalExtension();
            $perfil->image = $image;
            $request->image->move(public_path().'\images\perfils', $image);
        }
        $perfil->save(); 
        $mainPerfil = User::with('perfil')->find(Auth::user()->id);
        return redirect('perfil');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Perfil  $perfil
     * @return \Illuminate\Http\Response
     */
    public function show(Perfil $perfil)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Perfil  $perfil
     * @return \Illuminate\Http\Response
     */
    public function edit(Perfil $perfil)
    {
        $mainPerfil = DB::table('perfils')->find(Auth::user()->id);
       //return $perfil; 
       //$mainPerfil = User::with('perfil')->find(Auth::user()->id);
        return view('perfil.edit', compact('perfil','mainPerfil'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Perfil  $perfil
     * @return \Illuminate\Http\Response
     */
    public function update(Perfil $perfil, Request $request)
    {
        return $request;
        return $perfil;
        $perfil = find(Auth::user()->id);
        $perfil->telUm = $request->telUm;
        $perfil->cell = $request->cell;
        $perfil->update();
        return $perfil;
        return redirect('perfil/'.$perfil->id);
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Perfil  $perfil
     * @return \Illuminate\Http\Response
     */
    public function destroy(Perfil $perfil)
    {
        $perfil->delete();
        return redirect('perfil');
    }
    
}
