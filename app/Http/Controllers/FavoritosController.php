<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Favoritos;

class FavoritosController extends Controller
{   
    public function __construct(){
        $this->middleware("auth",["except"=>"show"]);// si no se encuentra logueado el usuario automaticamente lo redireccionara a login
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
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
        $favorito = new Favoritos;
        $favorito->id_producto = $request->id_producto;
        $favorito->id_usuario = auth()->id();

        $respuesta = array();
        if($favorito->save()){
            $respuesta['rs'] = 'success';
            $respuesta['desc'] = 'Se agrego a Favoritos';
            return response()->json($respuesta,200);
        }else{
            $respuesta['rs'] = 'error';
            $respuesta['desc'] = 'Error del sistema/n No se pudo agregar a Favoritos';
            return response()->json($respuesta,500);
        }

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
