<?php

namespace Database\Factories;

use App\Models\Subcategoria;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Subcategoria>
 */
class SubcategoriaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Subcategoria::class;

    public function definition()
        {
            return [
                'tipo' => $this->faker->word,
                'tema' => $this->faker->word,
                'material' => $this->faker->word,
                'epoca' => $this->faker->word,
                'categoria_id' => null,
            ];
        }
}
