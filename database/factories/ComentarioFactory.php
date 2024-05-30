<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ComentarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Obtener los IDs disponibles de obras y usuarios
        $obrasIds = DB::table('obras')->pluck('id');
        $usuariosIds = DB::table('usuarios')->pluck('id');

        return [
            'detallado' => $this->faker->paragraph(),
            'puntuacion' => $this->faker->numberBetween(1, 5),
            'id_obra' => $this->faker->randomElement($obrasIds),
            'id_usuario' => $this->faker->randomElement($usuariosIds),
        ];
    }
}
