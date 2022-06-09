<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Absen>
 */
class AbsenFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->numberBetween(1, 5),
            'tanggal' => $this->faker->dateTimeBetween('+1 week', '+3 week'),
            'alasan' => $this->faker->paragraph(),
            'active' => $this->faker->boolean(),
        ];
    }
}
