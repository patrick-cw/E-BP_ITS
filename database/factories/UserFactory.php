<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nrp' => $this->faker->numerify('0#111#40000###'),
            'email' => $this->faker->unique()->safeEmail(),
            'nama' => $this->faker->name(),
            'telp' => $this->faker->phoneNumber(),
            'jenjang' => $this->faker->randomElement(['D3','D4','S1', 'S2', 'S3', 'Profesi']),
            'fakultas' => $random->company(),
            'departemen' => $random->bs(),
            'judulTA' => $this->faker->sentence(),
            'status' => 0,
            'password' => Hash::make('12345')
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
