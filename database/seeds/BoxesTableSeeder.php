<?php

use Illuminate\Database\Seeder;

class BoxesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('boxes')->insert([
        'titulo' => 'Uniformes',
        'nombre' => 'Uniformes',
        'img1' => '1.jpg',
        'img2' => '1_fondo.jpg',
        'descripcion' => 'Estos son los uniformes del momento',
        'extension' => 'jpg'
      ]);
      DB::table('boxes')->insert([
        'titulo' => 'Deportes',
        'nombre' => 'Deportes',
        'img1' => '2.jpg',
        'img2' => '2_fondo.jpg',
        'descripcion' => 'Estos son los uniformes del momento',
        'extension' => 'jpg'
      ]);
      DB::table('boxes')->insert([
        'titulo' => 'Urbano',
        'nombre' => 'Urbano',
        'img1' => '3.jpg',
        'img2' => '3_fondo.jpg',
        'descripcion' => 'Estos son los uniformes del momento',
        'extension' => 'jpg'
      ]);
    }
}
