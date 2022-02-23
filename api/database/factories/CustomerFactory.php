<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'dob' => $this->faker->date(),
            'email_verified_at' => now(),
            'avatar' => 'images/users/default.png',
            'email' => $this->faker->safeEmail(),
            'password' => bcrypt('password'),
            'gender' => rand(0, 1),
            'phone' => $this->faker->phoneNumber()
        ];
    }
}
