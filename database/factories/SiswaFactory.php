<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

class SiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $nama = $this->faker->name();
        $email = $this->faker->name() . "@gmail.com";
        return [
            'nama' => $nama,
            'email' => $email,
        ];
    }
}
