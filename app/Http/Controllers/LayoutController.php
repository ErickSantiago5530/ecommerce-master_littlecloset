<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Boxes;
use App\Categoria;
use App\Images;
use App\Carrucel;


class LayoutController extends Controller
{
    //
    public function BoxesHome(){
        $image = new Images;
        $boxes = Boxes::obtenBoxesHome();
        $respuesta = array();
        $respuesta['boxes'] = $boxes;
        $respuesta['url_path'] = $image->url_path;
        return response()->json($respuesta,200);    
    }

    public function productosHome(){
        $image = new Images;
        // dd($image->url_path);
        $products = Product::getproductosHome(); 
        $categorias = Categoria::getcategoriasHome(); 
         
        $respuesta = array();
        $respuesta['productos'] = $products;
        $respuesta['categorias'] = $categorias;
        $respuesta['url_path'] = $image->url_path;
        return response()->json($respuesta,200);
    }

    public function carrucelHome(){
        $image = new Images;
        $carrucel = Carrucel::carrucelHome();
        $respuesta = array();
        $respuesta['carrucel'] = $carrucel;
        $respuesta['url_path'] = $image->url_path;
        return response()->json($respuesta,200);
    }
}
