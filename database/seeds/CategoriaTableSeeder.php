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
      DB::table('categoria')->insert([
        'nombre' => 'Uniformes'
      ]);
      DB::table('categoria')->insert([
        'nombre' => 'Deportes'
      ]);
      DB::table('categoria')->insert([
        'nombre' => 'Hurbano'
      ]);
    }
}
