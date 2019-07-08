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
        'img1' => 'box_1.jpg',
        'img2' => 'box_1_img.jpg',
        'descripcion' => 'Estos son los uniformes del momento',
        'extension' => 'jpg'
      ]);
      DB::table('boxes')->insert([
        'titulo' => 'Deportes',
        'nombre' => 'Deportes',
        'img1' => 'box_2.jpg',
        'img2' => 'box_2_img.jpg',
        'descripcion' => 'Estos son los uniformes del momento',
        'extension' => 'jpg'
      ]);
      DB::table('boxes')->insert([
        'titulo' => 'Urbano',
        'nombre' => 'Urbano',
        'img1' => 'box_3.jpg',
        'img2' => 'box_3_img.jpg',
        'descripcion' => 'Estos son los uniformes del momento',
        'extension' => 'jpg'
      ]);
    }
}
