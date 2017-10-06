<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Perfil;
use App\User;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mainPerfil = User::with('perfil')->find(Auth::user()->id);
        return view('home', compact('mainPerfil'));
    }

    public function sobrenos()
    {
        $mainPerfil = User::with('perfil')->find(Auth::user()->id);
        return view ('sobrenos', compact('mainPerfil'));
    }

}
