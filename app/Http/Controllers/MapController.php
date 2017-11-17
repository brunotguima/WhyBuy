<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mapper;
use Geocoder\Laravel\Facades\Geocoder;
use App\Empreendimentos;
use Auth;
use App\User;

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
        $geocoder = Geocoder::geocode($empreendimentos[0]->endereco . ', ' . $empreendimentos[0]->cidade . ', ' . $empreendimentos[0]->estado)->get();
        $latitude = $geocoder[0]->getCoordinates()->getLatitude();
        $longitude = $geocoder[0]->getCoordinates()->getLongitude();
        Mapper::map($latitude, $longitude);
        unset($geocoder,$latitude,$longitude);
        foreach ($empreendimentos as $empreendimento){
            $geocoder = Geocoder::geocode($empreendimento->endereco . ', ' . $empreendimento->cidade . ', ' . $empreendimento->estado)->get();
            $latitude = $geocoder[0]->getCoordinates()->getLatitude();
            $longitude = $geocoder[0]->getCoordinates()->getLongitude();
            Mapper::marker($latitude,$longitude)->informationWindow($latitude, $longitude, 'Content', ['markers' => ['animation' => 'DROP']]);
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
}
