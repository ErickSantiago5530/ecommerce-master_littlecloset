<?php

use Illuminate\Database\Seeder;

class CategoriaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('categorias')->insert([
        'nombre' => 'Uniformes'
      ]);
      DB::table('categorias')->insert([
        'nombre' => 'Deportes'
      ]);
      DB::table('categorias')->insert([
        'nombre' => 'Hurbano'
      ]);
    }
}
