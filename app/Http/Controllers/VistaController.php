<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use App\Models\Banner;
use App\Models\Galeria;
use App\Models\Equipo;
use App\Models\Departamento;
use App\Models\SeccionArriendo;

class VistaController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function index()
    {
       $imagenes = Slider::all()->sortBy('orden');
       $banner = Banner::where("estado",1)->first();
       $seccionArriendo = SeccionArriendo::first();


       $equipos = Departamento::with("equipo")->get()->sortBy('departamento.id_depto');
       $depto = Departamento::get()->where('id_depto','<','3');
       $gallery = Galeria::get()->where("estado",1);
       return view('index',["slider" => $imagenes,"banner"=>$banner,"seccionArriendo" => $seccionArriendo,"equipos" => $equipos,
                            "gallery" => $gallery,"depto" => $depto]);
    }
}