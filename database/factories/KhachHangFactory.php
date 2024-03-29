<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\KhachHang>
 */
class KhachHangFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            // "id" =>"user" . fake()->numerify("########"),
            "name" => fake()->name(),
            "password" => fake()->password(),
            "email" => fake()->email(),
            "phone" => fake()->phoneNumber(),
        ];
    }
}
