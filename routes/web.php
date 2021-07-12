<?php

use App\Http\Controllers\PeliculasController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\FrutaController;

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//frutas conectadas a la base de datos
//al decirle que son un grupo, en mi url todas antes tendran un /http://aprendiendo-laravel.com.devel/frutas/METODO DE MI CONTROLADOR
Route::group(['prefix' => 'frutas'], function(){
    Route::get('/index',[FrutaController::class,'index']);
    Route::get('/detail/{id}',[FrutaController::class,'detail']);
    Route::get('/agregar',[FrutaController::class,'agregar']);
    Route::post('/save',[FrutaController::class,'save']);
    Route::get('/delete/{id}',[FrutaController::class,'delete']);
    Route::get('/edit/{id}',[FrutaController::class,'edit']);
    Route::post('/update', [FrutaController::class, 'update']);
});



Route::get('/peliculas/{year?}',[PeliculasController::class, 'index']);
Route::get('/detalle/{year}',[PeliculasController::class,'detalle'])
->middleware('testYear');
Route::get('/redirigir',[PeliculasController::class,'redirigir']);
Route::get('/formulario',[PeliculasController::class, 'formulario']);

//METODO DONDE GUARDO MI INFORMACION DE USUARIO
Route::post('/guarda',[PeliculasController::class, 'guarda']);

//php artisan make:controller UsuarioController --resource --- ESTO ME CREA YA VARIOS METODOS EN MI CONTROLLER
//LA FORMA MAS OPTIMA DE OBTENER YA VARIOS METODOS POR DEFECTO EN MI CONTROLLER
Route::resource('/usuario',UsuarioController::class);


// Route::get('/fecha',function(){
//     return view('fecha', array(
//         'titulo_fecha' => 'titulo oficial para fecha'
//     ));
// });

//Pasar parametros por la URL

//SE NECESITA AGREGAR EL PARAMETRO QUE SE QUIERA PASAR A LA URL CON {} ADEMAS DE PASARLE EL VALOR POR LA FUNCION PARA PODER GUARDAR ESE VALOR EN UN ARRAY 
//AL MOMENTO DE REGRESAR LA VISTA YA TENER ESE VALOR
// Route::get('/pelicula/{titulo}',function($titulo){
//     return view('pelicula', array(
//         'titulo'=> $titulo
//     ));
// });

//Pasar parametros por la URL en caso de que no exista ningun parametro
//SOLO SE LE AGREGA EL SIGNO DE INTERROGACION PARA DECIR QUE PUEDE RECIBIR POR LA URL O NO.

// Route::get('/pelicula/{titulo?}',function($titulo="No hay ninguna pelicula"){
//     return view('pelicula', array(
//         'titulo'=> $titulo
//     ));
// });


//RUTA CON CONDICION
/*
Route::get('/pelicula/{titulo}/{year?}',function($titulo, $year=2021){
    return view('pelicula', array(
        'titulo'=> $titulo,
        'year' => $year
    ));
})->where(array(
    'titulo' => '[a-zA-Z]+',    //CON LA CONDICION DE QUE SI MI TITULO  SON LETRAS, ESTA CORRECTO
    'year' => '[0-9]+'
));



Route::get('/listado-peliculas',function(){
    $titulo = "Listado de Peliculas";
    $listado = array('Spiderman','Iron Man' , 'Capitan America');

    return view('peliculas.listado')    //LE ESTOY INDICANDO QUE EN MI CARPETA PELICULAS SE ENCUENTRA MI VISTA LISTADO
            ->with('titulo',$titulo)
            ->with('listado',$listado);   //ESTO ES LO MISMO A PASARLE UN ARRAY EN DATOS

});

Route::get('/pagina-generica',function(){
    return view('pagina-generica');
});
*/