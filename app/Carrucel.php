<?php

namespace App;
use DB;

use Illuminate\Database\Eloquent\Model;

class Carrucel extends Model
{
    //
    public static function carrucelHome(){
        $sql = 'SELECT 
                c.id,
                c.titulo,
                c.precio_oferta,
                p.precio,
                p.id id_producto,
                c.imagen_fondo,
                CONCAT(p.id,".",p.extension) AS imagen1,
                CONCAT(p2.id,".",p2.extension) AS imagen2, 
                CONCAT(p3.id,".",p3.extension) AS imagen3
                FROM carrucel c
                INNER JOIN products p ON c.id_producto = p.id
                INNER JOIN products p2 ON c.id_producto2 = p2.id
                INNER JOIN products p3 ON c.id_producto3 = p3.id';
        $carrucel = DB::select($sql);
        return $carrucel;
    }
}
