<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductVariantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'sku' => $this->faker->ean8(),
            'price' => $this->faker->numberBetween(99, 999),
            'sale_price' => $this->faker->numberBetween(1, 98),
            'quantity' => $this->faker->numberBetween(99, 1999),
        ];
    }
}
