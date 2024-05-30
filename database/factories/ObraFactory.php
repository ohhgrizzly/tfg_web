<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ObraFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'titulo' => fake()->paragraph,
            'descripcion' => fake()->paragraph,
            /*'imagen' => $this->faker->imageUrl(),*/
            'id_usuario' => Usuario::factory()->create()->id,
            /*'subcategoria_id' => Subcategoria::factory()->create()->id,
            */
            'autor' => $this->faker->sentence,
        ];
    }
}
