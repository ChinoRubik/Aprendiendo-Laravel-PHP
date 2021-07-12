<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeliculasController extends Controller{

    public function index($year=null){
        $listado = 'LISTADO DE PELICULAS AGARRADO DESDE UN CONTROLADOR';
        return view('pelicula.listado',array(
            'year'=>$year,
            'listado'=>$listado
        ));
    }

    public function detalle($year = null){
        return view('pelicula.detalle');
    }

    public function redirigir(){
        //return redirect()->action([PeliculasController::class,'detalle']); CODIGO PARA REDIRIGIR
        return redirect('/detalle');
    }

    public function formulario(){
        return view('pelicula.formulario');
    }

    public function guarda(Request $request){
        $nombe = $request->input('name');
        $email = $request->input('email');
        echo 'HOLA EL NOMBRE DEL USUARIO ES '.$nombe. ' Y EL EMAIL ES '.$email;
        die();
    }
}