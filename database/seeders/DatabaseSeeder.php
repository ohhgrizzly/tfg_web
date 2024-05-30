<?php

namespace Database\Seeders;

use App\Models\Usuario;
use App\Models\Obras;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            CategoriasSubSeeder::class,
            AdminUserSeeder::class,
            UsuariosSeeder::class,
            ObrasSeeder::class,
            
        ]);

    }
}
