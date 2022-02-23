<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CouponFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->lexify('Coupon ???'),
            'value' => $this->faker->numberBetween(1, 5),
            'percent' => rand(0, 1) ? $this->faker->numberBetween(1, 99) : null,
            'quantity' => $this->faker->numberBetween(1, 50),
            'expired_at' => $this->faker->dateTimeThisYear('+2 years')
        ];
    }
}
