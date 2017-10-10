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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::check()){
        $mainPerfil = User::with('perfil')->find(Auth::user()->id);
        }
        return view('home', compact('mainPerfil'));
    }

    public function sobrenos()
    {
        if (Auth::check()){
        $mainPerfil = User::with('perfil')->find(Auth::user()->id);
        }
        return view ('sobrenos', compact('mainPerfil'));
    }

}
