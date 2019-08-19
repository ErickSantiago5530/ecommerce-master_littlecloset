<?php

namespace App;
use DB;

use Illuminate\Database\Eloquent\Model;

class Boxes extends Model
{
    //


    public function scopeLatest($query){
      return $query->orderBy("id","desc");
    }

    public function paypalItem($product){
      return \PaypalPayment::item()
              ->setName($product->titulo)
              ->setDescription($product->descripcion)
              ->setCurrency('USD')
              ->setQuantity(1)
              ->setPrice($product->precio/100);
    }

    public static function obtenultimoID(){
      $query = 'SELECT MAX(id) id FROM boxes';
      $ultimobox = DB::select($query)[0];
      return $ultimobox->id+1;
    }

    public static function obtenBoxesHome(){
      $query = 'SELECT * FROM boxes limit 3';
      $boxes = DB::select($query);
      return $boxes;
    }
}
