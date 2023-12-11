<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Guestbook>
 */
class GuestbookFactory extends Factory
{
    public function definition(): array
    {
        return [
            'nama'   => $this->faker->name(),
            'alamat'   => $this->faker->city(),
            'email' => $this->faker->text(100)
        ];
    }
}

