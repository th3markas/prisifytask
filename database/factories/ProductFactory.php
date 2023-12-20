<?php

namespace Database\Factories;

use App\Models\Manufacturer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->name(),
            'price' => $this->faker->randomFloat(2),
            'stock' => $this->faker->numberBetween(0, 10000),
            'manufacturer_id' => Manufacturer::all()->random()->id,
        ];
    }
}
