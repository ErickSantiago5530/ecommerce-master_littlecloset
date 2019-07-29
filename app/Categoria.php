<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use DB;

class Categoria extends Model
{
    //
    public static function categoriaporID($id){
        $libros = DB::select('select * from products');
        dd($libros);
    }
}
