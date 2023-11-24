<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Table>
 */
class TableFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'number' => strtoupper(Str::random(2)),
            'description' => fake()->sentence(12),
            'menu_id' => random_int(1,3),
            'is_available' => rand(0,1)
       ];
    }
}
