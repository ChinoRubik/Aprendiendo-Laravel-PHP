<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class FrutaController extends Controller{
    
    public function index(){
        $frutas=DB::table('frutas')->orderBy('id','desc')->get();
        return view('fruta.index', ['frutas'=>$frutas]);
    }

    public function detail($id){
        $fruta = DB::table('frutas')->where('id','=',$id)->first();
        return view('fruta.detail',['fruta' =>$fruta]);
    }

    public function agregar(){
        return view('fruta.agregar');
    }

    public function save(Request $request){

        $nombre = $request->get('name');   
        $descripcion = $request->get('desc');
        $precio = $request->get('price');
        DB::table('frutas')->insert(array(
            'nombre'=>$nombre,
            'descripcion'=>$descripcion,
            'precio' =>$precio,
            'fecha'=> date('Y-m-d')
        ));

        return redirect('frutas/index')->with('status','Fruta agregada correctamente');
    }

    public function delete($id){
        DB::table('frutas')->delete($id);
        return redirect('frutas/index')->with('status','Fruta borrada correctamente');

    }

    public function edit($id){
        $valores = DB::table('frutas')->where('id','=',$id)->first();
        
        return view('fruta.agregar',['fruta'=>$valores]);
    }

    public function update(Request $request){
        $id = $request->input('id');
        DB::table('frutas')->where('id','=',$id)->update(array(
            'nombre' => $request->input('name'),
            'descripcion' => $request->input('desc'),
            'precio' => $request->input('price')
        ));

        return redirect('frutas/index')->with('status','Actualizado correctamente.');
    }
}
