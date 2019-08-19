<?php

use Illuminate\Database\Seeder;

class CarrucelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('carrucel')->insert([
            'titulo' => 'Uniformes En Promocion',
            'id_producto' => '10',
            'id_producto2' => '8',
            'id_producto3' => '7',
            'precio_oferta' => '19.99',
            'imagen_fondo' => '',
            'imagen1' => '',
            'imagen2' => ''
          ]);
    }
}
