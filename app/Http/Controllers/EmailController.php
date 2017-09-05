<?php

namespace App\Http\Controllers;
use App\Mail;
use App\Http\Requests;
use Illuminate\Http\Request;

class EmailController extends Controller {

    public function getContato() {
        return view('suporte');
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
        Mail::send('emails.contato', $infoContato, function($vaiMensagem) use ($infoContato){
            $vaiMensagem->from($infoContato['email']);
            $vaiMensagem->to('whybuy.tcc1@gmail.com','whybuytcc');
            $vaiMensagem->nome($infoContato['nome']);
            $vaiMensagem->mensagem($infoContato['mensagem']);
            
        });
        return \Redirect::route('suporte')->with('message', 'Thanks for contacting us!');
    }

}
