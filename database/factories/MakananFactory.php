<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Makanan>
 */
class MakananFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nama' => $this->faker->name,
            'detail' => $this->faker->text,
            'harga' => $this->faker->numberBetween(4000, 25000),
            'foto' => $this->faker->imageUrl(),
        ];
    }
}
