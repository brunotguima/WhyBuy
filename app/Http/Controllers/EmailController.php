<?php

namespace App\Http\Controllers;
use Mail;
use Session;
use App\Http\Requests;
use Illuminate\Http\Request;

class EmailController extends Controller {

    public function getContato() {
        $mainPerfil = User::with('perfil')->find(Auth::user()->id);
        return view('suporte',compact('mainPerfil'));
    }

    public function postContato(Request $request) {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'mensagem' => 'required']);

        
        $infoContato = array(
            'name' => $request->name,
            'email' => $request->email,
            'mensagem' => $request->mensagem
        );
        Mail::send('emails.contato', $infoContato, function($mensagem) use ($infoContato){
            $mensagem->from($infoContato['email']);
            $mensagem->to('whybuy.tcc1@gmail.com','whybuytcc');
            $mensagem->subject($infoContato['mensagem']);
        });
        return \Redirect::route('suporte.get')->withSucess(true);
    }

}
