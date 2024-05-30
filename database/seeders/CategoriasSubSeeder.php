<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Categoria;
use App\Models\Subcategoria;
use Database\Factories\CategoriaFactory; 
use Database\Factories\SubcategoriaFactory; 

class CategoriasSubSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Crea algunas categorías utilizando el factory
        $pintura = Categoria::factory()->create([
            'formato' => 'Pintura',
        ]);

        $escultura = Categoria::factory()->create([
            'formato' => 'Escultura',
        ]);

        $fotografia = Categoria::factory()->create([
            'formato' => 'Fotografia',
        ]);
        

        // Crea subcategorías específicas para cada categoría
        Subcategoria::factory()->create([
            'tipo' => 'Oleo',
            'tema' => 'temaOleo',
            'material' => 'materialOleo',
            'epoca' => 'Renacentismo',
            'categoria_id' => $pintura->id,
        ]);

        Subcategoria::factory()->create([
            'tipo' => 'Acuarela',
            'tema' => 'temaAcuarela',
            'material' => 'materialAcuarela',
            'epoca' => 'Barroco',
            'categoria_id' => $pintura->id,
        ]);

        Subcategoria::factory()->create([
            'tipo' => 'Abstracto',
            'tema' => 'temaAbstracto',
            'material' => 'materialAbstracto',
            'epoca' => 'Moderno',
            'categoria_id' => $pintura->id,
        ]);

        Subcategoria::factory()->create([
            'tipo' => 'Esculpido en Piedra',
            'tema' => 'temaPiedra',
            'material' => 'Roca',
            'epoca' => 'Antiguo',
            'categoria_id' => $escultura->id,
        ]);

        Subcategoria::factory()->create([
            'tipo' => 'Tallado en Madera',
            'tema' => 'temaMadera',
            'material' => 'Madera Natural',
            'epoca' => 'Contemporáneo',
            'categoria_id' => $escultura->id,
        ]);

        Subcategoria::factory()->create([
            'tipo' => 'Forjado en Metal',
            'tema' => 'temaMetal',
            'material' => 'Metalico',
            'epoca' => 'Medieval',
            'categoria_id' => $escultura->id,
        ]);

        Subcategoria::factory()->create([
            'tipo' => 'Monocromatica',
            'tema' => 'temaMonocromatico',
            'material' => 'materialMonocromatico',
            'epoca' => 'epocaMonocromatico',
            'categoria_id' => $fotografia->id,
        ]);

        Subcategoria::factory()->create([
            'tipo' => 'Retrato',
            'tema' => 'temaRetrato',
            'material' => 'materialRetrato',
            'epoca' => 'epocaRetrato',
            'categoria_id' => $fotografia->id,
        ]);

        Subcategoria::factory()->create([
            'tipo' => 'Paisaje',
            'tema' => 'temaPaisaje',
            'material' => 'materialPaisaje',
            'epoca' => 'epocaPaisaje',
            'categoria_id' => $fotografia->id,
        ]);
    }
}
