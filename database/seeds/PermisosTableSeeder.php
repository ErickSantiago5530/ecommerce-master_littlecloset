<?php

use Illuminate\Database\Seeder;

class PermisosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permisos')->insert([
            'nombre' => 'Admin'
        ]);
        DB::table('permisos')->insert([
            'nombre' => 'Vendedor'
        ]);
        DB::table('permisos')->insert([
            'nombre' => 'Usuario'
        ]);
    }
}
