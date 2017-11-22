<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mapper;
use Geocoder\Laravel\Facades\Geocoder;
use App\Empreendimentos;
use App\promocao;
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
        // unset($geocoder,$latitude,$longitude);

        foreach ($empreendimentos as $empreendimento){
            $geocoder = Geocoder::geocode($empreendimento->endereco . ', ' . $empreendimento->cidade . ', ' . $empreendimento->estado)->get();
            $latitude = $geocoder[0]->getCoordinates()->getLatitude();
            $longitude = $geocoder[0]->getCoordinates()->getLongitude();
            $promocoes = promocao::where('empreendimentos_id',$empreendimento->id)->get();
            Mapper::informationWindow($latitude, $longitude, $this->infoWindowPopulate($empreendimento), ['title'=> $empreendimento->nomeFantasia, 'icon' => 'images/Pointer.png']);
        }
        return view('app_localizacao/gps',compact('mainPerfil','promocoes'));
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

    public function teste($empreendimento){
        
    }

    public function infoWindowPopulate($empreendimento)
    {
        $ramoAtividade = DB::table('ramoatividade')->where('id',$empreendimento->ramoAtividade_id)->get();
        return '
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
                    
                    </br>
                    <label>Endereço</label>
                    <p>'.$empreendimento->endereco.', '.$empreendimento->cidade.', '.$empreendimento->estado.', '.$empreendimento->cep.'</p>
                </div>
                <div class="card-action">
                    <ul><li><a onClick="sideNav1()" data-activates="slide-out1" id="button-collapse1" class="button-collapse">Veja as ofertas!</a></li></ul>
                </div>
            </div>
        </div>
    </div>
        ';
            return $retornar; 
    }
}
