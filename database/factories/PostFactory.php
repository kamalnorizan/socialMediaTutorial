<?php

namespace Database\Factories;

use Ramsey\Uuid\Uuid;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $date = now()->subDays(rand(1, 50));
        return [
            'uuid' => Uuid::uuid4(),
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'user_id' => rand(1, 15),
            'created_at' => $date,
            'updated_at' => $date,
        ];
    }
}
