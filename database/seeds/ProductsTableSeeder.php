<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('products')->insert([
          'titulo' => 'Lapiz de puntillas',
          'descripcion' => 'lapiz de multiples puntillas ideal para la escuela',
          'precio' => 10.50,
          'id_categoria' => 1,
          'id_usuario' => 1,
          'extension' => 'jpg',
      ]);
      DB::table('products')->insert([
          'titulo' => 'Goma De borrar',
          'descripcion' => 'Borrador ideal para la escuela',
          'precio' => 10.50,
          'id_categoria' => 1,
          'id_usuario' => 1,
          'extension' => 'jpg',
      ]);
      DB::table('products')->insert([
          'titulo' => 'Cargador tipo B',
          'descripcion' => 'Cargador para celular android tipo B',
          'precio' => 150,
          'id_categoria' => 1,
          'id_usuario' => 1,
          'extension' => 'jpg',
      ]);
    }
}
