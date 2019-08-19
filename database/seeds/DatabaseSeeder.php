<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(ProductsTableSeeder::class);
        $this->call([
            CarrucelTableSeeder::class
            // ProductsTableSeeder::class,
            // CategoriaTableSeeder::class,
            // BoxesTableSeeder::class,
            // UsersTableSeeder::class,
            // PermisosTableSeeder::class,
        ]);
    }
}
