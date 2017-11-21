<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mapper;
use Geocoder\Laravel\Facades\Geocoder;
use App\Empreendimentos;
use Auth;
use App\User;
use Illuminate\Support\Facades\DB;

class MapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mainPerfil = User::with('perfil')->find(Auth::user()->id);
        $empreendimentos = Empreendimentos::all();
        Mapper::map(-22.4325847, -46.961363,['zoom' => 15, 'markers' => ['title' => 'Mogi Mirim', 'animation' => 'DROP']]);
        unset($geocoder,$latitude,$longitude);
        foreach ($empreendimentos as $empreendimento){
            $geocoder = Geocoder::geocode($empreendimento->endereco . ', ' . $empreendimento->cidade . ', ' . $empreendimento->estado)->get();
            $latitude = $geocoder[0]->getCoordinates()->getLatitude();
            $longitude = $geocoder[0]->getCoordinates()->getLongitude();
            Mapper::informationWindow($latitude, $longitude, ($this->infoWindowPopulate($empreendimento)), ['title'=> $empreendimento->nomeFantasia, 'icon' => 'images/Pointer.png']);
        }
        return view('app_localizacao/gps',compact('mainPerfil'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function infoWindowPopulate($empreendimento)
    {
        $ramoAtividade = DB::table('ramoatividade')->where('id',$empreendimento->ramoAtividade_id)->get();
           $retornar = ('<html>
        
        <head>
            <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
            <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
            <meta name="viewport" content="width=device-width, initial-scale=1.0" />
            <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
            <script type="text/javascript" src="js/materialize.min.js"></script>
        </head>
        
        <body>
            <div class="col s12 m7" style="width:600px;">
                <div class="orange-text">
                    <h3 class="header center">'.$empreendimento->nomeFantasia.'</h3>
                </div>
                <div class="card horizontal">
                    <div class="card-image" style="width:200px;height:200px;">
                        <img src="'.asset('/images/empreendimentos').'/'.$empreendimento->EmpImage.'">
                    </div>
                    <div class="card-stacked">
                        <div class="card-content">
                            <label>Ramo Atividade</label>
                            <p>'.$ramoAtividade[0]->name.'</p>
                            </br>
                            <label>Endereço</label>
                            <p>'.$empreendimento->endereco.', '.$empreendimento->cidade.', '.$empreendimento->estado.', '.$empreendimento->cep.'</p>
                        </div>
                        <div class="card-action">
                            <a onClick="" data-activates="slide-out" class="button-collapse">Veja as ofertas!</a>
                        </div>
                    </div>
                </div>
            </div>
        </body>  
        </html>');
            return $retornar; 
    }
}
