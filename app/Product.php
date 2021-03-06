<?php

namespace App;
use DB;


use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    public static function getproducto(){
      $query = 'SELECT p.*,cat.nombre AS nombre_categoria 
                FROM products p
                INNER JOIN categorias cat ON p.id_categoria = cat.id';
      $productos = DB::select($query);
      return $productos;
    }

    public static function getproductosHome(){
      $query = 'SELECT p.*,cat.nombre AS nombre_categoria 
                FROM products p
                left JOIN categorias cat ON p.id_categoria = cat.id
                limit 6';
      $productos = DB::select($query);
      return $productos;
    }   
    
}
